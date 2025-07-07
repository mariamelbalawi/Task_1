<?php
include 'db.php';

$result = $conn->query("SELECT * FROM users");

echo "<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title>User List</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body>

<h2 class='text-center mt-4'>User List</h2>
<p class='text-center'><a href='create.php' class='btn btn-success'>➕ Add New User</a></p>

<table class='table table-bordered table-striped w-75 m-auto text-center'>
  <thead class='table-dark'>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Age</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>";
  
while ($row = $result->fetch_assoc()) {
    echo "<tr>
      <td>{$row['id']}</td>
      <td>{$row['name']}</td>
      <td>{$row['lname']}</td>
      <td>{$row['age']}</td>
      <td>
        <a href='edit.php?id={$row['id']}' class='btn btn-sm btn-warning'>Edit</a>
        <a href='delete.php?id={$row['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>
      </td>
    </tr>";
}

echo "</tbody></table>

</body>
</html>";
?>
