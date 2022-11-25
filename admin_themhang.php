<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:  tahoma;;
}
.body{
    height:100%;
}
.nav{
    width:20%;
    height:100%;
    position: fixed;
    bottom: 0;
    left: 0;
    top: 0;
    z-index: 1;
   
}
.header_nav{
    height: 50px;
    width: 100%;
    display: flex;
    padding-left:10%;
    align-items: center;
    background-color:#f3f3f340;
}
.header_nav img{
    width: 50px;
    height: 30px;
    float:left;
}
.content{
    background-color:#f6f6f6;
    width:80%;
    margin-left:20%;
    min-height:100vh;
}
.navbar li{
    width: 100%;
    height:50px;
    display: flex;
    align-items: center;
    padding-left:10%;
}
.navbar i{
    margin-right:10px;
}
.menu{
    display:flex;
    height:50px;
    align-items:center;
    padding-left:10%;
}
.navbar li:hover{
    cursor: pointer;
    transition:0.4s;
    background:#f2f2f2;
}
.nav_content{
    height:50px;
    background:white;
    box-shadow: 4px 0px 8px rgba(0, 0, 0, 0.2);
    display:flex;
    align-items:center;
}
.grid{
    width: 1150px;
    margin:0 auto;
}
.wrap_navct{
    display:flex;
    justify-content:space-between;
}
.form-group button{
    padding:5px 14px;
    margin-left:-5px;
    
}
.form-group input{
    padding:5px 0 5px 8px;
    width: 380px;
}
/* chung */
.title{
    display:flex;
    justify-content:space-between;
    background-color:white;
    padding: 15px 0;
    border-bottom:1px solid #f6f6f6;
    text-align:center;
}
.wrap_right_side{
    display:flex;
    align-items:center;
    width: 90%;
}
.left_side{
    display:flex;
    margin-left:30px;
    align-items:center;
    width: 10%;
}
.right_side{
    width: 30%;
    display:flex;
    justify-content:center;
}
.navbar a{
    text-decoration:none;
    color:black;
}
.wrap_form{
    display:flex;
    justify-content:space-between;
    width:50%;
    margin-top:50px;
}
.form_group{
    width: 575px;
    display:flex;
    justify-content:center;
}
.form_group input{
    padding: 10px 20px 5px 10px;
    margin:7px 0 30px;
    width: 380px;
}
.btn_them{
    padding: 15px 40px;
    background-color:red;
    display:flex;
    justify-content:center;
    align-items:center;
    margin: 50px auto;
    border: 2px solid red;
    color:#ffffff;
    font-weight:600;
    width: 200px;
}
.btn_them:hover{
    cursor: pointer;
    transition: all 0.4s ease-out;
    background-color: white;
    border-color: 2px solid red;
    color:red;
    font-weight:600;
}

</style>
</head>
<body>           
        <div class="main">
            <div class="nav">
                <div class="header_nav">
                    <img src="images/webbandongho/Topten_Logo.png" alt="">
                    <p style="margin-left:15px;">adminTopten</p>
                </div>
                <div class="menu">
                    <i class="fa fa-bars"></i>
                    <p style='margin-left:20px;'>Danh mục</p>
                </div>
                <div class="navbar">
                    <ul>
                        <a href="http://localhost:8080/webbandongho/admin.php"><li><i class="fa fa-suitcase" aria-hidden="true"></i>Quản lý sản phẩm</li></a>
                        <a href="http://localhost:8080/webbandongho/QLngdung.php"><li><i class="fa fa-user" aria-hidden="true"></i>Quản lý người dùng</li></a>
                        <a href="http://localhost:8080/webbandongho/QLdonhang.php"><li><i class="fa fa-truck" aria-hidden="true"></i>Quản lý đơn hàng</li></a>
                        <a href="http://localhost:8080/webbandongho/ttKH.php"><li><i class="fa fa-info-circle" aria-hidden="true"></i>Thông tin khách hàng</li></a>
                    </ul>
                </div>
            </div>
            <div class="content ">
                <div class="nav_content">
                    <div class="wrap_navct grid">
                        <p>THÊM MỚI MẶT HÀNG</p>
                        <form action="">
                            <div class="form-group">
                                <input type="text" placeholder="Tìm kiếm">
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="content_th grid">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="wrap_form">
                            <div class="left_side_them">
                                <div class="form_group">
                                    <div class="">
                                        <label for="">Tiêu đề:</label></br>
                                        <input type="text" name="tieude" required></br>
                                        <label for="">Hình ảnh:</label></br>
                                        <input style='padding-left:0;' type="file" name="hinh" required></br>
                                        <label for="">Giá:</label></br>
                                        <input type="number" name="gia" required></br>
                                        <label for="" >Thương hiệu:</label></br>
                                        <input type="text" name="thuonghieu" required></br>
                                        <label for="">Xuất xứ:</label></br>
                                        <input type="text" name="xuatxu" required>
                                    </div>
                                </div>
                            </div>
                            <div class="right_side_them">
                                <div class="form_group">
                                    <div class="">
                                        <label for="">Giới tính:</label></br>
                                        <input type="text" name="gioitinh" required></br>
                                        <label for="">Vật liêu vỏ:</label></br>
                                        <input type="text" name="vatlieuvo" required></br>
                                        <label for="">Loại máy:</label></br>
                                        <input type="text" name="loaimay" required></br>
                                        <label for="">Kích thước vỏ:</label></br>
                                        <input type="text" name="kichthuocvo" required></br>
                                        <label for="">Bảo hành:</label></br>
                                        <input type="text" name="baohanh" required>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <button class="btn_them" name="btn_them">
                            <p>THÊM HÀNG</p>
                        </button>
                    </form>
                    <?php
                        require 'connect.php';
                        if(isset($_POST['btn_them'])){

                            $file='img_sanpham/'.$_FILES["hinh"]["name"];
                            move_uploaded_file($_FILES["hinh"]["tmp_name"],$file);

                            $tieude= $_POST['tieude'];
                            $gia= $_POST['gia'];
                            $thuonghieu= $_POST['thuonghieu'];
                            $xuatxu= $_POST['xuatxu'];
                            $gioitinh= $_POST['gioitinh'];
                            $vlvo= $_POST['vatlieuvo'];
                            $loaimay= $_POST['loaimay'];
                            $kichthuoc= $_POST['kichthuocvo'];
                            $baohanh= $_POST['baohanh'];
                            $sql= "INSERT INTO `sanpham`(`tieude`, `hinh`, `gia`, `thuonghieu`, `xuatxu`, `gioitinh`, `vatlieuvo`, `loaimay`, `kichthuocvo`, `baohanh`) VALUES ('$tieude','$file','$gia',' $thuonghieu','$xuatxu',' $gioitinh','$vlvo','$loaimay','$kichthuoc','$baohanh')";
                            $conn->query($sql);
                            
                        }
                    ?> 
                </div>      
            </div>
        </div>
    </body>
</html>