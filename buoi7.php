<?php
    /// Mảng đa chiều
    // Là một mảng CHỨA 1 HOẶC NHIỀU MẢNG TRONG NÓ

    // Mảng tuần tự 2 chiều
    $arr = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    // In ra giá trị
    // Cú pháp: $tên mảng[Vị trí mảng cần truy cập][Vị trí của phần tử]

    echo $arr[0][0] . "<br>";
    // In ra số 3, 5, 9
    echo $arr[0][2] . "<br>";
    echo $arr[1][1] . "<br>";
    echo $arr[2][2] . "<br>";

    // Duyệt mảng bằng foreach
    foreach ($arr as $row) {
        print_r($row);
        echo "<br>";
        foreach ($row as $value) {
            echo $value . "<br>";
        }
    }

    // Tính tổng các phần tử trong mảng foreach
    $total = 0;
    foreach ($arr as $row) {
        foreach ($row as $value) {
            $total += $value;
        }
    }
    echo "Tổng các phần tử là: $total";

    // Mảng liên hợp 2 chiều
    // Đây chính là mảng dữ liệu mà database trả cho chúng ta
    $students = [
        [
            "name" => "Nguyễn Văn A",
            "age" => 18,
            "diemTB" => 9
        ],
        [
            "name" => "Nguyễn Văn B",
            "age" => 15,
            "diemTB" => 7
        ],
        [
            "name" => "Nguyễn Văn C",
            "age" => 20,
            "diemTB" => 3
        ]
    ];
    // In ra giá trị
    // Cú pháp: $ten_mang[vị trí mảng muốn truy cập][key]
    echo $students[0]["name"] . "<br>";

    // In ra toàn bộ thông tin của người thứ 3
    echo $students[2]["name"] . "<br>";
    echo $students[2]["age"] . "<br>";
    echo $students[2]["diemTB"] . "<br>";

    // Duyệt mảng theo foreach
    foreach ($students as $student) {
        print_r($student);
        echo "<br>";
        foreach ($student as $value) {
            echo $value . "<br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Xin chào cục cưng</h1>
    <?php foreach ($students as $st) : ?>
        <?php
            $ten = $st["name"];
        ?>
        <!-- Công việc -->
        <h3>Họ và tên: <?php echo $ten ?></h3>
        <h3>Tuổi: <?php echo $st["age"] ?></h3>
        <h3 style="<?php echo "color: red;" ?>">Điểm trung bình: <?php echo $st["diemTB"] ?></h3>
    <?php endforeach; ?>
    <!-- 
        Hiển thị toàn bộ thông tin học sinh ra dưới dạng table
        Nếu điểm < 5 (toạch), điểm >= 5 (qua môn)
        Nếu tuổi < 18 thì hiển thị backgroud màu đỏ
        > 18 thì hiển thị backgroud màu xanh
     -->
</body>
</html>