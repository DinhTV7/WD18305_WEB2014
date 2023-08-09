<?php
    session_start();

    if (isset($_POST["btn-submit"])) {
        // Kiểm tra ng dùng đã đăng nhập chưa
        if (isset($_SESSION["username"]) && $_SESSION["username"] == 'ph12345') {
            echo "Xin chào các bạn" . $_SESSION["username"];
        } else {
            echo "Bạn không đủ thẩm quyền";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <h2>Đây là trang chủ</h2>
    <form action="" method="POST">
        <button type="submit" name="btn-submit">Gửi dữ liệu</button>
    </form>
</body>
</html>