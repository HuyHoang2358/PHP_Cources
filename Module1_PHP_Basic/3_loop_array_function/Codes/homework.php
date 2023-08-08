<?php

// Bài 1
function reverseString($str) {
    return strrev($str);
}
// Sử dụng
$input = "Hello World";
$result = reverseString($input);
echo $result; // Kết quả: "dlroW olleH"

// Bài 2
function countWords($str) {
    $words = explode(" ", $str);
    return count($words);
}
// Sử dụng
$input = "This is a sample string";
$result = countWords($input);
echo $result; // Kết quả: 5

// Bài 3
function removeDuplicates($arr) {
    return array_unique($arr);
}
// Sử dụng
$input = [1, 2, 2, 3, 4, 4, 5];
$result = removeDuplicates($input);
print_r($result); // Kết quả: [1, 2, 3, 4, 5]


// Bài 4
function isAscendingArray($arr) {
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] >= $arr[$i + 1]) {
            return false;
        }
    }
    return true;
}
// Sử dụng
$input = [1, 3, 5, 7, 9];
$result = isAscendingArray($input);
var_dump($result); // Kết quả: true

// Bài 5
function reverseWordsInString($str) {
    return implode(" ", array_map('strrev', explode(" ", $str)));
}
// Sử dụng
$input = "Hello World";
$result = reverseWordsInString($input);
echo $result; // Kết quả: "olleH dlroW"

// Bài 6

function findSecondLargest($arr) {
    $uniqueArr = array_unique($arr);
    rsort($uniqueArr);
    if (count($uniqueArr) > 1) {
        return $uniqueArr[1];
    }
    return null;
}
// Sử dụng
$input = [5, 2, 9, 1, 7, 3];
$result = findSecondLargest($input);
echo $result; // Kết quả: 7

// Bài 7
function findPairsWithSum($arr, $sum) {
    $pairs = [];
    foreach ($arr as $key1 => $num1) {
        foreach ($arr as $key2 => $num2) {
            if ($key1 !== $key2 && $num1 + $num2 === $sum) {
                $pairs[] = [$num1, $num2];
            }
        }
    }
    return $pairs;
}
// Sử dụng
$input = [2, 4, 3, 5, 6, 1, 7];
$targetSum = 7;
$result = findPairsWithSum($input, $targetSum);
print_r($result); // Kết quả: [[2, 5], [4, 3], [3, 4], [5, 2], [6, 1], [1, 6]]

// Bài 8
function findMostFrequentElement($arr) {
    $counts = array_count_values($arr);
    arsort($counts);
    return key($counts);
}
// Sử dụng
$input = [1, 2, 2, 3, 3, 3, 4, 4, 4, 4];
$result = findMostFrequentElement($input);
echo $result; // Kết quả: 4
