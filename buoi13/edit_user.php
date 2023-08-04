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