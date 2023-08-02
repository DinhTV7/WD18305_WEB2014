<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Học về GET và POST</title>
</head>
<body>
    <form action="" method="">
        <!-- 
            action: chỉ định đích đến của dữ liệu sau khi ấn nút submit
                    (nếu ko ghi thì dữ liệu sẽ xử lý ngay tại trang hiện tại)
            method: xác định phương thúc HTTP sử dụng. (GET và POST)
        -->
        <input type="text" name="name">
        <!-- 
            name: Chính là key
            sử dụng để xác định tên của các trường dữ liệu khi gửi lên server
         -->
    </form>

    <h1>Phương thức GET</h1>
    <!-- 
        GET:
        - Dữ liệu được gửi lên thông qua URL, Và sẽ hiển thị trực tiếp trong thanh URL
        - Ưu điểm: Truyền tải dữ liệu rất nhanh
        - Thường được sử dụng cho các tác vụ nhỏ, không cần đến độ bảo mật cao
            (search, truyền dữ liệu qua lại giữa các trang)
     -->
    <form action="test.php" method="GET">
        <label for="">Họ và tên:</label>
        <input type="text" name="name" placeholder="Nhập vào họ tên">
        <label for="">Lớp: </label>
        <input type="text" name="class" placeholder="Nhập vào lớp">
        <button type="submit">Gửi đi</button>
    </form>
    <?php 
        // GET:
        // dữ liệu sẽ được truyền lên URL, nó sẽ ở dưới dạng là 1 mảng liên hợp
        // key nó chính là name ở trong input
        // Lấy ra toàn bộ thông tin
        // var_dump($_GET); // $_GET dùng để lấy dữ liệu

        // Lấy ra giá trị
        // echo $_GET["name"];

        // Bắt buộc
        if (isset($_GET["name"])) {
            echo "Xin chào ".$_GET["name"];
        }
    ?>


    <h1>Phương thức POST</h1>
    <form action="" method="POST">
    <label for="">Họ và tên:</label>
        <input type="text" name="name" placeholder="Nhập vào họ tên">
        <label for="">Lớp: </label>
        <input type="text" name="class" placeholder="Nhập vào lớp">
        <button type="submit">Gửi đi</button>
    </form>
    
    <?php 
        // Dữ liệu sẽ được gửi ngầm lên phía server
        // var_dump($_POST);

        // Lấy ra 1 giá trị
        // echo $_POST["name"];

        // bắt buộc kiểm tra
        if (isset($_POST["name"]) && isset($_POST["class"])) {
            echo $_POST["name"];
        }

        $abc = [
            "thoi_gian_di" => "2022-12-06 12:00:00"
        ]
    ?>
    <!-- 
        Tạo 1 form đăng nhập sử dụng method POST, 
        truyền dữ liệu qua 1 trang mới
        Nếu mật khẩu nhập vào == "thaydinhdz" thì hiển thị 
            "Xin chào + $ten_đăng nhập"
        Nếu mật khẩu sai thì hiển thị "Chúc bạn may mắn lần sau"
     -->
</body>
</html>