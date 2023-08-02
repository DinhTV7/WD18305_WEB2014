<?php
    // Cấu trúc câu điều kiện
    /**
     * if (điều kiện) {
     *      Công việc cần thực hiện
     * } else {
     *      Công việc khác
     * }
     */

    // Bài tập
    // Kiểm tra 1 số cho trước là số chẵn hay số lẻ

    $a = 51;
    if ( $a % 2 == 0 ) {
        echo "Số " . $a . " là số chẵn.";
    } else {
        echo "Số " . $a . " là số lẻ.";
    }

    // Cấu trúc câu điều kiện if-else-if
    // Bài tập: Tính phương trình bậc 1: ax + b = 0
    $so_a = 10;
    $so_b = 5;
    if ($so_a == 0 && $so_b == 0) {
        echo "Phương trình vô số nghiệm";
    } else if ($so_a == 0 && $so_b != 0) {
        echo "Phương trình vô nghiệm";
    } else if ($so_a != 0 && $so_b == 0) {
        echo "Phương trình có nghiệm x = 0";
    } else {
        $x = -$so_b / $so_a;
        echo "Phương trình có nghiệm $x";
    }

    // Lab 1: (làm theo cấu trúc if-ele-if)
    // Bài 1: Tính phương trình bậc 2
    // Bài 2: Cho trước thông tin nyc (họ tên, năm sinh, giới tính) (nam là 0 và nữ là 1)
    // Kiểm tra xem nyc này có đủ tuổi đi NVQS không
    // "Ông/Bà đủ/không đủ tuổi đi NVQS"
    // Ông/ Bà lấy ở giới tính 0/1
    // tuổi = năm hiện tại - năm sinh;
    // gợi ý: get current year in php
    // tuổi >= 18 và <= 27 thì đủ tuổi đi NVQS

    // Bài 2 có 2 cách: (10 điểm) (toán tử 3 ngôi)

    $ho_ten = "Tạ Văn Định";
    $nam_sinh = 2004;
    $gioi_tinh = 0;

    $tuoi = date("Y") - $nam_sinh;
    // Cách  1: if else if
    if ($gioi_tinh == 0 && $tuoi >= 18 && $tuoi <= 27) {
        echo "Ông $ho_ten đủ tuổi đi NVQS";
    } else if ($gioi_tinh == 0 && $tuoi < 18 || $tuoi > 27) {
        echo "Ông $ho_ten không đủ tuổi đi NVQS";
    } else if ($gioi_tinh == 1 && $tuoi >= 18 && $tuoi <= 27) {
        echo "Bà $ho_ten đủ tuổi đi NVQS";
    } else {
        echo "Bà $ho_ten không đủ tuổi đi NVQS";
    }

    // Cách 2: Toán tử 3 ngôi
    $checkGioiTinh = $gioi_tinh == 0 ? "Ông" : "Bà";
    $checkTuoi = $tuoi >= 18 && $tuoi <= 27 ? "đủ tuổi đi NVQS" : "không đủ tuổi đi NVQS";
    echo "$checkGioiTinh $ho_ten $checkTuoi";
?>