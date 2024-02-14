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
                    <li  class="module"><a href="home.php">Home</a></li>
                    <li class="module"><a href="product.php">Products</a></li>
                    <li class="module"><a href="shop.php">Shop</a></li>
                    <li  class="module"><a href="about.php">About</a></li>
                    <li class="module"><a href="contact.php">Contact</a></li>
                    <li class="icon"><a href="cart.php"><ion-icon name="cart-outline"></ion-icon></a></li>
                    <li class="dropdown"><a href="#" class="dropbtn"><ion-icon name="person-outline"></ion-icon></a>
                    <div class="dropdown-content">
                    <a href="profile.php"><ion-icon name="person-circle-outline"></ion-icon> Profile</a>
                    <a href="#"><ion-icon name="cube-outline"></ion-icon> Orders</a>
                    <a href="#"><ion-icon name="log-out-outline"></ion-icon> Log Out</a>
                    </div>
                </li>
                </ul>
            </div>
        </section>

        <section id="page-hadder" class="contct-hadder">
            <h2>Let's_talk</h2>
            <p>Leave A Message, We Will Love To Hear From You</p>
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

                <div class="container">
                     <button class="normal" onclick="openPopup()">Proceed To Checkout</button>
                     <div class="popup" id="popup">
      
                            <img src="../images/404-tick.png" alt="">
                          <h2>Thank You!</h2>
                           <p>Your Order Has Been Successfully Placed Thanks!</p> 
                          <button type="button" onclick="closePopup()">Ok</button>
                     </div>
                 </div>
               
            </div>
        </section>


<script>
      let popup = document.getElementById("popup");

function openPopup(){
    popup.classList.add("open-popup");
}
function closePopup(){
    popup.classList.remove("open-popup");
}
</script>
        

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    <?php
        include ("footer.php");
    ?>
</html>