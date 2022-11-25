<?php
   session_start();
   $id= $_GET['id'];
   require 'connect.php';
   if(isset($_SESSION ['login']['idkh'])){
        $idkh=$_SESSION ['login']['idkh'];
        $sql="SELECT * FROM `giohang` WHERE id= '$id' and idkh='$idkh'";
        $result= mysqli_query($conn,$sql)->fetch_assoc();
        $sl=$result['soluong']+1;
        $query="UPDATE `giohang` set soluong='$sl' where id='$id' and idkh='$idkh'";
        $conn->query($query);
   }
   header('Location:http://localhost:8080/webbandongho/giohang.php');     
?>
   

