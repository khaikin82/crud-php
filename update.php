<!-- update.php - Cập nhật user -->
<?php
include 'config.php';
$id = $_GET['id'];
$user = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sửa User</title>
</head>
<body>
    <h2>Sửa User</h2>
    <form method="POST">
        Tên: <input type="text" name="name" value="<?= $user['name'] ?>" required><br>
        Email: <input type="email" name="email" value="<?= $user['email'] ?>" required><br>
        <input type="submit" value="Cập nhật">
    </form>
</body>
</html>