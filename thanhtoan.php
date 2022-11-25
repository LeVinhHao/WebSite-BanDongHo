<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./icon/themify-icons/themify-icons.css">
    <title>TOPTEN - luxury watch</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <style>
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
  box-sizing: border-box;
}
body{
  position: relative;
  font-family: Arial, Helvetica, sans-serif;
}
.fa {
font-family: "Font Awesome 5 Pro";
font-weight: 900;
}
.main{
  justify-content: center;
  width: auto;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
  font-size:13px;
}
li {
  float: left;
}

li a {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 15px 10px;
  text-decoration: none;
  
}

ul i {
  padding: 15px 10px;
}
.c{
  display: block;
  position: absolute;
  margin-left: 1165px;
  margin-top: 30px;
  margin-right: 40px;
  font-size: small;
}
.b{
  position: absolute;
  margin-top: 30px;
  margin-left: 85px;
  margin-right: 130px;
  font-size: small;
}
.menu{
  margin-left: 100px;
  margin-right: 100px;
  margin-top: 30px;
  margin-bottom: 15px;
}
.menu a{
    text-decoration: none;
    list-style-type: none;
    position: relative;
    display: block;
    overflow: hidden;
    width: 100%;
    margin: 0px 15px 0 15px;
}
.b .header_nav_right{
  display: block;
  margin-left: auto;
}
.b .header_nav_left{
  display: block;
  margin-right: auto;
}
.sub-menu li {
  /* ẩn menu phụ  */
  display: none;
}
 .sub-menu {
  display: none;
  position: absolute;
 }
 #menu li:hover .sub-menu {
  display: block;
 }
 .sub-menu li {
  margin-left: 0 !important;
 }


.header img {
  display: block;
  margin-right: auto;
  margin-left: auto;
  margin-top: 10px;
  width: 15%;
  height: 20%;
}
.topnav {
overflow: hidden;
}
.topnav a {
float: left;
display: block;
color: black;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}

.topnav a:hover {
background-color: #ddd;
color: black;
}

.topnav a.active {
background-color: #2196F3;
color: white;
}

.topnav .search-container {
float: right;
}

.topnav input[type=text] {
padding: 6px;
margin-top: 90px;
font-size: 16px;
border: none;
}

.topnav .search-container button {
float: right;
padding: 6px 10px;
margin-top: 90px;
margin-right: 86px;
background: #ddd;
font-size: 16.8px;
border: none;
cursor: pointer;
}

.topnav .search-container button:hover {
background: #ccc;
}

@media screen and (max-width: 600px) {
.topnav .search-container {
  float: none;
}
.topnav a, .topnav input[type=text], .topnav .search-container button {
  float: none;
  display: block;
  text-align: left;
  width: 100%;
  margin: 0;
  padding: 14px;
}
.topnav input[type=text] {
  border: 1px solid #ccc;  
}
}
.topnav2 {
overflow: hidden;
}
.txt {
margin-top: 10px;
}

.search-container2 {
margin-top: -85px;
margin-left: 300px;
}
.reciveFoot {
background: #f6f6f6;
padding: 15px 0;
}
.reciveFoot button {
width: 70px;
height: 40px;
background: #ed1c24;
color: #fff;
border: none;
font-size: 18px;
line-height: 26px;
text-transform: uppercase;
font-weight: 700;
-webkit-transition: all .3s linear;
-o-transition: all .3s linear;
transition: all .3s linear;
}
.topnav2 a {
float: left;
display: block;
color: black;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}

.topnav2 a:hover {
background-color: #ddd;
color: black;
}

.topnav2 a.active {
background-color: #2196F3;
color: white;
}

.topnav2 .search-container2 {
float: right;
}

.topnav2 input[type=text] {
padding: 12px;
margin-top: 90px;
font-size: 16px;
border: none;
}

.topnav .search-container2 button {
float: right;
padding: 6px 10px;
margin-top: 90px;
margin-right: 86px;
background: #ddd;
font-size: 16.8px;
border: none;
cursor: pointer;
}

.topnav2 .search-container2 button:hover {
background: #ccc;
}

@media screen and (max-width: 600px) {
.topnav2 .search-container2 {
  float: none;
}
.topnav2 a, .topnav2 input[type=text], .topnav2 .search-container2 button {
  float: none;
  display: block;
  text-align: left;
  width: 100%;
  margin: 0;
  padding: 14px;
}
.topnav2 input[type=text] {
  border: 1px solid #ccc;  
}
}

li b {
  display: inline-block;
  color: black;
  padding: 15px 10px;
  text-decoration: none;
  margin-left: auto;
}

.header_slide{
  width: 100%;
  height: 500px;
  position: relative;
  overflow: hidden;
  margin-right: 5px;
}

.header_slide-bg{
  height: 100%;
  position: absolute;
  display: flex;
  flex-wrap: nowrap;
  flex-direction: row;
  transition: ease 0.6s;
}

.header_slide-bg-img{
  width: 100%;
}

.header_slide-bg-img img{
  width: 100%;
  height: 100%;
}

.header_slide-bg-icon{
  width: 100%;
  height: 100%;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index: 1;
}

.header_slide-bg-icon i{
  font-size: 60px;
  color: white;
}

.ListNut{
  background-color: transparent;
  position: absolute;
  z-index: 2;width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  bottom: 0;
}
.ItemNut{
  border-radius: 50%;
  width: 12px;
  height: 12px;
  background-color: transparent;
  background-color: white;
  margin-left: 8px;
  margin-bottom: 20px;
}

.slider-product-one-content-title .a{
margin-left: auto;
margin-right: auto;
display: block;
}
.active{
  background-color: #ed1c24;
}
.trademarkHome{
padding: 200px 0 25px;
}
.container{
padding: 30px 0 0 45px;
background: #f6f6f6;
margin-left: 265px;
}
.lentop {
display:none; 
bottom: 15%; 
right: 10px; 
cursor: pointer;  
position: fixed; 
z-index: 1000;
}

.lentop div {
background: rgb(96, 109, 107); 
border:2px solid #fff; 
border-radius:50%; 
padding:13px 14px; 
box-shadow: 1px 3px 5px 0px rgba(0, 0, 0, 0.3);
color: white;
}
.lentop img {
width:16px; 
height:16px;
}
.grid_content{
width: 1200px;
margin: 0 auto;
}
.content{
width: 100%;
display: grid;
}
.titleHome{

width: 100%;
font-size: 30px;
text-align: center;
padding: 30px 0 30px 0;
}

.input{
height: 80px;
width: 100%;
background-color: #e5eaef;
display: flex;
align-items: center;
}
.input_decs{
float: left;
width: 555px;
display: flex;
font-size: 19px;
align-items: center;
justify-content: space-between;
}
.wrap_input{
display: flex;
justify-content: space-between;
height: 100px;
align-items: center;
}
.wrap_footer1{
display: flex;
justify-content: space-between;
height: 450px;
border-bottom: 1px solid #c6b7b7;
}
.footer{
height: 500px;
margin-top: 50px;
}
.footer1{
display: flex;
justify-content: space-between;
}
.left1_title{
line-height: 60px;
}
.left1_decs{
color: #746c6c;
font-size: small;
line-height: 35px;
}
.left1_col{
/* margin-right: 0px; */
float: left;
width: 33.333%;
}
.left2_col{
width: 33.3333%;
float: left;
margin-top: 40px;
margin-left: 0px;
}
.left2_title{
line-height: 50px;
}
.left2_decs{
color: #746c6c;
font-size: 14px;
line-height: 30px;
}
.wrap_footer2{
border-bottom: 1px solid #c6b7b7;
height: 250px;
}
.left3_col{
float: left;
margin-top: 20px;
/* width: 50%; */
}
.left3_side{
display: flex;
justify-content: space-between;
height: 170px;
}
.left3_decs{

font-size: 14px;
line-height: 30px;
color: #746c6c ;
}
.icon_contact:hover{
color:white;
background-color: #746c6c;
transition: 0.5s;
}
.submit button:hover{
color: white;
background-color: #333;
}
.btnxemthem:hover{
background-color: #746c6c;
color: white;
transition: 0.7s;
}
.input{
height: 80px;
width: 100%;
background-color: #e5eaef;
display: flex;
align-items: center;
}
.input_decs{
float: left;
width: 555px;
display: flex;
font-size: 19px;
align-items: center;
justify-content: space-between;
}
.wrap_input{
display: flex;
justify-content: space-between;
height: 100px;
align-items: center;
}
.wrap_footer1{
display: flex;
justify-content: space-between;
height: 450px;
border-bottom: 1px solid #c6b7b7;
}
.footer{
height: 500px;
margin-top: 50px;
}
.footer1{
display: flex;
justify-content: space-between;
}
.left1_title{
line-height: 60px;
}
.left1_decs{
color: #746c6c;
font-size: small;
line-height: 35px;
}
.left1_col{
/* margin-right: 0px; */
float: left;
width: 33.333%;
}
.icon_contact{
float: left;
width: 14%;
height: 40px;
background-color: #f6f6f6;
border-radius: 50%;
margin-left: 30px;
display: flex;
justify-content: center;
align-items: center;
font-size: 20px;
opacity: 0.9;
}
.left2_col{
width: 33.3333%;
float: left;
margin-top: 40px;
margin-left: 0px;
}
.left2_title{
line-height: 50px;
}
.left2_decs{
color: #746c6c;
font-size: 14px;
line-height: 30px;
}
.wrap_footer2{
border-bottom: 1px solid #c6b7b7;
height: 250px;
}
.left3_col{
float: left;
margin-top: 20px;
/* width: 50%; */
}
.left3_side{
display: flex;
justify-content: space-between;
height: 170px;
}
.left3_decs{

font-size: 14px;
line-height: 30px;
color: #746c6c ;
}
.icon_contact:hover{
color:white;
background-color: #746c6c;
transition: 0.5s;
}
.submit button:hover{
color: white;
background-color: #333;
}
.title_dh{
    width: 100%;
    height:60px;
    background-color:#f7f7f7;
    font-size:16px;
    color:#333333;
    font-weight:600;
    display:flex;
    align-items:center;
}
.left_dh{
    width:625px;
}
.right_dh{
    width:550px;
    border:2px solid black;
}
.wrap_content{
    display:flex;
    justify-content:space-between;
}
.content_dh{
    width: 625px;
    height:520px;
    border:1px solid #f7f7f7;
    margin-bottom:80px;
}
.wrap_form{
    margin:20px 0 20px 40px;
    color:#666666;
}
.form_left{
    align-items:center;
    display:flex;
    justify-content:space-between;
    margin-top:20px;
}
.form_left label{
  width:90px;
  font-size:14px;
}
.btn_hoantat{
    padding: 15px 40px;
    background-color:red;
    display:flex;
    justify-content:center;
    align-items:center;
    margin: 50px auto;
    border: 2px solid red;
    color:#ffffff;
    font-weight:600;
}
.btn_hoantat:hover{
    cursor: pointer;
    transition: all 0.4s ease-out;
    background-color: white;
    border-color: 2px solid red;
    color:red;
    font-weight:600;
}
.content_pt{
    border:1px solid #f7f7f7;
    margin-bottom:50px;
}
.form-group p{
    line-height:18px;
    font-size:15px;  
    margin: 5px 0 0 19px; 
}
.right_dh{
    height:fit-content;
}
.product{
    display:flex;
    justify-content:space-between;
}.product_left{
    width: 95px;
    display: flex;
    justify-content: center;
    height: 130px;
    align-items: center;
    margin-right:10px;
}.product_right{
    width: 465px;;
}
.product_right{
    line-height:23px;
    color:#333333;
}
.btn_table{
    display:flex;
    justify-content:space-between;
}
.btn_tt{
    padding: 15px 40px;
    background-color:white;
    display:flex;
    justify-content:center;
    align-items:center;
    margin: 50px auto;
    border: 2px solid black;
    color:black;
    font-weight:600;
}
.btn_tt:hover{
    cursor: pointer;
    transition: all 0.4s ease-out;
    background-color: black;
    color:white;
    font-weight:600;
}
.wrap_product{
    border-bottom: 1px solid rgba(0,0,0,0.15);;
    margin: 0 20px;
}
.tong_gh{
    display:flex;
    float:left;
}
.wrap_tonggh{
    margin: 30px 20px;
    float: right;
    line-height: 30px;
}
    </style>
</head>
<body>           
        <div class="main">
            <div class="wrap">
                <div class="header">
                    <ul class="b">
                        <li>
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </li> 
                        <li class="header_nav_left">
                            <a href="http://localhost:8080/webbandongho/dangnhap.php">Đăng Nhập</a>
                        </li>
                        <li><i class="fa fa-sign-in" aria-hidden="true"></i>
                        <li class="header_nav_left">
                            <a href="http://localhost:8080/webbandongho/dangky.php">Đăng Ký</a>
                        </li>     
                    </ul>           
                        <ul class="c">    
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                        </li> 
                        <li class="header_nav_right">
                            <a href="">19001081</a>
                        </li>
                        <li class="header_nav_right">
                            <a href="">Liên Hệ</a>
                        </li>
                        <li><i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </li>
                        <li class="header_nav_right">
                            <a href="http://localhost:8080/webbandongho/giohang.php">Giỏ Hàng</a>
                        </li> 
                        </ul>
                        <div class="topnav">                          
                            <div class="search-container">
                                <form action="action_page.php">
                                  <input type="text" placeholder="Tìm kiếm.." name="search" style="border:1px solid #f6f6f6">
                                  <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                              </div>  
                        </div>
                    </ul>
                    <div class="banner">
                        <a href="#">
                        <img src="images/webbandongho/Topten_Logo.png" alt="">
                    </a>
                    </div>
                        
                    
                    <div class="menu">
                        <ul class="menu_ngang">
                            <ul>
                                <li><i class="fa fa-home"aria-hidden="true"></i>
                                <li><a href="">GIỚI THIỆU</a></li>
                                <li><a href="">THƯƠNG HIỆU</a></li>
                                <li><a href="">SẢN PHẨM</a></li>
                                <li><a href="">KIẾN THỨC & TIN TỨC</a></li>
                                <li><a href="">ĐẠI LÝ & CỬA HÀNG</a></li>
                                <li><a href="">THÀNH VIÊN TOPTEN CLUB</a></li>
                                <li><a href="">BẢO HÀNH & SỬA CHỬA</a></li>
                                <li><a href="">LIÊN HỆ</a></li>
                                </ul>
                        </ul>
                    </div>
                    
            </div>

            <!-- content --> 
            <div class="titleHome">
                <p>THÔNG TIN ĐẶT HÀNG</p>
            </div>
            
            
            <div class='content'>
                <div class='wrap_content grid_content'>
                    <div class="left_dh">
                        <div class="title_dh">
                            <p style="margin-left:15px;">THÔNG TIN THANH TOÁN</p>
                        </div>
                          <form method="POST" action="#">
                              <div class="content_dh">
                                    <div class="wrap_form">
                                        <div class="form_left">
                                            <label>Họ Tên *</label></br>
                                            <input style="padding:10px 50px 10px 10px; width:378px;" type="text"  id="user" name="hoten" required placeholder="Họ tên(*)"/><br/>
                                        </div>
                                        <div class="form_left">
                                            <label>Email </label></br>
                                            <input style="padding:10px 50px 10px 10px; width:378px;" type="text"  id="user" name="email" placeholder="Email"/><br/>
                                        </div>
                                        <div class="form_left">
                                            <label>Điện thoại *</label></br>
                                            <input style="padding:10px 50px 10px 10px; width:378px;" type="text"  id="user" name="dienthoai" placeholder="Điện thoại(*)"/><br/>
                                        </div>
                                        <div class="form_left">
                                            <label>Tỉnh thành *</label></br>
                                            <input style="padding:10px 50px 10px 10px; width:378px;" type="text"  id="user" name="tinhthanh" placeholder="VD: Tỉnh Long An"/><br/>
                                        </div>
                                        <div class="form_left">
                                            <label>Quận huyện *</label></br>
                                            <input style="padding:10px 50px 10px 10px; width:378px;" type="text"  id="user" name="quanhuyen" placeholder="VD: Huyện Châu Thành"/><br/>
                                        </div>
                                        <div class="form_left">
                                            <label>Địa chỉ *</label></br>
                                            <input style="padding:10px 50px 10px 10px; width:378px;" type="text"  id="user" name="diachi" placeholder="Địa chỉ(Số nhà/Tên đường)"/><br/>
                                        </div>
                                        <div class="form_left">
                                            <label>Ghi chú</label></br>
                                            <input style="padding:50px 50px 50px 10px; width:378px;" type="text"  id="user" name="ghichu" placeholder=""/><br/>
                                        </div>
                                    </div>
                              </div>
                              
                              <div class="content_pt">
                                <div class="title_dh">
                                    <p style="margin-left:15px;">PHƯƠNG THỨC VẬN CHUYỂN</p>
                                </div>
                                <div class="wrap_form">
                                    <div class="rdio">
                                        <div class="form-group">
                                            <input type="radio" id="html" name="vanchuyen" checked="true" value="Nhận hàng trực tiếp">
                                            <label  for="html">NHẬN HÀNG TRỰC TIẾP TỪ CỬA HÀNG</label><br>
                                            <p>Nhận hàng trực tiếp tại các cửa hàng của công ty</p>
                                        </div>
                                        
                                        <div class="form-group" style="margin:30px 0;">
                                            <input type="radio" id="html" name="vanchuyen" value="Khác">
                                            <label for="css">PHƯƠNG THỨC KHÁC</label><br>
                                            <p>Nhân viên Topten sẽ liên lạc với quý khách hàng trong thời gian sơm nhất, để thỏa thuận phương thức giao hàng sao cho thuận lợi nhất cho quý khách. </p>
                                        </div>
                                        
                                    </div>
                                </div>
                              </div>

                              <div class="content_pt">
                                <div class="title_dh">
                                    <p style="margin-left:15px;">PHƯƠNG THỨC THANH TOÁN</p>
                                </div>
                                <div class="wrap_form">
                                    <div class="rdio">
                                        <div class="form-group">
                                            <input type="radio" id="html" name="thanhtoan" checked="true" value="Thanh toán trực tiếp">
                                            <label  for="html">THANH TOÁN TRỰC TIẾP TỪ CỬA HÀNG</label><br>
                                        </div>
                                        
                                        <div class="form-group" style="margin:30px 0;">
                                            <input type="radio" id="html" name="thanhtoan" value="Khác">
                                            <label for="css">PHƯƠNG THỨC KHÁC</label><br>
                                            <p>Nhân viên Topten sẽ liên lạc với quý khách hàng trong thời gian sơm nhất, để thỏa thuận phương thức thanh toán sao cho thuận lợi nhất cho quý khách.  </p>
                                        </div>
                                        
                                    </div>
                                </div>
                              </div>
                              <div class="btn_table">
                                    <button class="btn_hoantat" name="btn_hoantat" onClick="return alert('Đơn hàng đã được xác nhận');">
                                        <p>HOÀN TẤT</p>
                                    </button>
                                    <a href="http://localhost:8080/webbandongho/1.php" style="black; text-decoration:none;">
                                        <div class="btn_tt" name="btn_hoantat">
                                            <p>TIẾP TỤC MUA HÀNG</p>
                                        </div>
                                    </a>
                                </div>
                          </form>
                    </div>
                    <?php   
                        require 'connect.php';            
                    
                        if(isset($_POST['btn_hoantat'])){
                            
                            $hoten=$_POST['hoten'];
                            $email=$_POST['email'];
                            $dienthoai=$_POST['dienthoai'];
                            $tinhthanh=$_POST['tinhthanh'];
                            $quanhuyen=$_POST['quanhuyen'];
                            $diachi=$_POST['diachi'];
                            $ghichu=$_POST['ghichu'];   
                            $vanchuyen=$_POST['vanchuyen'];
                            $thanhtoan=$_POST['thanhtoan'];
                            $sql ="INSERT INTO `ttdathang`(`hoten`, `email`, `dienthoai`, `tinhthanh`, `quanhuyen`, `diachi`, `ghichu`, `vanchuyen`, `thanhtoan`) VALUES ('$hoten','$email','$dienthoai','$tinhthanh','$quanhuyen','$diachi','$ghichu','$vanchuyen','$thanhtoan')";
                            $conn->query($sql);
                        
                        }      
                        $conn->close();    
                    ?> 
                    <div class="right_dh">
                                <div class="title_dh">
                                    <p style="margin-left:15px;">GIỎ HÀNG</p>
                                </div>
                                <div class="desc_gh">
                                        <?php
                                            require 'connect.php';
                                            if(isset($_SESSION ['login']['idkh'])){

                                                $idkh= $_SESSION ['login']['idkh'];
                                                $sql= "SELECT * FROM `giohang`  WHERE idkh='$idkh'";
                                                $result= $conn->query($sql);
                                                while($row= $result->fetch_assoc()){
                                                    $dongia=$row['soluong']*$row['dongia'];
                                                    echo "
                                                        <div class='wrap_product'>
                                                            <div class='product'>     
                                                                    <div class='product_left'>
                                                                        <img src=./".$row['hinh']." style='width: 62px; height: 92px;'>
                                                                    </div>   
                                                                    <div class='product_right'>
                                                                        <p style='font-size:14px; margin-top:20px;font-weight:600;'>".$row['title']."</p>
                                                                        <p style='font-size:13px; color:#ccc;'>T0654301605100</p>
                                                                        <p style='font-size:14px;'>Số lượng: ".$row['soluong']."</p>
                                                                        <p style='font-size:14px; float:left;margin-right:5px;'>Đơn giá: </p><p style='font-size:15px; color:#ed1c24; font-weight:700;'> ".number_format($row['dongia'],0,',','.')." VNĐ</p>
                                                                    </div> 
                                                            </div>    
                                                        </div>
                                                    ";
                                                }
                                            }
                                            $conn->close();
                                        ?>
                                </div>
                                    <div class="wrap_tonggh">
                                        <div class="tong_gh">
                                            <div class="label" style="margin-right:40px;">
                                                <p>Tổng giỏ hàng:</p>
                                                <p>Giảm giá:</p>
                                                <p>Tổng cộng:</p>
                                            </div>
                                            <?php
                                                require 'connect.php';
                                                if(isset($_SESSION ['login']['idkh'])){

                                                    $idkh= $_SESSION ['login']['idkh'];   
                                                    $sql= "SELECT * FROM `giohang` WHERE idkh='$idkh'";
                                                    $tong=0;
                                                    $result= $conn->query($sql);
                                                    while($row= $result->fetch_assoc()){
                                                        $tong=$tong+($row['dongia']*$row['soluong']);
                                                    }
                                                    echo"
                                                        <div class='solieu'>
                                                            <p>".number_format($tong,0,',','.')."đ</p>
                                                            <p>-0 đ</p>
                                                            <p style='font-size:20px; color:#ed1c24; font-weight:600;'>".number_format($tong,0,',','.')." đ</p>
                                                        </div>
                                                    ";
                                                }
                                            ?>
                                        </div>
                                    </div>
                        </div>            
                </div>  

                
                    <div class="input ">
                        <div class="wrap_input grid_content">
                            <div class="input_decs ">
                                <i class="fa fa-envelope-o" style="float: left; font-size: 55px;"></i>
                                <h4>ĐĂNG KÝ NHẬN THÔNG TIN MỚI NHẤT TỪ TOP TEN</h4>
                            </div>
                            <div class="submit">
                                <input type="text" placeholder="Nhập email nhận tin tức" style="padding: 10px 10px; width: 300px;">
                                <button type="submit" style="padding: 12px 20px; background-color: red; color: white; border: none; margin-left: -5px;">Gửi</button>
                            </div>
                        </div>
                    </div>                      
            </div>
            <div class="footer">
                <div class="wrap_footer1">
                    <div class="footer1 grid_content">
                        <div class="left1_side" style="width:800px;">
                            <div class="left1_col">
                                <p class="left1_title">THÔNG TIN CÔNG TY</p>
                                <p class="left1_decs">Giới Thiệu</p>
                                <p class="left1_decs">Tin công ty</p>
                                <p class="left1_decs">Đại lý & Cửa hàng</p>
                                <p class="left1_decs">Tuyển dụng</p>
                                <p class="left1_decs">Liên hệ</p>
                            </div>
                            <div class="left1_col">
                                <p class="left1_title">THƯƠNG HIỆU</p>
                                <p class="left1_decs">TISSOT</p>
                                <p class="left1_decs">MIDO</p>
                                <p class="left1_decs">CALVIN KLEIN</p>
                                <p class="left1_decs">CHARRIOL</p>
                                <p class="left1_decs">ROTARY</p>
                                <p class="left1_decs">ETERNA</p>
                                <p class="left1_decs">SAINT HONORE</p>
                                <p class="left1_decs">ROCHET</p>
                                <p class="left1_decs">RENATA</p>
                                <p class="left1_decs">BERGEON</p>
                            </div>
                            <div class="left1_col">
                                <p class="left1_title">SẢN PHẨM</p>
                                <p class="left1_decs">Đồng hồ Nam</p>
                                <p class="left1_decs">Đồng hồ Nữ</p>
                                <p class="left1_decs">Đồng hồ Đôi</p>
                                <p class="left1_decs">Trang sức</p>
                                <p class="left1_decs">Phụ kiện</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrap_footer2 ">
                    <div class="footer2 grid_content">
                        <div class="left2_side">
                            <div class="left2_col" style="margin-left: 0px;">
                                <h4 class="left2_title">HEAD OFFICE</h4>
                                <p class="left2_decs"> <i class="fa fa-home" aria-hidden="true "style="margin-right:7px"></i>102-104 Thạch Thị Thanh, Quận 1, TP.Hồ Chí Minh.</p>
                                <p class="left2_decs"><i class="fa fa-phone" aria-hidden="true" style="margin-right:7px"></i>(84-28) 38 203 204 ; 0776 889 889</p>
                                <p class="left2_decs"><i class="fa fa-volume-control-phone" aria-hidden="true" style="margin-right:7px"></i>(84-28) 38 203 959</p>
                                <p class="left2_decs"><i class="fa fa-envelope" aria-hidden="true"style="margin-right:7px"></i>contact@toptenco.com.vn</p>
                            </div>
                            <div class="left2_col">
                                <h4 class="left2_title">TRUNG TÂM BẢO HÀNH QUỐC TẾ</h4>
                                <p class="left2_decs"><i class="fa fa-home" aria-hidden="true "style="margin-right:7px"></i>18bis/21 Nguyễn Thị Minh Khai, Quận 1, TP.HCM</p>
                                <p class="left2_decs"><i class="fa fa-phone" aria-hidden="true" style="margin-right:7px"></i>(84-28) 39 111 699 ; 0926 789 789</p>
                                <p class="left2_decs"><i class="fa fa-envelope" aria-hidden="true"style="margin-right:7px"></i>servicecenter@toptenco.com.vn</p>
                            </div>
                            <div class="left2_col">
                                <h4 class="left2_title">CHI NHÁNH HÀ NỘI: AEON LONG BIEN</h4>
                                <p class="left2_decs"><i class="fa fa-home" aria-hidden="true "style="margin-right:7px"></i>JW1-2, số 27 đường Cổ Linh, Phường Long Biên, Quận Long Biên, Hà Nội.</p>
                                <p class="left2_decs"><i class="fa fa-phone" aria-hidden="true" style="margin-right:7px"></i>0962 089 398</p>
                                <p class="left2_decs"><i class="fa fa-envelope" aria-hidden="true"style="margin-right:7px"></i>contact@toptenco.com.vn</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap_footer3 ">
                    <div class="footer3 grid_content">
                        <div class="left3_side">
                            <div class="left3_col">
                                <p class="left3_decs">Công ty TNHH TỐP TÊN</p>
                                <p class="left3_decs">102-104 Thạch Thị Thanh, Phường Tân Định, Quận 1, Thành phố Hồ Chí Minh.</p>
                                <p class="left3_decs">Giấy phép kinh doanh số: 0303647244</p>
                                <p class="left3_decs">Đăng ký ngày: 07 tháng 12 năm 2004 bởi Sở Kế hoạch và Đầu Tư Thành phố Hồ Chí Minh.</p>
                            </div>
                            <div class="left3_col">
                                <p class="left3_decs">Copyright © 2018 ĐỒNG HỒ TOPTEN</p>
                                <p class="left3_decs">Thiết kế web: <a  href="https://www.facebook.com/profile.php?id=100015418338286" style="text-decoration: none;"> Leader-Pham Minh Hau</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                       
        </div>
    </body>
</html>