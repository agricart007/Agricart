<?php
include("../database/connection.php");
// include("../session/session_start.php");

$query = "SELECT * FROM product_details ORDER BY RAND() LIMIT 8"; 
$result = mysqli_query($conn, $query);
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
 
if(isset($_POST['add_to_cart_short_cut'])) {
    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
    $quantity = 1; 
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
    <title>Agricart</title>
    <link rel="stylesheet" href="home.css">
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <section id="product1" class="section-p1">
        <h2>Similar Products</h2>
        <p>Specially for Organic Farming</p>
        <div class="pro-container">
        <?php
            // Loop through each product fetched from the database
            while ($row = mysqli_fetch_assoc($result)) {
                $image = empty($row['photo']) ? '../images/xyz.png' : '../images/' . $row['photo'];
                $product_id = $row['product_id']; // Assuming 'product_id' is the primary key column in your 'product_details' table
                $name = $row['name'];
                $price = $row['price'];

                // Output HTML for each product with a link to product_detail.php along with the product ID
                echo '<div class="pro">';
                echo '<a href="product_detail.php?product_id=' . $product_id . '">';
                echo '<img src="' . $image . '" alt="">';
                echo '</a>';
                echo '<div class="des">';
                echo '<span><h5>' . $name . '</h5></span>';
                echo '<h5>' . 700 . '</h5>';
                echo '<div class="star">';
                echo '<ion-icon name="star"></ion-icon>';
                echo '<ion-icon name="star"></ion-icon>';
                echo '<ion-icon name="star"></ion-icon>';
                echo '<ion-icon name="star"></ion-icon>';
                echo '<ion-icon name="star"></ion-icon>';
                echo '</div>';
                echo '<h4>₹' . $price . '</h4>';
                echo '</div>';
                // Add to cart button inside a form element
                echo '<form method="post" action="">';
                echo '<input type="hidden" name="product_id" value="' . $product_id . '">';
                echo '<button class="cart" type="submit" name="add_to_cart_short_cut"><ion-icon name="cart-outline"></ion-icon></button>';
                echo '</form>';
                echo '</div>';
            }
        ?>
        </div>
    </section>
</body>
</html>
