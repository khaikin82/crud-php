<!-- create.php - Thêm mới user -->
<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thêm User</title>
</head>
<body>
    <h2>Thêm User</h2>
    <form method="POST">
        Tên: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        <input type="submit" value="Thêm">
    </form>
</body>
</html>
