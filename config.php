<?php
// config.php - Kết nối MySQL
$servername = "10.128.0.4"; // Thay bằng IP của VM Database
$username = "web_user";
$password = "yourpassword";
$database = "website_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>