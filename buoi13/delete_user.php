<?php
    require('connection.php');
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        
        // Viết câu truy vấn
        $sql_delete = "DELETE FROM users WHERE id = '$id'";
        $stmt_delete = $connect->prepare($sql_delete);
        $stmt_delete->execute();

        header("Location: index.php");
        echo "Xóa thành công";
    }
?>