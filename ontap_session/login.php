<?php
session_start();

// Khai báo biến session
// $_SESSION["name"] = "abc";

if (isset($_POST["btn-submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Kiểm tra nếu người dùng nhập đúng tk, mk 
    // thì mới tiến hành lưu dữ liệu vào 
    if ($username == 'ph12345' && $password == 'ph12345') {
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        // echo $_SESSION["username"];
    } else {
        echo "Sai thông tin đăng nhập";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng nhập</title>
</head>
<body>
    <h2>Trang đăng nhập</h2>
    <form action="" method="POST">
        <label for="">Tên đăng nhập</label>
        <input type="text" name="username">
        <br>
        <label for="">Mật khẩu</label>
        <input type="password" name="password">
        <br>
        <button type="submit" name="btn-submit">Đăng nhập</button>
    </form>
</body>
</html>