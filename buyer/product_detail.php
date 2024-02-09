<?php
include("../database/connection.php");

$query = "SELECT * FROM product_details ORDER BY RAND() LIMIT 8"; // Assuming your table name is 'product_details'
$result = mysqli_query($conn, $query);
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
    <div class="single-product-image">
       <img src="../images/sproduct2.webp" width="100%" id="MainImg" alt="">

        <div class="small-img-group">
            <div class="small-img-col">
               <img src="../images/sproduct2.webp" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
               <img src="../images/sproduct1.png"width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
               <img src="../images/sproduct2.webp" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
               <img src="../images/sproduct2.webp" width="100%" class="small-img" alt="">
            </div>
        </div>

    </div>

    <div class="single-product-details">

        <h1>Home / T-shirt</h1>
        <h4>Men's Fashion T-shirt</h4>
        <h2>$500</h2>
        <select>
            <option>Select Size</option>
            <option>Small</option>
            <option>Medium</option>
            <option>Large</option>
            <option>XL</option>
            <option>XXL</option>
        </select>
        <input type="number" value="1">
        <button class="normal">Add To Cart</button>
        <h4>Product Details</h4>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nihil hic adipisci ab.<br>
             Quibusdam asperiores accusamus corrupti? Aliquam facilis nulla repellendus ut cupiditate<br>
              inventore obcaecati quaerat delectus, harum eos maiores.Lorem ipsum dolor sit amet consectetur<br>
               adipisicing elit. Ex similique eaque, eveniet reprehenderit nihil modi exercitationem,<br> 
               porro beatae unde accusamus,amet quos! Corporis assumenda minima laboriosam, optio eos inventore veritatis?
        </span>

    </div>
    
</section>

<section id="product1" class="section-p1">
    <h2>Similar Products</h2>
    <p>Specially for Organic Farming</p>
    <div class="pro-container" onclick="window.location.href='product_detail.php';">
        <?php
        // Loop through each product fetched from the database
        while ($row = mysqli_fetch_assoc($result)) {
            $image = empty($row['photo']) ? '../images/xyz.png' : $row['photo'];
            $name = $row['name'];
            $price = $row['price'];

            // Display product dynamically using fetched data
            echo '<div class="pro">';
            echo '<img src="' . $image . '" alt="">';
            echo '<div class="des">';
            echo '<span>ABCD</span>';
            echo '<h5>' . $name . '</h5>';
            echo '<div class="star">';
            echo '<ion-icon name="star"></ion-icon>';
            echo '<ion-icon name="star"></ion-icon>';
            echo '<ion-icon name="star"></ion-icon>';
            echo '<ion-icon name="star"></ion-icon>';
            echo '<ion-icon name="star"></ion-icon>';
            echo '</div>';
            echo '<h4>₹' . $price . '</h4>';
            echo '</div>';
            echo '<a href="#" class="cart"><ion-icon name="cart-outline"></ion-icon></a>';
            echo '</div>';
        }
        ?>
    </div>
</section>

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
// include("newsletter.php");
include ("footer.php");
?>
</html>
