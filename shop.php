<?php
include 'include/cart_function.php';
include 'include/products.php';
?>

<section class="mx-2">
    <h2 class="text-2xl font-bold text-center py-4">Available Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
        <?php foreach ($products as $product) : ?>
            <div class="bg-base-300 shadow-lg rounded-lg p-4">
                <h3 class="text-xl font-semibold"><?php echo $product["name"]; ?></h3>
                <img src="<?php echo $product["img_url"]; ?>" alt="<?php echo $product["name"]; ?>" class="w-full h-auto object-contain mt-4" style="max-height: 200px;">
                <p class="mt-2"><?php echo $product["description"]; ?></p>
                <div class="flex justify-between items-center">
                    <p class="text-xl font-bold mt-2">$<?php echo $product["price"]; ?></p>
                    <span class="mt-2 text-sm">Available Stock: <?php echo $product["quantity"]; ?></span>
                </div>
                <form method="post" action="shop.php" class="mt-4">
                    <input type="hidden" name="product_id" value="<?php echo $product["id"]; ?>">
                    <label for="product<?php echo $product["id"]; ?>_quantity" class="block text-sm">Quantity:</label>
                    <div class="flex justify-between items-center mt-2 gap-4">
                        <input type="number" id="product<?php echo $product["id"]; ?>_quantity" name="product_quantity" value="1" min="1" max="10" class="input w-1/2">
                        <button type="submit" name="add_to_cart" class="btn btn-primary w-1/2">Add to Cart</button>
                    </div>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</section>