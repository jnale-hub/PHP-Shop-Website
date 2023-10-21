<?php
$title = "Register";
include 'templates/header.php'; ?>

<section class="flex justify-center items-center py-10">
    <div class="bg-base-100 p-8 rounded w-full max-w-md shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-center">Register Page</h1>
        <form method="post" action="./include/register.php">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium mb-2">Name:</label>
                <input type="text" id="name" name="name" required class="w-full input">
            </div>

            <div class="mb-4">
                <label for="username" class="block text-sm font-medium mb-2">Username:</label>
                <input type="text" id="username" name="username" required class="w-full input ">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-2">Email:</label>
                <input type="email" id="email" name="email" required class="w-full input">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium mb-2">Password:</label>
                <input type="password" id="password" name="password" required class="w-full input">
            </div>

            <button type="submit" class="btn btn-primary w-full">Register</button>
        </form>
        <p class="mt-4 text-center">Already have an account? <a href="login.php" class="underline font-semibold">Click Here</a></p>
    </div>
</section>

<?php include 'templates/footer.php'; ?>