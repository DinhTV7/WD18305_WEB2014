<?php
require('connection.php');
// Thực hiện viết câu truy vấn dữ liệu
$sql_users = "SELECT users.*, roles.name_role FROM users INNER JOIN roles ON users.role_id = roles.id";
// Lấy ra toàn bộ dữ liệu từ database
$users = $connect->query($sql_users)->fetchAll();

// print_r($users);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
</head>

<body>
    <h2>Danh sách người dùng</h2>
    <a href="add_user.php">
        <button>Thêm người dùng</button>
    </a>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Image</th>
            <th>Role</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user["id"] ?></td>
                <td><?php echo $user["name"] ?></td>
                <td><?php echo $user["email"] ?></td>
                <td><?php echo $user["phone"] ?></td>
                <td>
                    <img width="100px" src="img/<?php echo !isset($user["image"]) || empty($user["image"]) ? 'default.jpg' : $user["image"] ?>" alt="">
                </td>
                <td><?php echo $user["name_role"] ?></td>
                <td><?php echo $user["status"] == 0 ? "Hoạt động" : "Ngừng hoạt động" ?></td>
                <td>
                    <a href="edit_user.php?id=<?php echo $user["id"] ?>">
                        <button>Sửa</button>
                    </a>
                    <a href="javascript:confirmDelete(<?php echo $user["id"] ?>)">
                        <button>Xóa</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
<script>
    function confirmDelete(id_user) {
        // console.log(id_user);
        if (confirm("Bạn có muốn xóa user không?")) {
            document.location = `delete_user.php?id=${id_user}`;
        }
    }
</script>

</html>