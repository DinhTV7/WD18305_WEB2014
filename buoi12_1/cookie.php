<!-- 
    - Cookie nó cũng được dùng để lưu trữ dữ liệu tạm thời
    - Cookie nó sẽ hoạt động trong 1 khoảng thời gian xác định
    - Cookie nó sẽ tự động bị xóa khi hết thời gian
    - Set thời gian: thời gian hiện tại + thời gian hoạt động
 -->
<?php
// COOKIE
$name = "DinhTV7";
$class = "WD18305";

// Đăng ký cookie
// Cú pháp: setcookie(ten cookie, giá trị, thời gian tồn tại)
setcookie("name", $name, time() + 5); // Thời gian tồn tại của cookie là 5s
setcookie("class", $class, time() + 5);

// Xóa cookie
// setcookie("name", '', time() - 5);

// Kiểm tra
if (isset($_COOKIE["name"])) {
    echo $_COOKIE["name"];
    echo $_COOKIE["class"];
} else {
    echo "Cookie không tồn tại hoặc đã hết hạn";
}
?>
<!-- 
    Cho một mảng dữ liệu users
    Tạo 1 form đăng nhập (username và password)
    Kiểm tra người dùng có nhập đúng tài khoản hay không
        - Đưa toàn bộ thông tin đăng nhập vào COOKIE
        - Nếu đúng Thì hiển thị "Xin chào, $username" sang 1 trang mới
        - Nếu sai thì hiển thị "Sai thông tin đăng nhập" sang 1 trang mới
        - Sau 1 khoảng thời gian bằng với thời gian tồn tại của cookie thì reload lại trang
            Nếu cookie không còn thì hiển thị "Phiên đăng nhập của bạn đã hết"
    
    ** Gợi ý:
    header("Location: test_cookie.php")     // Chuyển sang trang mới
    header("Refresh: thời gian (s)")        // Reload lại sang sau bảo nhiêu giây
 -->
 <?php
$dataUsers = [
    [
        "username" => "thaydinhdz",
        "password" => "12345678",
    ],
    [
        "username" => "dinhtv7",
        "password" => "12345678",
    ],
];
?>