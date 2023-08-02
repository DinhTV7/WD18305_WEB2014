<?php
    // Cách khai báo biến
    // Tất cả các biển của PHP đều khai báo bắt đầu bằng ký tự $
    // Cú pháp: $tên_biến = giá trị;
    // Bắt buộc tất cả câu lệnh phải kết thúc bằng dấu ;

    $a = 5;

    // Hiển thị giá trị đầu ra
    echo $a;
    // Cách chạy: localhost:cổng/tên thư mục trong htdocs/tên file muốn chạy

    // print sử dụng tương tự như echo
    // nhưng print sẽ in ra chậm hơn thằng echo => sử dụng echo
    print $a;

    // Cách nối chuỗi trong PHP
    echo "<br>";
    echo "Số " . $a . " là số lẻ";

    // hiển thị cùng lúc nhiều giá trị
    $b = 10;
    echo $a, $b;

    // Ôn tập lại các kiểu dữ liệu cơ bản của PHP
    // PHP sẽ tự động hiểu kiểu dữ liệu theo từng tình huống sử dụng
    // Kiểu số nguyên
    $myNumber = 5;
    // Kiểu số thực
    $myFloat = 2.5;
    // Kiểu chuỗi
    $myString = "Tôi nhớ nyc";
    // Kiểu boolean
    $myBoolean = true; // Chỉ có 2 giá trị true hoặc false
    // Kiểu null
    $myNull = null; // Biến trống rỗng ( không có gì cả )

    // Khai báo thông tin của 3 nyc ngẫu nhiên (họ tên, năm sinh, số điện thoại)
    // Mỗi thuộc tính khai báo bởi 1 biến riêng biệt
    // Mỗi nyc được in ra 1 dòng riêng biệt
    // Mỗi thuộc tính được ngăn cách bởi dấu - 
    $ho_ten = "Nguyễn Thị A";
    $nam_sinh = 2004;
    $sdt = "0987654321";
    echo "<br>";
    echo "Họ tên: " . $ho_ten . " - Năm sinh: " . $nam_sinh . " - Số điện thoại: " . $sdt;

    // Ôn tập toán tử
    // Toán tử số học:
    // +, -, *, /(chia lấy giá trị), %(chia lấy phần dư), **(bình phương)

    // Toán tử so sánh
    // >, <, >=, <=, ==, !=
    // <> ( khác )
    // === ( so sánh cả giá trị và kiểu dữ liệu )
    // !== ( không bằng giá trị hoặc kiểu dữ liệu )
    // x <=> y ( nếu giá trị x và y bằng nhau thì trả vè 0 )
    // Nếu x > y thì trả về 1, y > x thì trả -1

    // Toán tử logic: && ( phải đồng thời xảy ra ), || ( xảy ra 1 trong 2 )

    // Toán tử gán
    /**
     * x = y                Gán giá trị y cho x
     * x += y   x = x + y   Cộng thêm y giá trị cho x
     * x -= y   x = x - y   Trừ đi y giá trị của x
     * x *= y   x = x * y   Nhân thêm y lần giá trị của x
     * x /= y   x = x / y   Chia y lần giá trị của x
     * x %= y   x = x % y   Chia lấy phần dư giá trị của x
     */

    //  Toán tử tăng giảm: ++, --
    echo "<hr>";
    $d = 5;
    $test = $d++;
    echo $test;
?>