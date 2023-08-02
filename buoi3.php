<?php
    // Vòng lặp

    // Vòng lặp for
    // Cú pháp:
    // Sử dụng for khi đã biết rõ số lần cần lặp

    // In ra màn hình lần lượt các số từ 0->10
    for ($i = 0; $i <= 10; $i++) {
        echo "Số: $i <br>";
    }
    echo "<hr>";

    // Vòng lặp while
    // Cú pháp: while (điều kiện) { code }
    // Ko cần biết rõ số lần lặp, 
    // khối lệnh sẽ chạy đến khi điều kiện vẫn là true

    // In ra màn hình lần lượt các số từ 1->10
    $a = 1;
    while ($a <= 10) {
        echo "Số: $a <br>";
        $a++;
    }
    echo "<hr>";
    // Vòng lặp do...while
    // Thực hiện công việc sau đó kiểm tra điều kiện
    // Nếu điều kiện vẫn là true thì thực hiện lại công việc

    // In ra màn hình lần lượt các số từ 1->10
    $b = 1;
    do {
        echo "Số: $b <br>";
        $b++;
    } while ($b <= 10);

    // Lab 2:
    // Bài 1: Tính tổng các số chẵn từ 1 đến 100
    // Bài 2: In ra màn hình bảng cửu chương 9
    // Bài 3: Tìm các số nguyên tố nhỏ hơn 100
?>