<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_usrname=$_POST["username"];
        $input_pwd=$_POST["password"];
        echo "name: $input_usrname <br>";
        echo "pwd: $input_pwd";
    } else { echo 'Invalid request method.'; }
?>