<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP if Else Demo</title>
</head>
<body>
    <?php $is_authenticated = true; ?> // khai báo biến
    <?php if ($is_authenticated) : ?> // câu lệnh if với điều kiện
        <a href="#">Logout</a>  // Đã đăng nhập
    <?php else: ?>
        <a href="#">Login</a> // Chưa đăng nhập
    <?php endif ?>
</body>
</html>