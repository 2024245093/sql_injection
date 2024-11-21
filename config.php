<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_usrname = $_POST["username"];
        $input_pwd = $_POST["password"];
        echo "Username: $input_usrname<br>";
        echo "Password: $input_pwd<br>";
    } else {
        echo "잘못된 요청입니다.";
    }
?>
