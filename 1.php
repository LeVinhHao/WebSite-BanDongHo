<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="1.css">
    <title>TOPTEN - Trang chủ</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
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
                            <a href="https://toptenco.com.vn/lien-he.html">Liên Hệ</a>
                        </li>
                        <li><i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </li>
                        <li class="header_nav_right">
                            <a href="http://localhost:8080/webbandongho/giohang.php" style="text-decoration:none;">Giỏ Hàng</a>
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
                                <li><a href="https://toptenco.com.vn/gioi-thieu.html">GIỚI THIỆU</a></li>
                                <li><a href="https://toptenco.com.vn/thuong-hieu.html">THƯƠNG HIỆU</a></li>
                                <li><a href="https://toptenco.com.vn/dong-ho-nam.html">SẢN PHẨM</a></li>
                                <li><a href="https://toptenco.com.vn/tin-tuc.html">KIẾN THỨC & TIN TỨC</a></li>
                                <li><a href="https://toptenco.com.vn/cua-hang.html">ĐẠI LÝ & CỬA HÀNG</a></li>
                                <li><a href="https://toptenco.com.vn/club.html">THÀNH VIÊN TOPTEN CLUB</a></li>
                                <li><a href="https://toptenco.com.vn/cua-hang/96/service-center-nguyen-thi-minh-khai.html">BẢO HÀNH & SỬA CHỬA</a></li>
                                <li><a href="https://toptenco.com.vn/lien-he.html">LIÊN HỆ</a></li>
                                </ul>
                        </ul>
                    </div>
                    <div class='lentop'>
                      <div class="wrap_lentop">
                            <!-- <img src='https://1.bp.blogspot.com/-k6sikOdzFXQ/VwqCKDosmEI/AAAAAAAAKxE/nLxLhkTIO6o3iE5ZWmtxo2bf4QHdzPQNQ/s1600/top.png'/> -->
                            <i class="fa fa-chevron-up" aria-hidden="true"></i>
                      </div>
                    </div>
                    <script src="http://code.jquery.com/jquery-latest.js"></script>
                    <div class="header_slide">
                        <div class="header_slide-bg">
                        </div>

                        <!-- the nut o day -->
                        <div class="header_slide-bg-icon">
                            <i class="ti-angle-left btn-left-js" ></i>
                            <i class="ti-angle-right btn-right-js"></i>
                            
                        </div>

                        <ul class="ListNut"></ul>
                    </div>               
                </div>   
                <footer style="height:auto;"></footer>
            </div>
            <div class="trademarkHome">

              <!-- Them anh dong -->

            </div>
            <!-- content --> 
            <div class="titleHome">
                <p>ĐỒNG HỒ BÁN CHẠY</p>
            </div>
            
            
            <div class='content'>
                <div class='wrap_content grid_content'>                
                        <?php
                            require 'connect.php';
                            $query="SELECT * FROM `sanpham`";
                            $result= $conn->query($query);
                            while($row= $result->fetch_assoc()){
                                echo "   

                                        <a style='color:black;' href='http://localhost:8080/webbandongho/chitiet.php/?id=".$row['masp']."'>
                                            <div class='product '>
                                                <div class='wrap_product'>   
                                                    <div class='product_img'>
                                                        <img src=".$row['hinh'].">
                                                    </div>
                                                    <div class='product_title'>
                                                        <p style='text-align:center;'>".$row['tieude']."</p>
                                                        
                                                    </div>
                                                    <p style='text-align:center; font-size:13px; margin-top:10px; color:#333;'>#T1224071605100</p>
                                                    <div class='product_price'>
                                                        <p>".number_format($row['gia'],0,',','.')." VNĐ</p>
                                                    </div>
                                                </div>
                                            </div>    
                                        </a>
                                ";
                            }    
                            $conn->close();
                        ?>
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
                        <div class="right1_side" style="width:280px;">
                            <div class="icon_contact">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
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
                                <p class="left3_decs">Thiết kế web: Lê Vĩnh Hảo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <script src="./1.js"></script>           
        </div>
    </body>
</html>