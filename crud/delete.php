<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2>Edit User</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    First Name: <input type="text" name="name" value="<?= $row['name'] ?>" required><br>
    Last Name: <input type="text" name="lname" value="<?= $row['lname'] ?>" required><br>
    Age: <input type="number" name="age" value="<?= $row['age'] ?>" required><br>
    <button type="submit">Update</button>
</form>

<br>
<a href="read.php">Back</a>
