<?php 
    require('connection.php');
    $sql_roles = "SELECT * FROM roles";
    $stmt_roles = $connect->prepare($sql_roles );
    $stmt_roles->execute();

    $roles = $stmt_roles->fetchAll(PDO::FETCH_ASSOC);

    // Lấy thông chi tiết của người dùng
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        // Lấy thông tin người dùng theo id
        $sql_detail = "SELECT * FROM users WHERE id = '$id'";
        // $user = $connect->query($sql_detail)->fetch();

        // Cách 2:
        // prepare là một cơ chế bảo mật giúp thực hiện câu truy vấn 1 cách an toàn hơn
        $stmt_user = $connect->prepare($sql_detail); // Chuẩn bị truy vấn SQL
        $stmt_user->execute(); // Thực hiện công việc truy vấn

        // Hiển thị ra dữ liệu
        // PDO::FETCH_ASSOC loại bỏ các key thừa
        $user =  $stmt_user->fetch(PDO::FETCH_ASSOC);

        print_r($user);
        // Nếu mà không có user thì hiển thị ra lỗi
        if (!$user) {
            echo "Người dùng đã toang";
            exit();
        }
    }

    // Mảng trống để chứa các lỗi
    $error = [];

    if(isset($_POST["btn-submit"])) {
        // Lấy ra toàn dữ liệu từ form nhập
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $role_id = $_POST["role"];
        $status = $_POST["status"];

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

        // Xử lý hình ảnh
        $image = $_FILES["image"]["name"];
        if (!empty($image)) {
            // Thư mục bạn sẽ lưu file upload
            $target_dir    = "img/";
            // Tạo đường dẫn đầy đủ của tệp ảnh trên máy chủ
            $target_file   = $target_dir . $image;
            // Di chuyển tệp ảnh từ thư mục tạm thời (tmp_name) đến thư mục đích (target_file)
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        } else {
            $image = $user['image']; // Nếu không có hình mới, giữ nguyên hình cũ
        }

        // Nếu không có lỗi thì insert dữ liệu vào database
        if (!$error) {
            $sql_update = "UPDATE users SET name = '$name', email = '$email', phone = '$phone', image = '$image', role_id = '$role_id', status = '$status' WHERE id = '$id'";
            $stmt_update = $connect->prepare($sql_update);
            $stmt_update->execute();
            header("Location: index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin</title>
</head>
<body>
    <h2>Sửa thông tin người dùng</h2>
    <!-- enctype="multipart/form-data" Bắt buộc phải có để thêm ảnh -->
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- ID ko cần nhập mà mặc định sẽ tự tăng khi thêm dữ liệu -->
        <label for="">Name</label>
        <input type="text" name="name" value="<?php echo $user["name"] ?>">
        <span style="color: red;"><?php echo isset($error["name"]) ? $error["name"] : '' ?></span>
        <br>
        <label for="">Email</label>
        <input type="email" name="email" value="<?php echo $user["email"] ?>">
        <span style="color: red;"><?php echo isset($error["email"]) ? $error["email"] : '' ?></span>
        <br>
        <label for="">Phone</label>
        <input type="text" name="phone" value="<?php echo $user["phone"] ?>">
        <span style="color: red;"><?php echo isset($error["phone"]) ? $error["phone"] : '' ?></span>
        <br>
        <label for="">Image</label>
        <input type="file" name="image" accept="image/*">
        <br>
        <label for="">Role</label>
        <select name="role">
            <?php foreach ($roles as $role) :?>
                <option value="<?php echo $role["id"] ?>" <?php echo ($user["role_id"] == $role["id"]) ? "selected" : "" ?>><?php echo $role["name_role"] ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="">Status</label>
        <select name="status">
            <option value="0" <?php echo $user["status"] == 0 ? "selected" : "" ?>>Hoạt động</option>
            <option value="1" <?php echo $user["status"] == 1 ? "selected" : "" ?>>Ngừng hoạt động</option>
        </select>
        <br>

        <button type="submit" name="btn-submit">Sửa thông tin</button>
    </form>
</body>
</html>