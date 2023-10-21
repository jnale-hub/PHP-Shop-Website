<?php
// Connect to your database (use your database details)
$host = "localhost";
$dbname = "database";
$username_db = "root";
$password_db = "";

try {
$db = new PDO("mysql:host=$host;dbname=$dbname", $username_db, $password_db);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $db;
} catch (PDOException $e) {
return null;
}

?>