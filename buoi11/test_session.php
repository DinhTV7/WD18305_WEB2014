<?php
session_start();
// echo "Test session <br>";
// echo $_SESSION["hihi"];

$message = $_SESSION["mess"];
if (isset($_SESSION["taiKhoan"])) {
    $taiKhoan = $_SESSION["taiKhoan"];
    echo $message . "Xin chào: " . $taiKhoan;
} else {
    echo $message;
}

if (isset($_POST["logout"])) {
    // Xóa các biến trong SESSION
    unset($_SESSION["taiKhoan"]);
    $_SESSION["mess"] = "Hẹn gặp lại";
    echo $_SESSION["mess"];
    header("Refresh:0"); // Reload lại trang hiện tại
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
    <form action="" method="post">
        <button type="submit" name="logout">Đăng xuất</button>
    </form>
</body>
</html>