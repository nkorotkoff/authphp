<?php

    session_start();

$hostname = "localhost";
$username = "root";
$password = "7a6Kk4kY@";
try {
    $connection = new PDO("mysql:host=$hostname;dbname=auth", $username, $password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Database connected successfully";
} catch(PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>