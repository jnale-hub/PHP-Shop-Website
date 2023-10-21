<?php 
$title = "Log In";
include 'templates/header.php'; ?>

<section class="flex justify-center items-center py-10">
    <div class="bg-base-100 p-8 rounded w-full max-w-md shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-center">Login Page</h1>
        <form method="post" action="./include/login.php">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium mb-2">Username:</label>
                <input type="text" id="username" name="username" required class="input w-full">
            </div>

            <div class="mb-5">
                <label for="password" class="block text-sm font-medium mb-2">Password:</label>
                <input type="password" id="password" name="password" required class="input w-full">
            </div>

            <button type="submit" class="btn btn-primary w-full">Login</button>
        </form>

        <p class="mt-4 text-center">Don't have an account? <a href="register.php" class="underline font-semibold">Click Here</a></p>
    </div>
</section>


<?php include 'templates/footer.php'; ?>