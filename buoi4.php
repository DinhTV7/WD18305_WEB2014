<?php
    // Hàm là một đoạn code dùng để thực hiện 1 công việc cụ thể
    // Và có tính tái sử dụng cao

    // Cách tạo hàm
    function ten_ham() {
        // Nơi viết code cần thực hiện
    }
    // Gọi hàm
    ten_ham(); // Hàm chỉ thực thi khi nó được gọi

    // Hàm trả về
    // Không có tham số
    function randomNumber() {
        $number = rand(0, 99); // rand là hàm có sẵn để lấy 1 số ngẫu nhiên trong 1 khoảng nào đó
        return $number;
    }
    echo "Số ngẫu nhiên là: " . randomNumber();

    // Có tham số
    function tong_2_so($a, $b) {
        $sum = $a + $b;
        return $sum;
    }

    $c = 5;
    $b = 6;
    echo "Kết quả là:" . tong_2_so($c, $b);

    // echo "Kết quả là:" . tong_2_so(5, 2);
    // echo "Kết quả là:" . tong_2_so(6, 5);

    // Hàm không trả về
    // Hàm có tham số
    function sayHello($name) {
        echo "Xin chào, $name";
    }
    sayHello("Định");
    sayHello("Các bro");

    // Hàm không có tham số
    function xin_chao() {
        echo "Chào mừng đến với bình nguyên vô tận";
    }
    xin_chao();

    // Tạo hàm tính diện tích hình chữ nhật
    // (hàm trả về có tham số)    
    
    // Bài tập lab 3:
    // Bài 1: Sử dụng hàm không trả về có tham số. Giải phương trình bậc 1
    // Bài 2: Sử dụng hàm trả về có tham số. Tính diện tích hình thang
    // Bài 3: Kiểm tra số truyền vào có phải là số nguyên tố hay không 
    // (2 cách: hàm trả về và hàm không trả về)
?>