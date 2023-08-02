<?php
// Một số phương thức làm việc với mảng
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 9, 9, 9, 10];

// count, array_keys, array_values
// Lấy ra phần tử cuối mảng (xóa phần tử cuối mảng)
// echo array_pop($arr);

// Thêm 1 hoặc nhiều phần tử vào cuối mảng
// echo array_push($arr, 11, 12, 13); // Trả ra độ dài mới của mảng

// Xóa phần tử đầu tiên trong mảng
// echo array_shift($arr); // Trả về giá trị của phần tử vừa xóa

// Thêm 1 hoặc nhiều phần tử vào đầu mảng
// echo array_unshift($arr, 11, 12, 13); // Trả ra độ dài mới của mảng

// Tìm kiếm 1 giá trị trong, nếu có thì trả về vị trí (key) của phần tử đó
// Cú pháp: array_search(giá trị cần tìm, Mảng cần tìm)
// echo array_search(1, $arr);

// Loại các phần tử có giá trị bằng nhau nhưng vị trí vẫn được giữ nguyên
// print_r(array_unique($arr));

// Kiểm tra xem trong mảng có tồn tại giá trị nào đó hay không
// var_dump(in_array(11, $arr)); // Nếu có thì trả về TRUE và ko có thì trả về FALSE

// Kiểm tra xem đây có phải là mảng hay không
// is_array($arr);// Nếu là 1 mảng thì sẽ trả về TRUE và ngược lại là FALSE

echo "<br>";
print_r($arr);
