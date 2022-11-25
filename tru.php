<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $id= $_GET['id'];
     require 'connect.php';
     if(isset($_SESSION ['login']['idkh'])){
        $idkh=$_SESSION ['login']['idkh'];
        $sql="SELECT * FROM `giohang` WHERE idkh= '$idkh' and id='$id' ";
        $result= mysqli_query($conn,$sql)->fetch_assoc();
        $sl=$result['soluong']-1;
        if($sl>=1){
            $query="UPDATE `giohang` set soluong='$sl' where idkh= '$idkh' and id='$id'";
            $conn->query($query);
        }else{
            $sl=1;
            $query="UPDATE `giohang` set soluong='$sl' where idkh= '$idkh' and id='$id'";
            $conn->query($query);
        }
    }
     header('Location:http://localhost:8080/webbandongho/giohang.php');
    ?>
</body>
</html>