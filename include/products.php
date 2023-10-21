<?php 
include 'include/database.php';
// Fetch products from the database

$products = [];
if ($db) {
    $stmt = $db->query("SELECT * FROM products");
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>