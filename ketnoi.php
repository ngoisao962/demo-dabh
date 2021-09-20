<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "chuong";
    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        echo "kết nối thành công";
    } else{
        echo "không thành công"
    }

?>