<?php
include ("../session/session_start.php");
include("../session/session_check.php");
include("../database/connection.php");
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
                    <a href="#"><ion-icon name="person-circle-outline"></ion-icon> Profile</a>
                    <a href="order.php"><ion-icon name="cube-outline"></ion-icon> Orders</a>
                    <a href="#"><ion-icon name="log-out-outline"></ion-icon> Log Out</a>
                    </div>
                </li>
                </ul>
            </div>
        </section>

        <section id="page-hadder" class="contct-hadder">
            <h2>Order's Page</h2>
            <p>Leave A Message, We Will Love To Hear From You</p>
        </section>

        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Images</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Status</td>
                        <td>Invoice</td>
                    </tr>
                 </thead>
                <tbody>
                    <tr>
                        <td>Tshirt</td>
                        <td><img src="../images/sproduct2.webp" alt=""></td>
                        <td>$500</td>
                        <td><input type="number" value="1" readonly></td>
                        <td><button>Process</button></td>
                        <td><button class="hello">Download</button></td>
                    </tr>
                </tbody>
            </table>
        </section>


   
<!-- <script>
      let popup = document.getElementById("popup");

function openPopup(){
    popup.classList.add("open-popup");
}
function closePopup(){
    popup.classList.remove("open-popup");
}
</script> -->
        

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    <?php
        include ("footer.php");
    ?>
</html>