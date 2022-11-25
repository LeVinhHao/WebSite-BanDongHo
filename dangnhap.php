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
    font-size: 33px;
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
.fg_pass{
    float: right;
    font-size: 13px;
    color: white;
    margin: 0;
    margin-top: 0px;
}
.fg_pass:hover{
    cursor: pointer;
    color:#5555e8;
    transition: 0.25s ease-in-out;
}
</style>
<body>
            <?php 
                session_start();  
                require 'connect.php';            
               
                if(isset($_POST['btndangnhap'])){
                    
                    $u=$_POST['user'];
                    $p=$_POST['matkhau'];
                    
                    $query="SELECT * FROM `khachhang` WHERE username='$u'";

                    $result= mysqli_query($conn,$query)->fetch_assoc();
                    
                    $admin='admin@gmail.com';
                   
                    if(!empty($u)&&!empty($p)){
                        if( mysqli_query($conn,$query)->fetch_assoc()==true){
                            if( $admin==$result['username'] && $p==$result['password']){ 
                                header("location:http://localhost:8080/webbandongho/admin.php");                     
                            }
                            else if($result['username']==$u&& $result['password']==$p){ 
                                $_SESSION ['login']['idkh']= $result['id'];
                                header("location:http://localhost:8080/webbandongho/1.php");
                            }else{
                                echo '<p style="text-align:center;font-size:20px; color:red; font-weight:600;">Đăng nhập thất bại ! Sai tên hoặc mật khẩu..</p>';
                            }
                        }else{
                            echo '<p style="text-align:center;font-size:20px; color:red; font-weight:600;">Đăng nhập thất bại ! Sai tên hoặc mật khẩu..</p>';
                        }
                    }else{
                        echo '<p style="text-align:center; font-size:20px; color:red; font-weight:600;">Vui lòng điền đầy đủ thông tin..</p>';
                    }
                }      
                $conn->close();    
            ?> 
<div id="wrapper">
        <form method="POST" action="" id="form-login">
            <h1 class="form-heading">Login</h1>
            <div class="form-group">
                <i style="padding-bottom:10px;" class="fa fa-user"></i>
                <input  type="text" class="form-input" placeholder="Username" name="user">
            </div>
            <div class="form-group">
                <i style="padding-bottom:10px;" class="fa fa-key"></i>
                <input  type="password" class="form-input" placeholder="Password" name="matkhau">
            </div>
            <p class="fg_pass">Forgot your password?</p>
            <input type="submit" value="SIGN IN" class="form-submit" name="btndangnhap">
            <div style="font-size:16px; color:white; display:flex; justify-content:center; height:50px; align-items:center;">
                <p>or</p>
            </div >
            <a href="http://localhost:8080/webbandongho/dangky.php" style="color:white; text-decoration:none; display:flex; justify-content:center;">
                <div style="margin-top:0;display:flex;justify-content:center;" class="form-submit">
                    <p style='margin:0; font-size:13px;'>REGISTER</p> 
                </div> 
            </a>
        </form>
    </div>
            
            
            
            <script src="dangky.js"></script>

            <script>
                validator({
                    form:'#form-login',
                    rules:[
                        validator.isEmail('#user'),
                        validator.passWord('#matkhau')
                    ]
                });

            </script>
    <!-- </form>       -->
</div>
</body>
</html>