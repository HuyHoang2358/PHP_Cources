<?php
$host = "127.0.0.1";
$database = "test";
$username = "root";
$password = "1";

// Tạo kết nối đến CSDL với Mysqli
$connection = new mysqli($host, $username, $password);

// Kiểm tra kết nối
if ($connection->connect_error) {
    die("Kết nối thất bại: " . $connection->connect_error);
}
echo "Đã kết nối thành công đến CSDL";

// Đóng kết nối
$connection->close();
