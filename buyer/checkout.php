<?php
include("../session/session_start.php");
$order_no = $_SESSION['order_no'];
echo 'Order placed. Your order number is ' . $order_no;
?>