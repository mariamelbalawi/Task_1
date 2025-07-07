<?php
include 'db.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];

$sql = "INSERT INTO users (name, lname, age) VALUES ('$fname', '$lname', $age)";
$conn->query($sql);

header("Location: read.php");
exit;
