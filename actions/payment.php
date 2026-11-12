<?php
require "../classes/User.php";

if (isset($_POST['btn_pay'])) {
    $id = $_POST['id'];
    $buy_quantity = $_POST['buy_quantity'];
    $total_price = $_POST['total_price'];
    $paid_amount = $_POST['paid_amount'];

    if ($paid_amount < $total_price) {
        die("Payment rejected: The entered amount ($$paid_amount) is less than the total price ($$total_price). <a href='../views/dashboard.php'>Back to Dashboard</a>");
    }

    $product_obj = new User;
    $product_obj->payProduct($id, $buy_quantity);
}
?>