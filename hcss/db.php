<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "crud";
$conn = new mysqli($host, $user, $pass, $db_name);
if ($conn->connect_error) {
    echo("Connection Faild" . $conn->connect_error);
}
?>
