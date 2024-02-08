<?php
include("../database/connection.php");

$query = "SELECT * FROM product_details ORDER BY RAND()"; // Assuming your table name is 'product_details'
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
            <li  class="module"><a href="index.php">Home</a></li>
            <li class="module"><a class="active" href="product.php">Products</a></li>
            <li class="module"><a href="shop.php">Shop</a></li>
            <li class="module"><a href="about.php">About</a></li>
            <li class="module"><a href="contact.php">Contact</a></li>
            <li class="icon"><a href="cart.php"><ion-icon name="cart-outline"></ion-icon></a></li>
            <li class="icon"><a href="profile."><ion-icon name="person-outline"></ion-icon></a></li>
        </ul>
    </div>
</section>

<section id="page-hadder">
    <h2>Grow your own</h2>
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
            echo '<span> <h5>' . $name . '</h5></span>';
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
            echo '<a href="#" class="cart"><ion-icon name="cart-outline"></ion-icon></a>';
            echo '</div>';
        }
        ?>
    </div>
</section>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
<?php
// include("newsletter.php");
include ("footer.php");
?>
</html>
