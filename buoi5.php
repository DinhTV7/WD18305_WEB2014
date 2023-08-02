<?php
// Mảng là một tập hợp các phẩn tử có hoặc không cùng kiểu dữ liệu

// Mảng có 2 thành phần: Vị trí và giá trị
// Vị trí bắt đầu từ 0->n-1 (n là tổng số phần tử trong mảng)

// Cách khai báo mảng
// Cách 1:
$mang = array(1, 2, 3, 4, 5); // Cách khai báo cũ tử phiên bản 5.x trở về trước
$mang_1 = [1, 2, 3, 4, 5, "cục cưng", 5.5]; // Sử dụng cách này để khai báo mảng

// Hiển thị ra thông tin cấu trúc của mảng
var_dump($mang_1); // Hiển thị thông tin chi tiết. Thường được dùng trong việc debug
echo "<br>";
print_r($mang_1); // Chỉ hiển thị vị trí và giá trị
echo "<br>";
// In ra giá trị của 1 phần tử trong mảng
// Cú pháp $ten_mảng[vị_trí]
echo $mang_1[5];

// Mảng trong PHP
// Loại 1: Mảng rỗng
$arr = [];
echo "<br>";
// Loại 2: Mảng tuần tự
// Mảng tuần tự là mảng mà vị trí index là số nguyên bắt đầu từ 0->n-1
$phones = ['apple', 'samsung', 'sony', 'oppo'];

// In ra toàn bộ các giá trị của các phần tử trong mảng phones
echo $phones[0] . "<br>";
echo $phones[1] . "<br>";
echo $phones[2] . "<br>";
echo $phones[3] . "<br>";

// Duyệt mảng theo for
// count() hàm có sẵn dùng để đếm tổng số phần tử trong mảng
for ($i = 0; $i < count($phones); $i++) {
    echo $phones[$i] . ", ";
}
echo "<br>";
// Duyệt mảng theo foreach
// foreach ($mảng_cần_duyệt as $key) { công việc }
// $phones = ['apple', 'samsung', 'sony', 'oppo'];
foreach ($phones as $nyc) {
    echo $nyc . ", ";
}
echo "<br>";
// Tạo 1 mảng ngẫu nhiên gồm 10 phần tử là số nguyên
// Hiển thị ra các phẩn tử có giá trị là số lẻ theo 2 cách
$numbers = [1, 4, 6, 3, 7, 8, 15, 17, 18, 16];
// for
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 != 0) {
        echo $numbers[$i] . ", ";
    }
}
echo "<br>";
// foreach
foreach ($numbers as $number) {
    if ($number % 2 != 0) {
        echo $number . ", ";
    }
}
echo "<br>";

// Đếm và tính tổng các phần tử có giá trị là số chẵn trong mảng
$count = 0;
$sum = 0;
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $count++;
        $sum += $number;
    }
}
echo "Tổng số phần tử là số chẵn trong mảng là: $count <br>";
echo "Tống giá trị các số chẵn có trong mảng là: $sum";

// Tìm phần tử có giá trị lớn nhất trong mảng

