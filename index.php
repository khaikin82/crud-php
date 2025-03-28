<!-- index.php - Hiển thị danh sách dữ liệu -->
<?php
include 'config.php';
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Danh sách Users</title>
</head>
<body>
    <h2>Danh sách Users</h2>
    <a href="create.php">Thêm User</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Hành động</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="update.php?id=<?= $row['id'] ?>">Sửa</a>
                <a href="delete.php?id=<?= $row['id'] ?>">Xóa</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>