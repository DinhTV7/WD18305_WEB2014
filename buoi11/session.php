<!-- 
    SESSION và COOKIE dùng để lưu trữ dữ liệu tạm thời

    SESSION dùng để lưu trữ thông tin, trạng thái của người dùng
            trong suốt 1 phiên làm việc
    SESSION nó sẽ bọ xóa khi đóng trình duyệt, hoặc thực hiện việc xóa nó
 -->

<?php
// session_start(); // Khai báo phiên bắt đầu hoạt động (bắt buộc)

// $weather = "Hôm nay trời nắng vãi";

// // Khai báo biến trong SESSION
// $_SESSION["hihi"] = $weather;

// // In ra giá trị
// echo $_SESSION["hihi"];
?>

<?php
    // session_start();

    // if (isset($_POST["username"])) {
    //     $_SESSION["username"] = $_POST["username"];
    // }

    // if (isset($_SESSION["username"])) {
    //     echo "Tên người dùng là: " . $_SESSION["username"];
    // }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Tên đăng nhập</label>
        <input type="text" name="username">

        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html> -->

<!-- 
    Cho 1 mảng users
    Tạo 1 form đăng nhập (Tài khoản và mật khẩu)
    Kiểm tra xem người dùng có nhập đúng tài khoản và nhập khẩu không
        - Nếu đúng thì hiển thị "Xin chào: $username"
        - Không đúng thì hiển thị "Sai thông tin đăng nhập"
        (Hiển ở trong 1 trang mới)
    header("Location: Tên file");
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Tên đăng nhập:</label>
        <input type="text" name="username">
        <label for="">Mật khẩu:</label>
        <input type="text" name="password">

        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>
<?php
    session_start();
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $pass = $_POST["password"];
        foreach ($dataUsers as $user) {
            if ($username == $user["username"] && $pass == $user["password"]) {
                $mess_success = "Đăng nhập thành công. ";
                $_SESSION["taiKhoan"] = $username;
                $_SESSION["mess"] = $mess_success;
                header("Location: test_session.php"); // Chuyển trang
            } else {
                $mess_err = "Thông tin đăng nhập không đúng. ";
                $_SESSION["mess"] = $mess_err;
                header("Location: test_session.php");
            }
        }
    } else {
        echo "Vui lòng nhập thông tin đăng nhập";
    }
?>