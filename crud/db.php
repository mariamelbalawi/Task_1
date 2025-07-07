<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "crud";

try {
    $conn = new mysqli($host, $user, $pass, $db_name);
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    $conn->set_charset("utf8mb4");
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>