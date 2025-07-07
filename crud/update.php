<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$lname = $_POST['lname'];
$age = $_POST['age'];

$conn->query("UPDATE users SET name='$name', lname='$lname', age=$age WHERE id=$id");

header("Location: read.php");
exit;
