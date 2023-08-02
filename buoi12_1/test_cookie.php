<?php
if (isset($_COOKIE["name"])) {
    echo $_COOKIE["name"];
} else {
    echo "Cookie không tồn tại hoặc đã hết hạn";
}