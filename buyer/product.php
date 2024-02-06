<?php
// include ("../session/session_start.php");
// include("../session/session_check.php");
include("../database/connection.php");
$query = "SELECT * FROM product_details "; // Assuming your table name is 'product_details'
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AgriCart</title>
        <link rel="stylesheet" href="home.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
    </head>
    <body>

        <section id="header">
            <a href="#"><img src="../images/homelogo.png" class="logo"></a>
            <div>
            <ul id="navbar">
                    <li  class="module"><a href="home.php">Home</a></li>
                    <li class="module"><a class="active" href="product.php">Products</a></li>
                    <li class="module"><a href="shop.php">Shop</a></li>
                    <li  class="module"><a href="about.php">About</a></li>
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
        <?php
            $photo = empty($row['photo']) ? '../images/xyz.png' : $row['photo'];
            if (mysqli_num_rows($result) > 0) {
                // Output product data dynamically
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="pro-container">
                        <div class="pro">
                            <img src="<?php echo $photo; ?>">
                            <div class="des">
                                <!-- <span>ABCD</span> -->
                                <h5><?php echo $row['name']; ?></h5>
                                <div class="star">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>
                                <h4><?php echo $row['price']; ?></h4>
                            </div>
                            <a href="#" class="cart"><ion-icon name="cart-outline"></ion-icon></a>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
        </section>
        
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    <?php
        include("newsletter.php");
        include ("footer.php");
        
    ?>
</html>