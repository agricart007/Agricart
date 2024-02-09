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
                    <li class="module"><a href="product.php">Products</a></li>
                    <li class="module"><a href="shop.php">Shop</a></li>
                    <li  class="module"><a href="about.php">About</a></li>
                    <li class="module"><a href="contact.php">Contact</a></li>
                    <li class="icon"><a href="cart.php"><ion-icon name="cart-outline"></ion-icon></a></li>
                    <li class="icon"><a href="profile."><ion-icon name="person-outline"></ion-icon></a></li>
                </ul>
            </div>
        </section>

        <section id="page-hadder" class="contct-hadder">
            <h2>Cart</h2>
            <p>Purchase products at best price</p>
        </section>

        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>Images</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                    </tr>
                 </thead>
                <tbody>
                    <tr>
                        <td></i><a href="#"><ion-icon name="close-circle-outline"></ion-icon></a></td>
                        <td><img src="../images/sproduct2.webp" alt=""></td>
                        <td>Men's Fashion Tshirt</td>
                        <td>$500</td>
                        <td><input type="number" value="1"></td>
                        <td>$500</td>
                    </tr>

                    <tr>
                        <td></i><a href="#"><ion-icon name="close-circle-outline"></ion-icon></a></td>
                        <td><img src="../images/sproduct1.png" alt=""></td>
                        <td>Men's Fashion Tshirt</td>
                        <td>$500</td>
                        <td><input type="number" value="1"></td>
                        <td>$500</td>
                    </tr>

                    <tr>
                        <td></i><a href="#"><ion-icon name="close-circle-outline"></ion-icon></a></td>
                        <td><img src="../images/sproduct2.webp" alt=""></td>
                        <td>Men's Fashion Tshirt</td>
                        <td>$500</td>
                        <td><input type="number" value="1"></td>
                        <td>$500</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="cart-parts" class="section-p1"> 
            <div id="coupon">
                <h3>Apply Coupon</h3>
                <div>
                    <input type="text" placeholder="Enter Your Coupon Code">
                    <button class="normal">Apply</button>
                </div>
            </div>

            <div id="subtotal">
                <h3>Cart Total</h3>
                <table>
                    <tr>
                        <td>Cart Subtotal</td>
                        <td>$500</td>
                    </tr>
                    <tr>
                        <td>Shipping Charges</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td>$500</td>
                    </tr>
                </table>

                <button class="normal">Proceed To Checkout</button>
            </div>
        </section>



        

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    <?php
        include ("footer.php");
    ?>
</html>