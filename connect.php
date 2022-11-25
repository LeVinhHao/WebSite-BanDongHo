<?php
    $host="localhost";
    $username="root";
    $password="";
    $dbname="qlkh";
    //kết nối với db
    $conn= new mysqli($host, $username, $password, $dbname);
    if($conn->connect_error){
        die('lỗi kết nối database');
    }
?>

