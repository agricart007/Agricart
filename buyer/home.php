<?php
include("../database/connection.php");

$query = "SELECT * FROM product_details ORDER BY RAND() LIMIT 8"; // Ordering randomly and limiting to 6 products
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
            <li class="module"><a class="active" href="home.php">Home</a></li>
            <li class="module"><a href="product.php">Products</a></li>
            <li class="module"><a href="shop.php">Shop</a></li>
            <li class="module"><a href="about.php">About</a></li>
            <li class="module"><a href="contact.php">Contact</a></li>
            <li class="icon"><a href="cart.php"><ion-icon name="cart-outline"></ion-icon></a></li>
            <li class="icon"><a href="profile."><ion-icon name="person-outline"></ion-icon></a></li>
        </ul>
    </div>
</section>

<section id="hero">
    <b class="h4">Trade-in-offer</b>
    <b class="h2">Super value deals</b>
    <b class="h1">On all products</b>
    <p>Get up to 70% off!</p>
    <a href="product.php"><button>Shop Now</button></a>
</section><br><br>

<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Specially for Organic Farming</p>
    <div class="pro-container">
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

<section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Get up to <span>20% OFF</span> At Farming Goods</h2>
    <a href="product.php"><button class="normal">Explore More</button></a>
</section>


<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>Crazy deals</h4>
        <h2>Buy 2 Get 1 Free</h2>
        <span>The best products are on the Sale</span>
        <button class="white">Large More</button>
    </div>
    <div class="banner-box2">
        <h4>Spring/Summer</h4>
        <h2>Upcoming Season</h2>
        <span>The best products are coming soon</span>
        <button class="white">Large More</button>
    </div>
</section>

<section id="banner3">
    <div class="banner-box">
        <h2>SEASONAL SALE</h2>
        <h4>For winter Cultivation</h4>
    </div>
    <div class="banner-box2">
        <h2>SEASONAL SALE</h2>
        <h4>For winter Cultivation</h4>
    </div>
    <div class="banner-box3">
        <h2>SEASONAL SALE</h2>
        <h4>For winter Cultivation</h4>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
<?php
include("newsletter.php");
include ("footer.php");
?>
</html>
