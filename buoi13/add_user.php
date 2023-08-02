<?php 
    require('connection.php');
    $sql_roles = "SELECT * FROM roles";
    $roles = $connect->query($sql_roles)->fetchAll();

    // Mảng trống để chứa các lỗi
    $error = [];

    if(isset($_POST["btn-submit"])) {
        // Lấy ra toàn dữ liệu từ form nhập
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $role_id = $_POST["role"];
        $status = $_POST["status"];

        // Lấy thông tin ảnh đẩy lên từ form
        $hinh = $_FILES["image"];
        var_dump($hinh);

        // empty là hàm kiểm dữ liệu có trống hay không 
        // (nếu trống thì sẽ trả là true)
        if (empty($name)) {
            $error["name"] = "Bạn chưa nhập họ tên";
        }

        if (empty($email)) {
            $error["email"] = "Bạn chưa nhập email";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            // Sử dụng cùng hàm validate có sẵn của PHP
            // Nếu nó thỏa mãn thì trả ra là true
            $error["email"] = "Email không hợp lệ";
        }

        //regex số điện thoại
        $regex_phone = '/^0\d{9}$/';
        if (empty($phone)) {
            $error["phone"] = "Bạn chưa nhập số điện thoại";
        } else if (!preg_match($regex_phone, $phone)) {
            // preg_match Sử dụng với regex
            $error["phone"] = "Số điện thoại không hợp lệ";
        }

        // Kiểm tra có tệp ảnh tải lên không
        if (isset($hinh)) {
            // Thư mục chứa ảnh sau khi upload
            $target_dir = "img/";
            // Lấy ra tên của ảnh đẩy từ form
            $image = $hinh["name"];
            // Tạo 1 đường dẫ đầy đủ của ảnh trên máy chủ
            $target_file = $target_dir . $image;
            // Di chuyển ảnh tới thư mục đã tạo
            move_uploaded_file($hinh['tmp_name'], $target_file);
        }

        // Nếu không có lỗi thì insert dữ liệu vào database
        if (!$error) {
            $sql_add = "INSERT INTO users VALUES (null, '$name', '$email', '$phone', '$image', '$role_id', '$status')";
            $connect->query($sql_add);
            header("Location: index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm người dùng</title>
</head>
<body>
    <h2>Thêm người dùng</h2>
    <!-- enctype="multipart/form-data" Bắt buộc phải có để thêm ảnh -->
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- ID ko cần nhập mà mặc định sẽ tự tăng khi thêm dữ liệu -->
        <label for="">Name</label>
        <input type="text" name="name">
        <span style="color: red;"><?php echo isset($error["name"]) ? $error["name"] : '' ?></span>
        <br>
        <label for="">Email</label>
        <input type="email" name="email">
        <span style="color: red;"><?php echo isset($error["email"]) ? $error["email"] : '' ?></span>
        <br>
        <label for="">Phone</label>
        <input type="text" name="phone">
        <span style="color: red;"><?php echo isset($error["phone"]) ? $error["phone"] : '' ?></span>
        <br>
        <label for="">Image</label>
        <input type="file" name="image" accept="image/*">
        <br>
        <label for="">Role</label>
        <select name="role">
            <?php foreach ($roles as $role) :?>
                <option value="<?php echo $role["id"] ?>"><?php echo $role["name_role"] ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="">Status</label>
        <select name="status">
            <option value="0">Hoạt động</option>
            <option value="1">Ngừng hoạt động</option>
        </select>
        <br>

        <button type="submit" name="btn-submit">Thêm mới</button>
    </form>
</body>
</html>