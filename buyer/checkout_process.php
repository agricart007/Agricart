<?php
include("../session/session_start.php");
include("../database/connection.php");

// Function to reduce the quantity of a product in the product_details table
function reduceProductQuantity($product_id, $quantity) {
    global $conn;

    // Retrieve the current quantity of the product
    $query = "SELECT quantity FROM product_details WHERE product_id = '$product_id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $current_quantity = $row['quantity'];

    // Calculate the new quantity after deduction
    $new_quantity = $current_quantity - $quantity;

    // Update the quantity of the product in the database
    $update_query = "UPDATE product_details SET quantity = '$new_quantity' WHERE product_id = '$product_id'";
    $update_result = mysqli_query($conn, $update_query);

    if(!$update_result) {
        // Handle update error
        echo "Error updating product quantity";
        return false;
    }

    return true;
}

// Check if 'username' session variable is set
if(isset($_SESSION['username'])) {
    // Retrieve the buyer ID
    $username = $_SESSION['username'];
    $buyer_id_query = "SELECT buyer_id FROM buyer_details WHERE email = '$username'";
    $buyer_id_result = mysqli_query($conn, $buyer_id_query);
    $buyer_id_row = mysqli_fetch_assoc($buyer_id_result);
    $buyer_id = $buyer_id_row['buyer_id'];

    // Retrieve product details from the hidden input field
    $product_details_json = $_POST['product_details'];
    $product_details = json_decode($product_details_json, true);

    // Generate a random 10-digit order number
    $order_no = mt_rand(1000000000, 9999999999);

    // Get the current date and time
    $order_date = date("Y-m-d H:i:s");

    // Insert product details into the order_details table
    foreach($product_details as $product) {
        $product_id = $product['product_id'];
        $price = $product['price'];
        $quantity = $product['quantity'];

        // Retrieve the seller ID for the product
        $seller_id_query = "SELECT seller_id FROM product_details WHERE product_id = '$product_id'";
        $seller_id_result = mysqli_query($conn, $seller_id_query);
        $seller_id_row = mysqli_fetch_assoc($seller_id_result);
        $seller_id = $seller_id_row['seller_id'];

        $insert_query = "INSERT INTO order_details (order_no, product_id, buyer_id, seller_id, price, quantity, order_date) VALUES ('$order_no', '$product_id', '$buyer_id', '$seller_id', '$price', '$quantity', '$order_date')";
        $insert_result = mysqli_query($conn, $insert_query);

        $_SESSION['order_no'] = $order_no;
        if(!$insert_result) {
            // Handle insertion error
            echo "Error inserting product details into order_details table";
        } else {
            // Reduce the quantity of the product
            $quantity_reduced = reduceProductQuantity($product_id, $quantity);
            if(!$quantity_reduced) {
                // Handle quantity reduction error
                echo "Error reducing product quantity";
            }
        }
    }

    // Remove all products from the cart_details table for the current buyer
    $remove_query = "DELETE FROM cart_details WHERE buyer_id = '$buyer_id'";
    $remove_result = mysqli_query($conn, $remove_query);

    if(!$remove_result) {
        // Handle removal error
        echo "Error removing products from cart_details table";
    }

    // Redirect to the checkout page or display a success message
    header("Location: checkout.php");
    exit();
} else {
    // Handle the case where the user is not logged in
    echo "Error: User is not logged in";
}
?>