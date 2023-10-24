<?php
session_start();
$title = "Your Cart";


include 'include/cart.php';
include 'templates/header.php';
?>


<section class="container-sm md:mx-[15%] mx-auto p-5">
    <?php
    if (empty($cart)) {
        echo '<h2 class="text-2xl font-bold text-center">Your Cart is Empty</h2>
        <img src="assets/empty-cart.png" alt="empty-cart" class="mx-auto">
        <a href="index.php" class="float-right font-semibold underline">Back to Home</a>';
    } else {
    ?>
        <h2 class="text-2xl font-bold text-center"><?= $title ?></h2>
        <form action="checkout.php" method="post" class="mt-4 text-right" id="checkout-form">
            <div class="overflow-x-auto mt-4">
                <?php
                $total = 0;
                foreach ($products as $product) {
                    $product_id = $product['id'];
                    $name = htmlspecialchars($product['name']);
                    $img_url = htmlspecialchars($product['img_url']);
                    $price = floatval($product['price']);
                    $quantity = $cart[$product_id];
                    $item_total = $quantity * $price;
                    $total += $item_total;
                ?>
                    <div class="mb-4 p-4 bg-base-300 rounded-lg" id="product_<?= $product_id ?>">
                        <div class="flex justify-end gap-2 items-center">
                            <a class="delete-product-btn" data-productid="<?= $product_id ?>"><i class="fas fa-trash-alt"></i></a>
                            <input type="checkbox" name="checkout[]" value="<?= $item_total ?>" checked class="checkbox-sm">
                        </div>
                        <div class="flex justify-center items-center">
                            <div class="w-1/4 md:w-1/3">
                                <img src="<?= $img_url ?>" alt="<?= $name ?>" class="w-full h-auto object-contain">
                            </div>
                            <div class="pl-4 md:pl-8">
                                <div class="font-semibold"><?= $name ?></div>
                                <div><?= $quantity ?> item(s) x $<?= number_format($price, 2) ?></div>
                                <div class="font-semibold mt-2" id="item_total">$<?= number_format($item_total, 2) ?></div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <p class="font-semibold bg-base-300 p-4 rounded-lg text-center mb-4">Total Amount Upon Checkout: <span class="font-bold" id="total-amount">$<?= number_format($total, 2) ?></span></p>

            <a href="index.php" class="btn btn-secondary">Shop more</a>
            <input type="submit" value="Checkout" class="btn btn-primary" id="checkout-button" />
        </form>
    <?php
    }
    ?>
</section>

<script src="js/cart.js"></script>


<?php
include 'templates/footer.php';
?>