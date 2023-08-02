<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kế thừ dữ liệu trong PHP</title>
</head>
<body>
    <!-- include, repuire đều dùng để kế thừa dữ liệu từ trang PHP khác -->

    <?php 
        // Include
        // include('header.php');
        // include('header.php');
        // include('header1.php');
        // echo "Đây là nội dung của trang";
        // include('footer.php');

        // Require
        // require('header.php');
        // require('header1.php');
        // echo "Đây là nội dung của trang";
        // require('footer.php');

        // Include_once
        // include_once('header.php');
        // include_once('header.php');
        // include_once('header1.php');
        // echo "Đây là nội dung của trang";
        // include_once('footer.php');

        // Require_once
        require_once('header.php');
        require_once('header1.php');
        echo "Đây là nội dung của trang";
        require_once('footer.php');
    ?>
</body>
</html>
<!-- 
    Sự khác nhau
    - Include: Chèn nội dung từ tệp vào trong trang web, Nếu tệp không tồn tại hoặc có lỗi
                nó chỉ hiển thị cảnh báo và vẫn tiếp tục thực thi mã PHP

    - Require: Yêu cầu tệp phải tồn tại và chèn nội dung vào trang web. Nếu tệp không tồn tại hoặc có lỗi
                nó sẽ ngừng thực thi toàn bộ mã PHP và hiển thị lỗi

    - Include_once: Chèn nội dung từ tệp vào trang web 1 lần duy nhất.
                Nếu tệp đã được chèn trước đó nó sẽ không chèn lại

    - Require_once: Yêu cầu tệp tồn tại và chèn nội dung vào trang web 1 lần duy nhất
                Nếu tệp đã được chèn trước đó nó sẽ không chèn lại
 -->

<!-- 
    Cho một file db.php chứa mảng liên hợp 2 chiều $dataNYC
    Tạo 1 file trangchu.php xử lý dữ liệu in ra danh sạch NYC
    Sử dụng phương pháp kế thừa tùy thích
 -->