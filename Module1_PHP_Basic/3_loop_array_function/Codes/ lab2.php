<?php
// Bài 1
function multiplyByTwo($arr) {
    return array_map(function ($item) {
        return $item * 2;
    }, $arr);
}
// Sử dụng
$input = [1, 2, 3, 4, 5];
$result = multiplyByTwo($input);
print_r($result); // Kết quả: [2, 4, 6, 8, 10]

// Bài 2
function sumArray($arr) {
    return array_reduce($arr, function ($carry, $item) {
        return $carry + $item;
    }, 0);
}
// Sử dụng
$input = [1, 2, 3, 4, 5];
$result = sumArray($input);
echo $result; // Kết quả: 15

// Bài 3

function filterEvenNumbers($arr) {
    return array_filter($arr, function ($item) {
        return $item % 2 === 0;
    });
}
// Sử dụng
$input = [1, 2, 3, 4, 5, 6];
$result = filterEvenNumbers($input);
print_r($result); // Kết quả: [2, 4, 6]

// Bài 4
function multiplyEvenNumbers($arr) {
    $evenNumbers = array_filter($arr, function ($item) {
        return $item % 2 === 0;
    });
    return array_map(function ($item) {
        return $item * 2;
    }, $evenNumbers);
}
// Sử dụng
$input = [1, 2, 3, 4, 5, 6];
$result = multiplyEvenNumbers($input);
print_r($result); // Kết quả: [4, 8, 12]

// Bài 5
function sumOddNumbers($arr) {
    $oddNumbers = array_filter($arr, function ($item) {
        return $item % 2 !== 0;
    });
    return array_reduce($oddNumbers, function ($carry, $item) {
        return $carry + $item;
    }, 0);
}
// Sử dụng
$input = [1, 2, 3, 4, 5, 6];
$result = sumOddNumbers($input);
echo $result; // Kết quả: 9

// Bài 6
function sumSquareOfEvenNumbers($arr) {
    $evenNumbers = array_filter($arr, function ($item) {
        return $item % 2 === 0;
    });
    $squareNumbers = array_map(function ($item) {
        return $item ** 2;
    }, $evenNumbers);
    return array_sum($squareNumbers);
}
// Sử dụng
$input = [1, 2, 3, 4, 5, 6];
$result = sumSquareOfEvenNumbers($input);
echo $result; // Kết quả: 56


