<?php     
     session_start();
     $id= $_GET['id'];
     require 'connect.php';
     if(isset($_SESSION ['login']['idkh'])){
          $idkh=$_SESSION ['login']['idkh'];
          $sql="DELETE FROM `giohang` WHERE id= '$id' and idkh='$idkh'";
          $conn->query($sql);
     }
     header('Location:http://localhost:8080/webbandongho/giohang.php');
?>