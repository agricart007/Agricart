<?php
// include ("../session/session_start.php");
// include("../session/session_check.php");
// include("../database/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AgriCart</title>
        <link rel="stylesheet" href="home.css">
        <link rel="icon" href="../images/titlelogo.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1 , shrink-to-fit=no">
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
                    <li  class="module"><a href="home.php">Home</a></li>
                    <li class="module"><a href="product.php">Products</a></li>
                    <li class="module"><a href="shop.php">Shop</a></li>
                    <li  class="module"><a class="active" href="about.php">About</a></li>
                    <li class="module"><a href="contact.php">Contact</a></li>
                    <li class="icon"><a href="cart.php"><ion-icon name="cart-outline"></ion-icon></a></li>
                    <li class="icon"><a href="profile."><ion-icon name="person-outline"></ion-icon></a></li>
                </ul>
            </div>
        </section>

        <section id="page-hadder" class="contct-hadder">
            <h2>About Us</h2>
            <p>Learn Few Things About Us</p>
        </section>

        <section id="contact-details" class="section-p1">
            <div class="detalis">
                <h2>About Our Website</h2>
                <h3>Welcome to [Your E-Commerce Website Name],<br> 
                    where we celebrate the dedication and hard work<br>
                    of our farming community. As stewards of the land,<br>
                    farmers play a crucial role in feeding the world,<br>
                    and we are honored to support them through our online platform.
                </h3>   
            </div>
            <div class="map">
                <img src="../images/xyz3.avif">
            </div>
        </section>


        <section id="contact-details" class="section-p1">
            <div class="map">
                <img src="../images/useless.jpg">
            </div>
            <div class="detalis">
                <h3>At [Your E-Commerce Website Name],we<br>
                    understandthe unique challenges that farmers<br>
                    face, from unpredictable weather conditions to<br>
                    market fluctuations. Our mission is to empower farmers<br>
                    by providing them with a convenient and efficient way<br>
                    to access the tools, supplies, and resources they need to thrive.
                </h3>   
            </div>
        </section>

        <br><center><h1 class="why">Why choose AgriCart ?</h1></center><br><br><br>

       <section id="why">
        <div class="text">
            <h2>Agricultural Expertise:</h2><br>
            <p>Our team consists of individuals with a deep<br>
                understandingof agriculture. We are committed<br>
                to curating a selection ofproducts that meet the<br>
                specific needs of farmers, whetherthey are seasoned<br>
                professionals or just starting theirjourney in<br>
                agriculture.
           </p>
        </div>

        <div class="img">
            <img src="../images/xyz3.avif">
        </div>

        <div class="img">
            <img src="../images/useless.jpg">
        </div>

        <div class="text">
            <h2>Agricultural Expertise:</h2><br>
            <p>Our team consists of individuals with a deep understanding<br>
                of agriculture. We are committed to curating a selection of<br>
                products that meet the specific needs of farmers, whether<br>
                they are seasoned professionals or just starting their<br>
                journey in agriculture.
           </p>
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