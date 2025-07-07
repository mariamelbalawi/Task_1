<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<h2 class="text-center mt-4">Edit User</h2>

<form action="update.php" method="POST" class="p-4 m-auto border rounded shadow-sm" style="max-width: 400px;">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

  <label class="form-label">First Name:</label>
  <input type="text" name="name" class="form-control mb-2" value="<?php echo $row['name']; ?>" required>

  <label class="form-label">Last Name:</label>
  <input type="text" name="lname" class="form-control mb-2" value="<?php echo $row['lname']; ?>" required>

  <label class="form-label">Age:</label>
  <input type="number" name="age" class="form-control mb-3" value="<?php echo $row['age']; ?>" required>

  <button type="submit" class="btn btn-primary w-100">Update</button>
</form>

<p class="text-center mt-3"><a href="read.php" class="btn btn-outline-secondary">Back to Users</a></p>

</body>
</html>
