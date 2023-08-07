<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kiểm tra Tuổi</title>
</head>
<body>
    <h1>Độ tuổi đăng ký</h1>
    <?php
    // TODO: Kiểm tra tuổi của người dùng và hiển thị thông báo phù hợp.
    // thông báo "Bạn đủ tuổi để đăng ký"  với th tuổi >=18  hoặc " Bạn chưa đủ tuổi để đăng ký" nêu tuổi < 18
    $age = 20;
    if ($age >= 18) {
        echo "Bạn đủ tuổi để đăng ký.";
    } else {
        echo "Bạn chưa đủ tuổi để đăng ký.";
    }
    ?>
</body>
</html>
