<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập tài khoản</title>
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dangky.js">
</head>

<style>
body{
    background: url('../webbandongho/images/3.png');
    background-size: cover;
    background-position-y: -80px;
    font-size: 16px;
    font-family: tahoma;
}
#wrapper{
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
#form-login{
    border-radius: 10px;
    max-width: 400px;
    background: rgba(0, 0, 0 , 0.8);
    flex-grow: 1;
    padding: 45px 20px 80px;
    box-shadow: 0px 0px 17px 2px rgba(200, 200, 200, 0.8);
}
.form-heading{
    font-size: 30px;
    color: #f5f5f5;
    text-align: center;
    margin-bottom: 20px;
}
.form-group{
    border-bottom: 1px solid #fff;
    margin-top: 45px;
    margin-bottom: 20px;
    display: flex;
}
.form-group i{
    color: #fff;
    font-size: 14px;
    padding-top: 5px;
    padding-right: 10px;
}
.form-input{
    background: transparent;
    border: 0;
    outline: 0;
    color: #f5f5f5;
    flex-grow: 1;
    padding-bottom:4px;
}
.form-input::placeholder{
    color: #f5f5f5;
}
#eye i{
    padding-right: 0;
    cursor: pointer;
}
.form-submit{
    background: #349e5d;
    border: none;
    color: #fff;
    width: 100%;
    font-size:13px;
    padding: 10px 0px;
    transition: 0.25s ease-in-out;
    margin-top: 30px;
    border-radius:3px;
}
.form-submit:hover{
   background-color:#349e55bd;
   cursor: pointer;
}
</style>
<body>
            <?php
                require 'connect.php';
                if(isset($_POST['btndangky'])){
                    $u= $_POST['user'];
                    $p= $_POST['matkhau'];
                    if(!empty($u) && !empty($p)){
                        $sql= "INSERT INTO `khachhang`(`username`, `password`) VALUES('$u', '$p')";
                        if($conn->query($sql)===TRUE){
                            echo '<p style="text-align:center;" >Đăng ký thành công!</p>';
                        }else{
                            echo "loi{$sql}".$conn->error;
                        }
                    }else{
                        echo '<p style="text-align:center;" >Vui lòng điền đầy đủ thông tin... <br/></p>';
                    }
                }
            ?> 
<div id="wrapper">
        <form method="POST" action="" id="form-login">
            <h1 class="form-heading">Register</h1>
            <div class="form-group">
                <i style="padding-bottom:10px;" class="fa fa-user"></i>
                <input  type="text" class="form-input" placeholder="Username" name="user">
            </div>
            <div class="form-group">
                <i style="padding-bottom:10px;" class="fa fa-key"></i>
                <input  type="password" class="form-input" placeholder="Password" name="matkhau">
               
            </div>
            <input type="submit" value="REGISTER" class="form-submit" name="btndangky">
            <div style="font-size:18px; color:white; display:flex; justify-content:center; height:50px; align-items:center;">
                <p>or</p>
            </div >
            <a href="http://localhost:8080/webbandongho/1.php" style="color:white; text-decoration:none; display:flex; justify-content:center;">
                <div style="margin-top:-6px; display:flex;justify-content:center;" class="form-submit">
                    <p style='margin:0; font-size:13px;'>BACK TO HOME</p> 
                </div> 
            </a>
        </form>
    </div>
            
            
            
            <script src="dangky.js"></script>

            <script>
                validator({
                    form:'#frmdangky',
                    rules:[
                        validator.isEmail('#user'),
                        validator.passWord('#matkhau')
                    ]
                });

            </script>
</div>
</body>
</html>