<?php include 'include/cart_function.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GFG Shopping Web Application</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="">
    <header class="bg-blue-500 text-white p-4">
        <h1 class="text-2xl">
            Welcome
            <?php
            if (isset($_SESSION["user"])) {
                echo $_SESSION["user"]["name"];
            }
            ?>
            to GFG Shopping Web Application
        </h1>
    </header>
    <!-- <nav class="bg-blue-700 p-4">
        <ul class="flex space-x-4">
            <li><a href="shop.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav> -->
    <?php include 'navbar.php'; ?>
    <main>
        <section>
            <h2>Products</h2>
            <ul>
                <?php foreach ($products as $product) : ?>
                    <li>
                        <h3><?php echo $product["name"]; ?></h3>
                        <!-- <img src="<?php echo $product["image_url"]; ?>" alt="<?php echo $product["name"]; ?>">
                        <p><?php echo $product["description"]; ?></p> -->
                        <p><span>$<?php echo $product["price"]; ?></span></p>

                        <form method="post" action="shop.php">
                            <input type="hidden" name="product_id" value="<?php echo $product["id"]; ?>">
                            <label for="product<?php echo $product["id"]; ?>_quantity">Quantity:</label>
                            <input type="number" id="product<?php echo $product["id"]; ?>_quantity" name="product_quantity" value="" min="0" max="10">
                            <button type="submit" name="add_to_cart">Add to Cart</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
    <footer>
    </footer>
</body>

</html>
