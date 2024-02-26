<?php
include("../session/session_start.php");
include("../database/connection.php");

// Check if 'username' session variable is set
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $buyer_id_query = "SELECT buyer_id FROM buyer_details WHERE email = '$username'";
    $buyer_id_result = mysqli_query($conn, $buyer_id_query);
    $buyer_id_row = mysqli_fetch_assoc($buyer_id_result);
    $buyer_id = $buyer_id_row['buyer_id'];
    echo $buyer_id;

// for procede to checkout

    // Fetch cart details for the logged-in user
    $query = "SELECT cart_details.*, product_details.name, product_details.price, product_details.photo FROM cart_details 
              INNER JOIN product_details ON cart_details.product_id = product_details.product_id
              WHERE cart_details.buyer_id = '$buyer_id'";
    $result = mysqli_query($conn, $query);

    // Initialize total price variable
    $totalPrice = 0;

    // Calculate total price of all items in the cart
    while ($row = mysqli_fetch_assoc($result)) {
        $product_price = $row['price'];
        $quantity = $row['quantity'];
        $subtotal = $product_price * $quantity;
        $totalPrice += $subtotal;
    }

    // Check if remove button is clicked
    if(isset($_GET['remove_product'])) {
        $product_id = $_GET['remove_product'];

        // Remove the specific product from the cart for the logged-in user
        $remove_query = "DELETE FROM cart_details WHERE buyer_id = '$buyer_id' AND product_id = $product_id LIMIT 1";
        $remove_result = mysqli_query($conn, $remove_query);

        if($remove_result) {
            // Product successfully removed
            header("Location: cart.php"); // Redirect back to the cart page
            exit();
        } else {
            // Error occurred while removing the product
            echo "Error removing product from cart";
        }
    }
}

// Initialize discount variable
$discount = 0;

// Handle coupon code submission
if(isset($_POST['apply_coupon'])) {
    $coupon_code = mysqli_real_escape_string($conn, $_POST['coupon_code']);

    // Query the database to check if the coupon code exists
    $coupon_query = "SELECT * FROM coupon_details WHERE coupon_code = '$coupon_code'";
    $coupon_result = mysqli_query($conn, $coupon_query);

    if(mysqli_num_rows($coupon_result) > 0) {
        // Coupon code exists, retrieve its discount value
        $coupon_data = mysqli_fetch_assoc($coupon_result);
        $discount = $coupon_data['discount_percentage'];

        // Apply the discount to the total price
        $discountedAmount = ($totalPrice * $discount) / 100;
        $totalPrice -= $discountedAmount;

        // If the total price becomes negative due to the discount, set it to 0
        if($totalPrice < 0) {
            $totalPrice = 0;
        }

        // Alert for successful coupon application
        echo "<script>alert('Coupon applied successfully.')</script>";
    } else {
        // Coupon code not valid
        echo "<script>alert('Coupon code not valid.')</script>";
    }
}

// Handle coupon removal
if(isset($_GET['remove_coupon']) && $_GET['remove_coupon'] === 'true') {
    // Reset discount to 0
    $discount = 0;
    
}

$shippingCharges = 0;
if(isset($result)) {
    mysqli_data_seek($result, 0);
    while ($row = mysqli_fetch_assoc($result)) {
        $product_price = $subtotal;
        if ($product_price < 150) {
            $shippingCharges += 20;
        }
    }
}

$totalWithShipping = $totalPrice + $shippingCharges;
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
        
        function prepareCheckout() {
            // Create an array to store product details
            var products = [];

            // Loop through each product row in the table
            var rows = document.querySelectorAll("#cart tbody tr");
            rows.forEach(function(row) {
                var product = {
                    product_id: row.querySelector(".product_id").value,
                    price: row.querySelector(".price").textContent.replace("₹", ""),
                    quantity: row.querySelector(".quantity").textContent,
                };
                // Push product details to the array
                products.push(product);
            });

            // Convert the array to JSON and set it as the value of the hidden input field
            document.getElementById("product_details").value = JSON.stringify(products);
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
                <li class="module"><a href="about.php">About</a></li>
                <li class="module"><a href="contact.php">Contact</a></li>
                <li class="icon"><a href="cart.php"><ion-icon name="cart-outline"></ion-icon></a></li>
                <li class="dropdown"><a href="#" class="dropbtn"><ion-icon name="person-outline"></ion-icon></a>
            <div class="dropdown-content">
                <a href="profile.php"><ion-icon name="person-circle-outline"></ion-icon> Profile</a>
                <a href="order.php"><ion-icon name="cube-outline"></ion-icon> Orders</a>
                <a href="../login/logout.php"><ion-icon name="log-out-outline"></ion-icon> Log Out</a>
            </div>
            </li>
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
                <?php
                if(isset($result)) {
                    // Reset the data seek pointer to start fetching from the beginning
                    mysqli_data_seek($result, 0);
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        $product_name = $row['name'];
                        $product_price = $row['price'];
                        $quantity = $row['quantity'];
                        $subtotal = $product_price * $quantity;
                ?>
                        <tr>
                            <td><a href="cart.php?remove_product=<?php echo $row['product_id']; ?>"><ion-icon name="close-circle-outline"></ion-icon></a></td>
                            <td><img src="../images/<?php echo empty($row['photo']) ? 'abc2.jpeg' : $row['photo']; ?>" alt="Product Image"></td>
                            <td><?php echo $product_name; ?></td>
                            <td class="price">₹<?php echo $product_price; ?></td>
                            <td class="quantity"><?php echo $quantity; ?></td>
                            <td>₹<?php echo $subtotal; ?></td>
                            <input type="hidden" class="product_id" value="<?php echo $row['product_id']; ?>">
                        </tr>
                <?php 
                    }
                } else {
                    echo "<tr><td colspan='6'>No items in the cart</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>

    <section id="cart-parts" class="section-p1"> 
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <form method="post" action="">
                <input type="text" name="coupon_code" placeholder="Enter Your Coupon Code">
                <button type="submit" name="apply_coupon" class="normal">Apply</button>
            </form>
        </div>

        <div id="subtotal">
            <h3>Cart Total</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>₹<?php echo number_format($totalPrice, 2); ?></td>
                </tr>
                <tr>
                    <td>Shipping Charges</td>
                    <td><?php echo ($shippingCharges == 0) ? 'Free' : "₹" . $shippingCharges; ?></td>
                </tr>
                <?php if($discount > 0): ?>
                <tr>
                    <td>Coupon Discount</td>
                    <td>
                        <?php echo $discount; ?>%
                        <a href="cart.php?remove_coupon=true" style="margin-left: 10px;">Remove</a>
                    </td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td><strong>Total</strong></td>
                    <td>₹<?php echo number_format($totalWithShipping, 2);?></td>
                </tr>
            </table>

            <form method="post" action="checkout_process.php" id="checkout_form">
                <input type="hidden" name="product_details" id="product_details">
                <!-- <input type="hidden" name="shipping_charges" value="<?php echo $shippingCharges; ?>"> -->
                <button type="submit" name="proceed_to_checkout" class="normal" onclick="prepareCheckout()">Proceed To Checkout</button>
            </form>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
<?php
    include ("footer.php");
?>
</html>