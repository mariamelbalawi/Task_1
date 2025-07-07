<?php
include 'db.php';

echo "<h2>User List</h2>";
echo "<a href='create.php'>➕ Add New User</a><br><br>";

$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    echo "ID: {$row['id']} - {$row['name']} {$row['lname']} - Age: {$row['age']} ";
    echo "<a href='edit.php?id={$row['id']}'>[Edit]</a> ";
    echo "<a href='delete.php?id={$row['id']}'>[Delete]</a><br>";
}
