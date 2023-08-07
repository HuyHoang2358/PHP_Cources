```````<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kiểm tra điểm số</title>
</head>
<body>
<h1>Kiểm tra điểm số</h1>
    <?php
    // TODO: Kiểm tra điểm số và hiển thị thông báo tương ứng.
    // Scores >= 90 là A, 80-89: B, 70-79: C, 60-69: D, dưới 60: F.
    $score = 75;

    if ($score >= 90) {
        echo "Điểm A";
    } elseif ($score >= 80) {
        echo "Điểm B";
    } elseif ($score >= 70) {
        echo "Điểm C";
    } elseif ($score >= 60) {
        echo "Điểm D";
    } else {
        echo "Điểm F";
    }
    ?>

</body>
</html>
```````