<?php

$count = 0;
echo "kiểu dữ liệu số int <br>";
echo "count = ", $count, "<br>";
echo "PHP_INT_SIZE = ", PHP_INT_SIZE , " ký tự <br>";
echo "------------------------------- <br>";

$price = 10.25;
echo "kiểu dữ liệu số thực <br>";
echo "Giá của cuốn sách này là: ", $price, "$<br>";
echo "------------------------------- <br>";

$is_admin = true;
echo "kiểu dữ liệu Chân lý <br>";
echo "Tôi là ADMIN ? ", $is_admin, "<br>";
echo "------------------------------- <br>";

$str = "PHP scalar type";
echo "kiểu dữ liệu String <br>";
echo "Chuỗi:  ", $str, "<br>";
echo "------------------------------- <br>";

$person = (object)([
    "name" => 'Trần Huy A',
    "date" => '18/01/19XX',
    'address' => 'Quan Z, Cầu X, Hà Y'
]);
echo "<pre>";
print_r($person);
echo "</pre>";


