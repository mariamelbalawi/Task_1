<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'] ?? null;
    $fname = $_POST['fname'] ?? null;
    $lname = $_POST['lname'] ?? null;
    $age = $_POST['age'] ?? null;

    if ($id && $fname && $lname && $age) {
        $stmt = $conn->prepare("UPDATE users SET name=?, lname=?, age=? WHERE id=?");
        $stmt->bind_param("ssii", $fname, $lname, $age, $id);
        $stmt->execute();
        $stmt->close();

        header("Location: read.php");
        exit;
    } else {
        echo "❌ Missing data for update.";
    }
}
?>
