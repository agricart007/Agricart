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
            <div class="pro-container">
                <div class="pro">
                    <img src="../images/xyz.png" alt="">
                    <div class="des">
                        <span>ABCD</span>
                        <h5>A-B-C-D image</h5>
                        <div class="star">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        <h4>₹780</h4>
                    </div>
                    <a href="#" class="cart"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
                <div class="pro">
                    <img src="../images/xyz.png" alt="">
                    <div class="des">
                        <span>ABCD</span>
                        <h5>A-B-C-D image</h5>
                        <div class="star">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        <h4>₹780</h4>
                    </div>
                    <a href="#" class="cart"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
                <div class="pro">
                    <img src="../images/xyz.png" alt="">
                    <div class="des">
                        <span>ABCD</span>
                        <h5>A-B-C-D image</h5>
                        <div class="star">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        <h4>₹780</h4>
                    </div>
                    <a href="#" class="cart"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
                
               
            
        </section>
 
        <!-- <section id="pagination" class="section-p1">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#"><ion-icon name="arrow-forward-outline"></ion-icon></i></a>
        </section> -->

        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Sign up For Newsletters</h4>
                <p>Get E-mail update about our latest product and <span>Special Offers.</span></p>
            </div>
            <div class="form">
                <input type="text" placeholder="Your email address">
                <button class="normal">Signe Up</button>
            </div>
        </section>


        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    <?php
        include ("footer.php");
    ?>
</html>