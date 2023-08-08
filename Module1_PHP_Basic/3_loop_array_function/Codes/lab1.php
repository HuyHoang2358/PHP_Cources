<?php
// Bài 1
    echo "Bài 1: <br>";
    function sumArray($arr) {
        $sum = 0;
        foreach ($arr as $num) {
            $sum += $num;
        }
        return $sum;
    }

    // Gọi hàm để kiểm tra kết quả
    $array = [1, 2, 3, 4, 5];
    $result = sumArray($array);
    echo "Tổng các phần tử trong mảng là: " . $result;

// Bài 2
    echo "<br>Bài 2: <br>";
    function isPrimeNumber($num) {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Gọi hàm để kiểm tra kết quả
    $number = 17;
    if (isPrimeNumber($number)) {
        echo $number . " là số nguyên tố.";
    } else {
        echo $number . " không là số nguyên tố.";
    }

// Bài 3
echo "<br>Bài 3: <br>";
    function findMaxValue($arr) {
        $max = $arr[0];
        foreach ($arr as $num) {
            if ($num > $max) {
                $max = $num;
            }
        }
        return $max;
    }

    // Gọi hàm để kiểm tra kết quả
    $array = [10, 5, 8, 20, 3];
    $result = findMaxValue($array);
    echo "Giá trị lớn nhất trong mảng là: " . $result;


// Bài 4
echo "<br>Bài 4: <br>";
    function countOccurrences($arr, $value) {
        $count = 0;
        foreach ($arr as $num) {
            if ($num == $value) {
                $count++;
            }
        }
        return $count;
    }

    // Gọi hàm để kiểm tra kết quả
    $array = [1, 2, 3, 4, 2, 5, 2];
    $valueToFind = 2;
    $result = countOccurrences($array, $valueToFind);
    echo "Số lần xuất hiện của " . $valueToFind . " trong mảng là: " . $result;

// Bài 5
echo "<br>Bài 5: <br>";
    function reverseArray($arr) {
        return array_reverse($arr);
    }

    // Gọi hàm để kiểm tra kết quả
    $array = [1, 2, 3, 4, 5];
    $result = reverseArray($array);
    echo "Mảng sau khi đảo ngược là: ";
    print_r($result);

// Bài 6
echo "<br>Bài 6: <br>";
    function sumDivisibleBy3Or5($arr) {
        $sum = 0;
        foreach ($arr as $num) {
            if ($num % 3 == 0 || $num % 5 == 0) {
                $sum += $num;
            }
        }
        return $sum;
    }

    // Gọi hàm để kiểm tra kết quả
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $result = sumDivisibleBy3Or5($array);
    echo "Tổng các số chia hết cho 3 hoặc 5 trong mảng là: " . $result;

// Bài 7
echo "<br>Bài 7: <br>";
    function factorial($n) {
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    // Gọi hàm để kiểm tra kết quả
    $number = 5;
    $result = factorial($number);
    echo "Giai thừa của " . $number . " là: " . $result;

// Bài 8
echo "<br>Bài 8: <br>";
    function findKthLargest($arr, $k) {
        rsort($arr);
        return $arr[$k - 1];
    }

    // Gọi hàm để kiểm tra kết quả
    $array = [10, 5, 8, 20, 3];
    $k = 2;
    $result = findKthLargest($array, $k);
    echo "Phần tử lớn thứ " . $k . " trong mảng là: " . $result;
    
















