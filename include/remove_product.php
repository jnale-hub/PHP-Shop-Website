<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the product ID from the POST data
    $productID = $_POST['productID'];

    // Ensure the cart session data exists
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        // Check if the product to be removed is in the cart
        if (array_key_exists($productID, $_SESSION['cart'])) {
            // Remove the product from the cart
            unset($_SESSION['cart'][$productID]);
            // You can also update other cart-related logic here

            // Send a success response
            http_response_code(200);
            echo "Product removed from the cart.";
        } else {
            // Product not found in the cart
            http_response_code(404);
            echo "Product not found in the cart.";
        }
    } else {
        // Cart data doesn't exist
        http_response_code(400);
        echo "Cart data not found.";
    }
} else {
    // Invalid request method
    http_response_code(405);
    echo "Invalid request method.";
}
?>
