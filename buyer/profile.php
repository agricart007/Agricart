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
            <li class="module"><a href="home.php">Home</a></li>
            <li class="module"><a href="product.php">Products</a></li>
            <li class="module"><a href="shop.php">Shop</a></li>
            <li class="module"><a href="about.php">About</a></li>
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

<section id="profile">
    <div class="profile-1">
        <center>
                <img src="../images/adminfarmerlogo.png" alt=""><br><br>
                 <h2> Farmer Name </h2>
                 <span>Farmer Email </span><br>
        </center>
    </div>
    <div class="profile-2">
            <center><h3>Profile Settings</h3></center>
            <div class="name">
                Full Name<br>
                <input type="text" placeholder="Enter full name...">
            </div>
            <div class="name">
                Phone Number<br>
                <input type="text" placeholder="Enter phone number...">
            </div>
            <div class="name">
                Email<br>
                <input type="text" placeholder="Enter email id...">
            </div>
            <div class="name">
                Address<br>
                <textarea placeholder="Address..."></textarea>
            </div>
            <div class="name">
                Country<br>
                <input type="text" placeholder="Enter your country...">
            </div>
            <div class="name">
                State/Region<br>
                <input type="text" placeholder="Enter your state/region...">
            </div>
            <center><button class="profile-button">Save Changes</button></center>
        </div>
        <div class="profile-3">
        <center><h3>Change Password</h3></center>
            <div class="name">
                Current Password<br>
                <input type="text" placeholder="Enter current password...">
            </div>
            <div class="name">
                New Password<br>
                <input type="text" placeholder="Enter new password...">
            </div>
            <div class="name">
                Confirm Password<br>
                <input type="text" placeholder="Confirm password...">
            </div>
            <center><button class="profile-button">Save Changes</button></center>
    </div>
</section>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
<?php
include ("footer.php");
?>
</html>
