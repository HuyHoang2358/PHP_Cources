<?php

// Bài 1
$now = time();
echo "Thứ " . date("l", $now) . ", " . date("d/m/Y, h:i A", $now);

// Bài 2
$birthday = "1990-05-15";
$now = time();
$birthdate = strtotime($birthday);
$age = date("Y", $now) - date("Y", $birthdate);
if (date("md", $now) < date("md", $birthdate)) {
    $age--;
}
echo "Tuổi của bạn là: " . $age;

// Bài 3

$month = 6;
echo "Tháng " . date("n", mktime(0, 0, 0, $month, 1));


// Bài 4

$postDate = "2023-07-20";
echo date("d/m/Y", strtotime($postDate));

// Bài 5
$givenDate = "2023-07-20";
$dayOfWeek = date("N", strtotime($givenDate));
$days = array("Chủ nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7");
echo $days[$dayOfWeek];

