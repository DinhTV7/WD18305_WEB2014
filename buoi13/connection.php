<!-- 
    - Kết nối PDO (PHP Data Objects) là một phương pháp trong PHP để kết nối 
    và tương tác với cơ sở dữ liệu. 
    - PDO cho phép bạn kết nối đến nhiều loại cơ sở dữ liệu khác nhau 
    như MySQL, PostgreSQL, SQLite, Oracle, SQL Server, v.v.
    - Dễ dàng bảo trì và thay đổi:Khi sử dụng PDO, 
    việc thay đổi cơ sở dữ liệu hoặc driver kết nối không ảnh hưởng đến mã chương trình, 
	vì cú pháp và phương thức thao tác với PDO không thay đổi. 
-->
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $connect = new PDO("mysql:host=$servername;dbname=php1_wd18305", $username, $password);
    // thiết lập lỗi PDO thành ngoại lệ
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
