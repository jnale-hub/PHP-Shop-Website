<?php
session_start();
unset($_SESSION['cart']);

$title = "Order Placed";
include 'templates/header.php'; 
?>

<section class="container-sm md:mx-[15%] mx-auto p-5">
    <h2 class="text-2xl font-bold text-center">We're Processing Your Order</h2>
    <img src="assets/order-processing.png" alt="order-processing" class="mx-auto">
    <a href="index.php" class="float-right font-semibold underline">Back to Home</a>
</section>


<?php include 'templates/footer.php'; ?>

