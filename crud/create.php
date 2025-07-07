<?php include 'db.php'; ?>

<h2>Add New User</h2>

<form action="store.php" method="POST">
    First Name: <input type="text" name="name" required><br>
    Last Name: <input type="text" name="lname" required><br>
    Age: <input type="number" name="age" required><br>
    <button type="submit">Add</button>
</form>

<br>
<a href="read.php">View Users</a>
