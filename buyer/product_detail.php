<?php
include("../database/connection.php");
include("../session/session_start.php");

// Check if 'username' session variable is set
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

// Fetch product details based on product_id if available
if(isset($_GET['product_id'])) {
    $product_id = mysqli_real_escape_string($conn, $_GET['product_id']);
    $query = "SELECT * FROM product_details WHERE product_id = '$product_id'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        $image1 = empty($row['photo']) ? '../images/xyz.png' : $row['photo'];
        $image2 = empty($row['photo']) ? '../images/xyz.png' : $row['photo2'];
        $image3 = empty($row['photo']) ? '../images/xyz.png' : $row['photo3'];
    }
}
if(isset($_POST['add_to_cart'])) {
    // Sanitize and validate form data
    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
    // $size = mysqli_real_escape_string($conn, $_POST['size']);
    $quantity = (int)$_POST['quantity']; // Convert to integer

    // Insert product details into cart_details table
    // $insert_query = "INSERT INTO cart_details (product_id, buyer_username, size, quantity) VALUES ('$product_id', '$username', '$size', '$quantity')";
    // $insert_result = mysqli_query($conn, $insert_query);
    $insert_query = "INSERT INTO cart_details (product_id, buyer_username, quantity) VALUES ('$product_id', '$username', '$quantity')";
    $insert_result = mysqli_query($conn, $insert_query);

    if($insert_result) {
        // Product successfully added to cart
        echo "<script>alert('Product added to cart successfully.')</script>";
    } else {
        // Error occurred while adding product to cart
        echo "<script>alert('Failed to add product to cart. Please try again.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriCart</title>
    <link rel="stylesheet" href="home.css">
    <link rel="icon" href="../images/titlelogo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <script>
    function reloadPage() {
        location.reload();
    }
    </script>
</head>
<body>

<section id="header">
    <a onclick="reloadPage()"><img src="../images/homelogo.png" class="logo"></a>
    <div>
        <ul id="navbar">
            <li class="module"><a href="index.php">Home</a></li>
            <li class="module"><a class="active" href="product.php">Products</a></li>
            <li class="module"><a href="shop.php">Shop</a></li>
            <li class="module"><a href="about.php">About</a></li>
            <li class="module"><a href="contact.php">Contact</a></li>
            <li class="icon"><a href="cart.php"><ion-icon name="cart-outline"></ion-icon></a></li>
            <li class="icon"><a href="profile."><ion-icon name="person-outline"></ion-icon></a></li>
        </ul>
    </div>
</section>

<section id="productdetails" class="section-p1">
    <?php if(isset($name)): ?>
    <div class="single-product-image">
        <img src="../images/<?php echo $image1; ?>" width="100%" id="MainImg" alt="Main Image">

        <div class="small-img-group">
        <div class="small-img-col">
            <img src="../images/<?php echo $image1; ?>" width="100%" class="small-img" alt="Small Image 1">
        </div>

            <div class="small-img-col">
                <img src="../images/<?php echo $image2; ?>" width="100%" class="small-img" alt="Small Image 2">
            </div>
            <div class="small-img-col">
                <img src="../images/<?php echo $image3; ?>" width="100%" class="small-img" alt="Small Image 3">
            </div>
        </div>
    </div>

    <div class="single-product-details">
        <h1><?php echo $name; ?></h1>
        <h4>Product Description</h4>
        <h2>₹<?php echo $price; ?></h2>
        <form method="post" action="">
            <select name="size">
                <option>Select Size</option>
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>XL</option>
                <option>XXL</option>
            </select>
            <input type="number" name="quantity" value="1" min="1" max="<?php echo $quantity; ?>">
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            <button type="submit" name="add_to_cart" class="normal">Add To Cart</button>
        </form>
        <h4>Product Details</h4>
        <span><?php echo $row['description']; ?></span>
    </div>
    <?php else: ?>
    <p>No product found.</p>
    <?php endif; ?>
</section>
<?php include("8_product.php");?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script>
   var MainImg = document.getElementById("MainImg");
   var smallimg =document.getElementsByClassName("small-img");

   smallimg[0].onclick =function(){
     MainImg.src = smallimg[0].src;
   }
   smallimg[1].onclick =function(){
     MainImg.src = smallimg[1].src;
   }
   smallimg[2].onclick =function(){
     MainImg.src = smallimg[2].src;
   }
   smallimg[3].onclick =function(){
     MainImg.src = smallimg[3].src;
   }
</script>

</body>
<?php
include ("footer.php");
?>
</html>
