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
                    <li class="module"><a class="active" href="contact.php">Contact</a></li>
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

        <section id="contact-details" class="section-p1">
            <div class="detalis">
                <span>GET IN TOUCH</span>
                <h2>Visit our agency location or contact us today</h2>
                <h3>Head Office</h3>
                <div>
                    <li>
                        <ion-icon name="map-outline"></ion-icon>
                        <p>LJ Campus Near Sarkhej-Sanand Circle, Off, <br>
                           Sarkhej - Gandhinagar Hwy, Ahmedabad, Gujarat 382210</p>
                    </li>
                    <li>
                        <ion-icon name="mail-open-outline"></ion-icon>
                        <p>agricart007@gmail.com</p>
                    </li>
                    <li>
                        <ion-icon name="call-outline"></ion-icon>
                        <p>+91 89800 72388</p>
                    </li>
                    <li>
                        <ion-icon name="time-outline"></ion-icon>
                        <p>Monday to Saturday: 9:00am to 7:00pm</p>
                    </li>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.9106382472673!2d72.4839385747693!3d22.990313317532237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e83178affe615%3A0xec0bcf70a6918be9!2sL.J.%20Polytechnic%2C%20Ahmedabad!5e0!3m2!1sen!2sin!4v1704461058810!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section id="form-detail">
            <form action="action_contact.php" method="POST">
                <span>LEAVE A MESSAGE</span>
                <h2>We love to hear from you</h2>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="text" name="email" placeholder="E-mail" required>
                <!-- <input type="text" placeholder="Subject" required> -->
                <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message" required></textarea>
                <button class="normal">Submit</button>
            </form>
            <div class="people">
                <div>
                    <img src="../images/shlok.png">
                    <p><span>Sholk Patel</span>Project Leader<br>Phone: +91 89800 72388<br>Email: agricart007@gmail.com</p>
                </div>
                <div>
                    <img src="../images/vraj.png">
                    <p><span>Vraj Patel</span>Web Designer<br>Phone: +91 98988 66307<br>Email: agricart007@gmail.com</p>
                </div>
                <div>
                    <img src="../images/nand.png">
                    <p><span>Nand Patel</span>Web Designer<br>Phone: +91 99985 58383<br>Email: agricart007@gmail.com</p>
                </div>
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