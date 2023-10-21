<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_to_cart"])) {
    $product_id = $_POST["product_id"];
    $product_quantity = $_POST["product_quantity"];

    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = [];
    }

    // Add the product and quantity to the cart
    $_SESSION["cart"][$product_id] = $product_quantity;
    header("location:cart.php");
}
?>
