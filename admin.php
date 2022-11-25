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
.btnthemmoi{
    width:200px;
    height:45px;
    background-color:#ed1c24;
    border:2px solid #ed1c24;
    color:white;
    display:flex;
    justify-content:center;
    align-items:center;
}
.btnthemmoi:hover{
    background-color:white;
    cursor: pointer;
    transition:all 0.3s linear;
}
.btnthemmoi:hover p{ 
    color:#ed1c24;
    cursor: pointer;
    transition:all 0.3s linear; 
}
.wrap_btn{
    padding: 40px 0;
    display:flex;
    align-items:center:
}
.navbar a{
    text-decoration:none;
    color:black;
}
.btndangxuat{
    list-style: none;
    display:flex;
    justify-content:center;
    margin-top:20px;
}
.btndangxuat a{
    text-decoration:none;
    color:black;
}
.wrap_btndangxuat{
    width: 130px;
    background: #f6f6f6;
    height:40px;
    color:black;
    font-weight:600;
    display:flex;
    align-items:center;
    justify-content:center;
    border:1px solid;
}
.wrap_btndangxuat:hover{
    background-color:#333333;
    cursor: pointer;
    transition:0.4s;
}
.wrap_btndangxuat:hover li{
    color:white;
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
                        <a href="http://localhost:8080/webbandongho/QLdonhang.php"><li><i class="fa fa-truck" aria-hidden="true"></i>Quản lý giỏ hàng</li></a>
                        <a href="http://localhost:8080/webbandongho/ttKH.php"><li><i class="fa fa-info-circle" aria-hidden="true"></i>Thông tin đơn hàng</li></a>
                    </ul>
                </div>
                <a href="http://localhost:8080/webbandongho/dangnhap.php" style="text-decoration:none;">
                    <div class="btndangxuat">
                        <div class="wrap_btndangxuat">
                            <li>Đăng xuất</li>
                        </div>
                    </div>
                </a>
            </div>
            <div class="content ">
                <div class="nav_content">
                    <div class="wrap_navct grid">
                        <p>QUẢN LÝ SẢN PHẨM</p>
                        <form action="">
                            <div class="form-group">
                                <input type="text" placeholder="Tìm kiếm">
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="content_ct grid">
                    <div class="title" style="margin-top:50px;  background:#88686817;">
                        <div class="left_side" >
                            <p>Sản phẩm</p>
                        </div>
                        <div class="wrap_right_side">
                            <div class="right_side">
                                <p>Tiêu đề</p>
                            </div>
                            <div class="right_side">
                                <p>Giá</p>
                            </div>
                            <div class="right_side">
                                <p>Thương hiệu</p>
                            </div>
                            <div class="right_side">
                                <p>Xuất xứ</p>
                            </div>
                            <div class="right_side">
                                <p>Giới tính</p>
                            </div>
                            <div class="right_side">
                                <p>Vật liệu vỏ</p>
                            </div>
                            <div class="right_side">
                                <p>Loại máy</p>
                            </div>
                            <div class="right_side">
                                <p>Kích thước</p>
                            </div>
                            <div class="right_side">
                                <p>Bảo hành</p>
                            </div>
                            <div class="right_side">
                                <p>Sửa</p>
                            </div>
                            <div class="right_side">
                                <p>Xóa</p>
                            </div>
                        </div>
                    </div>
                   <?php
                        require 'connect.php';
                        $query="SELECT * FROM `sanpham`";
                        $result= $conn->query($query);
                        while($row= $result->fetch_assoc()){
                        echo"
                         <div class='title'>
                            <div class='left_side'>
                                <div class='wrap_img'>
                                    <img style='width:50px;height:76px;' src='".$row['hinh']."'>
                                </div>
                            </div>
                            <div class='wrap_right_side'>
                                <div class='right_side'>
                                    <p>".$row['tieude']."</p>
                                </div>
                                <div class='right_side'>
                                    <p>".$row['gia']."</p>
                                </div>
                                <div class='right_side'>
                                    <p>".$row['thuonghieu']."</p>
                                </div>
                                <div class='right_side'>
                                    <p>".$row['xuatxu']."</p>
                                </div>
                                <div class='right_side'>
                                    <p>".$row['gioitinh']."</p>
                                </div>
                                <div class='right_side'>
                                    <p>".$row['vatlieuvo']."</p>
                                </div>
                                <div class='right_side'>
                                    <p>".$row['loaimay']."</p>
                                </div>
                                <div class='right_side'>
                                    <p>".$row['kichthuocvo']."</p>
                                </div>
                                <div class='right_side'>
                                    <p>".$row['baohanh']."</p>
                                </div>
                                <div class='right_side'>
                                    <a href='http://localhost:8080/webbandongho/admin_suahang.php/?id=".$row['masp']."' style='text-decoration:none; color:black;'><p>Sửa</p></a>
                                </div>
                                <div class='right_side'>
                                    <a href='http://localhost:8080/webbandongho/admin_xoahang.php/?id=".$row['masp']."' style='text-decoration:none; color:black;'><p>Xóa</p></a>
                                </div>
                            </div>
                        </div>";
                        }
                        $conn->close();
                   ?>
                   <div class="wrap_btn">
                        <div class="btnthemmoi grid">
                            <a style="text-decoration:none; color:white;" href="http://localhost:8080/webbandongho/admin_themhang.php"> <p>THÊM MỚI SẢN PHẨM</p></a>
                        </div>
                   </div>
                </div>
               
            </div>
        </div>
    </body>
</html>