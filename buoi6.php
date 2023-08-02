<?php
    // Mảng liên hợp (Mảng liên kết)
    // là mảng mà các phần tử được chỉ định bởi các key (duy nhất)
    // Thay vì là các số nguyên như ở mảng tuần tự


    // Cách khai báo
    // $tên_mảng = [key => giá trị];
    $arr = [
        "toi" => "I",
        "yeu" => "love",
        "em" => "You",
        2023 => "very much",
        12 => 100,
        "2" => 5.5       // số 2 ở dạng chuỗi nhưng tự convert về int // dưới 2 dạng string và int.
    ];


    // In ra giá trị
    // $ten_mang[key];


    //cách 1:
    echo $arr['toi'] . $arr['yeu'] . $arr['em'] . $arr['2023'] .$arr['12'] .$arr['2'] ;

    echo "<br>";


    //cách 2:
    foreach($arr as $key){
        echo $key;
        echo " ";
    }


        echo "<br>";
        // Lấy ra cả key và giá trị:
        foreach($arr as $key => $value){
            echo "$key: $value";
            echo " ";
        }

    echo "<br>";

    //cách 3:
    $value = array_values($arr);
    // array_values($arr) duyệt mảng và lấy ra tất cả các giá trị
    // và đưa chúng vào một mảng mới 
    echo"<br>";
    var_dump($value);
    echo"<br>";
    for ($i = 0; $i < count($value); $i++){
        echo $value[$i];
    }



    echo "<br>";
    //Cách 4: DÙng for nhưng vẫn láy được key
    $keys = array_keys($arr);
    // array_values($arr) duyệt mảng và lấy ra tất cả các giá trị
    // và đưa chúng vào một mảng mới 
    echo"123 <br>";
    print_r($keys);
    echo"<br>";
    for ($i = 0; $i < count($keys); $i++){
        $key = $keys[$i];
        $value = $arr[$key];
        echo "Key: $key, Value: $value<br>";
    }
?>