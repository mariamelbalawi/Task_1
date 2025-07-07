<?php
include 'db.php';

$name = $_POST['name'];
$lname = $_POST['lname'];
$age = $_POST['age'];

$sql = "INSERT INTO users (name, lname, age) VALUES ('$name', '$lname', $age)";
$conn->query($sql);

header("Location: read.php");
exit;
