<?php 
include 'include/database.php';

// Retrieve cart items from the session
$cart = $_SESSION['cart'] ?? [];

// Fetch products from the database based on cart items
$products = [];

if (!empty($cart)) {
    $productIds = array_keys($cart);

    // Using a prepared statement to prevent SQL injection
    $placeholders = str_repeat('?,', count($productIds) - 1) . '?';
    $sql = "SELECT * FROM products WHERE id IN ($placeholders)";

    // Prepare and execute the query
    $stmt = $db->prepare($sql);
    $stmt->execute($productIds);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$totalItems = count($products);
$subtotal = 0;

foreach ($products as $product) {
    $subtotal += $product['price'] * $cart[$product['id']];
}
?>