<?php
// cấu hình thông tin connect vào CSDL
$host = "127.0.0.1"; // Địa chỉ máy chủ
$database = "test"; // Tên CSDL
$username = "root";  // Tên đăng nhập vào CSDL
$password = "";    // Password đăng nhập vào CSDL

// Tạo kết nối đến CSDL với Mysqli
$connection = new mysqli($host, $username, $password, $database);

// Kiểm tra kết nối
if ($connection->connect_error) {
    die("Kết nối thất bại: " . $connection->connect_error);
}
echo "Đã kết nối thành công đến CSDL <br>";

// Câu lệnh query để tạo mới table
$query = "CREATE TABLE MyGuests (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,email VARCHAR(50),reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

// Thực thi câu lệnh query
if ($connection->query($query) === TRUE) {
    echo "Đã tạo table thành công";
} else {
    echo "Có lỗi khi tạo table mới: " . $connection->error;
}

// Đóng kết nối
$connection->close();
