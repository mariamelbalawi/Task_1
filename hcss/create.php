<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<h2 class="text-center mt-4">Add New User</h2>

<form action="insert.php" method="POST" class="p-4 m-auto border rounded shadow-sm" style="max-width: 400px;">
  <label class="form-label">First Name:</label><br>
  <input type="text" name="fname" class="form-control mb-2" required><br>

  <label class="form-label">Last Name:</label><br>
  <input type="text" name="lname" class="form-control mb-2" required><br>

  <label class="form-label">Age:</label><br>
  <input type="number" name="age" class="form-control mb-3" required><br>

  <button type="submit" class="btn btn-primary w-100">Add</button>
</form>

<p class="text-center mt-3">
  <a href="read.php" class="btn btn-outline-secondary">View Users</a>
</p>

</body>
</html>
