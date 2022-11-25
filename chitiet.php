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
    <title>TOPTEN - Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <style>
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
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
#Content{
padding: 10px 0 615px;
background: #f6f6f6;
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
.product{
 
}
.row{
box-shadow: 0 0 8px rgba(0,0,0,0.2);
float: left;
width: 22%;
}
.grid_content{
width: 1200px;
margin: 0 auto;
}
.content{
width: 100%;
background-color: #f6f6f6;
display: grid;
}
.titleHome{
background-color: #f6f6f6;
width: 100%;
font-size: 30px;
text-align: center;
padding: 30px 0 30px 0;
}
.wrap_product{
width: 265px;
background-color: white;

margin: 10px 17px 10px 18px;
box-shadow: 0 0 8px rgba(0,0,0,0.2);
}
.product_img{
height:345px;
}
.product_title{
width: 263px;
justify-content: center;
display: flex;
align-items: center;
height: 105px;
background-color: #f6f6f6;
margin: 0 auto;
}
.product_price{
height: 75px;
display: flex;
justify-content: center;
align-items: center;
color: orangered;
}
.wrap_product:hover{
cursor: pointer;
transition: 0.5s;
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
.btnxemthem:hover{
background-color: #746c6c;
color: white;
transition: 0.7s;
}
.wrap_chitiet{
  display:flex;
  flex-direction:row;
  margin-bottom:100px;
}
.col1_ct{
width: 33.3333%;
}
.col_mid{
  text-align:center;
}
.left_wrap_img{
 padding: 0 80px 0;
}
.left_wrap_img img{
  width:100%;
  height:100%;
}
.title_ct{
  font-size:20px;
  font-weight:600;
  line-height:35px;
  margin-top:10px;
}
.price_ct{
  line-height:30px;
  margin:30px 0 20px 0;
}
.muangay{
  width: 100%;
  height:55px;
  background-color:#333333;
  color:white;
  font-weight:600;
  display:flex;
  align-items:center;
  justify-content:center;
  margin-bottom:20px;
}
.muangay:hover{
  background-color:#ed1c24;
  cursor: pointer;
  transition:0.4s;
}
.themvaogio{
  width: 100%;
  height:55px;
  color:black;
  font-weight:600;
  display:flex;
  align-items:center;
  justify-content:center;
  border:1px solid;
}
.themvaogio:hover{
  background-color:#333333;
  cursor: pointer;
  transition:0.4s;
  color:white;
}
.contact{
  border-bottom:1px solid rgb(0 0 0 / 40%);
  line-height:50px;
}
.wrap_ctsp{
  padding:11px 0 15px 0;
  line-height:22px;
  border-bottom:1px solid rgb(0 0 0 / 20%);
  font-size:15px;
}
.ctsp_desc{
  color:rgb(0 0 0 / 50%);
  font-size:14px;
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
                            <a href="">Giỏ Hàng</a>
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
                        <img src="../images/webbandongho/Topten_Logo.png" alt="">
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
                <p>CHI TIẾT SẢN PHẨM</p>
            </div>
            
            
            <div class='content'>
                <div class='wrap_content grid_content'>
                      <?php
                      require 'connect.php';
                      $id=$_GET['id'];  
                      $sql= "SELECT * FROM `sanpham` WHERE masp=$id";
                      $result=$conn->query($sql)->fetch_assoc();
            
                          echo "
                              <div class='wrap_chitiet'>
                              <div class='col1_ct'>
                                <div class='left_wrap_img'>
                                  <img src='../images/webbandongho/Topten_Logo.png' >
                                </div>                              
                                  <div class='title_ct'>
                                    <p>".$result['tieude']."</p>
                                    <p>T065.430.16.051.00</p>
                                  </div>
                                  <div class='price_ct'>
                                    <p style='color:#ed1c24; font-size:22px; font-weight:600;'>Giá: ".number_format($result['gia'],0,'.',',')." đ</p>
                                    <p style='color:#66666; font-size:14px;'>(Giá đã bao gồm 8% VAT)</p>
                                  </div>
                                  <div class='btn_ct' >
                                  
                                    <form method='POST' action='#'>
                                          <a href='http://localhost:8080/webbandongho/thanhtoan.php' style='text-decoration:none;'>
                                            <div class='muangay'>
                                                  MUA NGAY
                                            </div>
                                          </a>
                                                                     
                                              <button class='themvaogio' name='themvaogio' id='themvaogio'>
                                              <li style='list-style:none;'><i class='fa fa-cart-plus' aria-hidden='true' style='margin-right:10px;'></i>
                                                  THÊM VÀO GIỎ HÀNG
                                              </button>  
                                          
                                    </form>
                                    <p class='contact'><i class='fa fa-phone' aria-hidden='true' style='font-size:12px; margin-right:5px;'></i>Liên hệ tư vấn : 0776 889 889</p>
                                  </div>
                                  <p style='margin:18px 0 18px 0; font-size:12px; color:#666666'>Từ khóa: ".$result['tieude']."</p>
                              
                              </div>
                          ";
                      ?>
                          <div class="col1_ct col_mid">
                              <?php
                                      require 'connect.php';
                                      $id=$_GET['id'];
                                      $sql= "SELECT * FROM `sanpham` WHERE masp=$id";
                                      $result=$conn->query($sql)->fetch_assoc();
                                          echo "
                                              <div class='product '>     
                                                      <div class='product_img'>
                                                          <img src=../".$result['hinh']." style='width: 280px;
                                                          height: 440px;'>
                                                      </div>             
                                              </div>    
                                          ";
                                      $conn->close();
                                ?>
                          </div> 
            
                          <?php
                              require 'connect.php';
                              $id=$_GET['id'];
                              $sql= "SELECT * FROM `sanpham` WHERE masp=$id";
                              $result=$conn->query($sql)->fetch_assoc();
                            echo"
                                    <div class='col1_ct'>
                                    <div class='wrap_ctsp'>
                                        <div class='ctsp_title'>
                                          <p>Mã sản phẩm</p>
                                        </div>
                                        <div class='ctsp_desc'>
                                          <p>T0654301605100</p>
                                        </div>
                                    </div>

                                    <div class='wrap_ctsp'>
                                        <div class='ctsp_title'>
                                          Thương hiệu
                                        </div>
                                        <div class='ctsp_desc'>
                                          ".$result['thuonghieu']."
                                        </div>
                                    </div>

                                    <div class='wrap_ctsp'>
                                        <div class='ctsp_title'>
                                            Xuất xứ   
                                        </div>
                                        <div class='ctsp_desc'>
                                        ".$result['xuatxu']."
                                        </div>
                                    </div>

                                    <div class='wrap_ctsp'>
                                        <div class='ctsp_title'>
                                          Giới tính
                                        </div>
                                        <div class='ctsp_desc'>
                                        ".$result['gioitinh']."
                                        </div>
                                    </div>

                                    <div class='wrap_ctsp'>
                                        <div class='ctsp_title'>
                                          Vật liệu vỏ
                                        </div>
                                        <div class='ctsp_desc'>
                                        ".$result['vatlieuvo']."
                                        </div>
                                    </div>

                                    <div class='wrap_ctsp'>
                                        <div class='ctsp_title'>
                                          Loại máy
                                        </div>
                                        <div class='ctsp_desc'>
                                        ".$result['loaimay']."
                                        </div>
                                    </div>

                                    <div class='wrap_ctsp'>
                                        <div class='ctsp_title'>
                                          Kích thước vỏ
                                        </div>
                                        <div class='ctsp_desc'>
                                        ".$result['kichthuocvo']."
                                        </div>
                                    </div>
                                    <div class='wrap_ctsp'>
                                        <div class='ctsp_title'>
                                            Bảo hành quốc tế
                                        </div>
                                        <div class='ctsp_desc'>
                                        ".$result['baohanh']."
                                        </div>
                                    </div>
                                </div>
                            ";
                          ?>
                      </div>                
                        

                  
                </div>
                
                <?php
               
                require 'connect.php'; 
                             
               
                if(isset($_POST['themvaogio'])){
                  $idkh=$_SESSION ['login']['idkh'];
                  $id=$_GET['id'];
                  $sql= "SELECT * FROM `sanpham` WHERE masp=$id";
                  $result=$conn->query($sql)->fetch_assoc();
                  
                  $dongia=$result['gia'];
                  $title=$result['tieude'];
                  $hinh=$result['hinh'];
                 
                  $giohang_select="SELECT * FROM `giohang`  WHERE idkh='$idkh' and id='$id'";
                  $giohang_sl= mysqli_query($conn,$giohang_select)->fetch_assoc();
                  $soluong=$giohang_sl['soluong'];
                  if($giohang_sl['id']==$id){
                    $soluong++;
                    $giohang_update="UPDATE `giohang` SET soluong='$soluong' WHERE id='$id'";
                    $conn->query($giohang_update);
                  }
                  else{
                    $query="INSERT INTO `giohang`(`id`,`soluong`,`dongia`, `title`,`hinh`,`idkh`) VALUES ('$id','1','$dongia','$title','$hinh','$idkh')";
                    $conn->query($query);
                  }
                    
                  echo "
                        <script>
                            location.href= 'http://localhost:8080/webbandongho/giohang.php'
                        </script>
                    ";
                }      
                
                $conn->close();    
            ?> 
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
                        <!-- <div class="right1_side" style="width:280px;">
                            <div class="icon_contact">
                              <i class=" fa-brands fa-instagram" aria-hidden="true"></i>
                            </div>
                            <div class="icon_contact">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </div>
                            <div class="icon_contact">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </div>
                            <div class="icon_contact">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </div>
                        </div> -->
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