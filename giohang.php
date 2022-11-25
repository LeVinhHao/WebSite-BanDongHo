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
    <link rel="stylesheet" href="giohang.css">
    <title>TOPTEN - luxury watch</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <style>
 .tong_gh{
    width: 100%;
    height:150px;
    background-color: #f6f6f6;
    display:flex;
    justify-content:space-between;
    align-items:center;
  }
  .label{
    margin-right:55px;
    float: left;
  }
  .left_tong{
    width: 350px;
    margin-left:30px ;
  }
  .right_tong{
    width: 290px;
    line-height:35px;
  }
  .ipgiamgia{
    padding:9px 60px 9px 7px;
    border:1px solid #c6b7b7;
    width: 250px;
  }
  .btngiamgia{
    padding:10px 15px; 
    margin-left:-5px;
    border:none;
    background-color:black;
    color:white;
    opacity:0.8;
  }
  .btngiamgia:hover{
    cursor: pointer;
    background-color:#ed1c24;
    color:white;
    transition:0.4s;
  }
.btn{
    width: 100%;
    height:100px;
    display:flex;
    justify-content: space-between;
    align-items:center;
    margin-top:10px;
}
.left_btn{
    width:200px;
    height:45px;
    background-color:white;
    color:black;
    border:2px solid black;
    display:flex;
    justify-content: center;
    align-items:center;
}
.left_btn:hover{
    background-color:black;
    color:white;
    cursor: pointer;
    transition:all 0.3s linear;
}
.right_btn{
    width:200px;
    height:45px;
    background-color:#ed1c24;
    border:2px solid #ed1c24;
    color:white;
    display:flex;
    justify-content:center;
    align-items:center;
}
.right_btn:hover{
    background-color:white;
    color:#ed1c24;
    cursor: pointer;
    transition:all 0.3s linear;
}
.cong{
    width: 38px;
    height:35px;
    background-color:#ccc;
    font-size:25px;
    display:flex;
    justify-content:center;
    align-items:center;
    margin-left:12px;
    border-radius:1px;
}
.tru{
    width: 38px;
    height:35px;
    font-size:25px;
    background-color:#ccc;
    display:flex;
    justify-content:center;
    align-items:center;
}
.cong:hover{
    cursor: pointer;
}
.tru:hover{
    cursor: pointer;
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
                <p>GIỎ HÀNG</p>
            </div>
            
            
        <div class='content'>
                <div class='wrap_content grid_content'>
                  <div class="title_gh">
                      <div class="left_gh">
                        <p>SẢN PHẨM</p>
                      </div>
                      <div class="wrap_right_gh">
                          <div class="right_gh">
                              <p>SỐ LƯỢNG</p>
                          </div>
                          <div class="right_gh">
                              <p>ĐƠN GIÁ</p>
                          </div>
                          <div class="right_gh">
                              <p>THÀNH TIỀN</p>
                          </div>
                          <div class="right_gh">
                              <p>XÓA</p>
                          </div>
                      </div>
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
                                              <div class='product'> 
                                                  <div class='left_ghdec'>    
                                                      <div class='product_img'>
                                                          <img src=./".$row['hinh']." style='width: 50px;
                                                          height: 76px;'>
                                                      </div>   
                                                      <div class='product_title'>
                                                          <p style='font-size:14px;'>".$row['title']."</p>
                                                          <p style='font-size:13px; color:#ccc;'>T0654301605100</p>
                                                      </div> 
                                                  </div> 
                                                  <div class='right_ghdec'>
                                                      <div class='ghdec'>
                                                            <a style='text-decoration:none;color:black;' href='http://localhost:8080/webbandongho/cong.php/?id=".$row['id']."'> 
                                                                <div class='tru'> 
                                                                    <p>+</p> 
                                                                </div> 
                                                            </a>                         
                                                                    <input style='width:35px; height: 35px; padding-left:10px; margin-left:12px;' placeholder='".$row['soluong']."' name='soluong'/></br>
                                                            <a style='text-decoration:none;color:black;' href='http://localhost:8080/webbandongho/tru.php/?id=".$row['id']."'>
                                                                <div class='cong'>
                                                                    <p>-</p>
                                                                </div>
                                                            </a>  
                                                      </div>
                                                      <div class='ghdec'>
                                                          <p style='font-size:14px;'>".number_format($row['dongia'],0,',','.')." đ</p>
                                                      </div>

                                                      <div class='ghdec'>
                                                          <p style='font-size:14px; color:#ed1c24;'>".number_format($dongia,0,',','.')." đ</p>
                                                      </div>
                                                      
                                                      <div class='ghdec '>
                                                                <div class='xoahover' style='border:none;background:none;'>
                                                                    <a style='text-decoration:none; color:black;' href='http://localhost:8080/webbandongho/xoahang.php/?id=".$row['id']."'
                                                                        <p style='font-size:16px;'>X</p>
                                                                    </a>
                                                                </div>                                                     
                                                      </div>
                                                     
                                                  </div>  
                                                       
                                              </div>    
                                          ";
                                    }
                                }else{
                                    echo '<h1 style="padding:100px 0; text-align:center;">Bạn chưa đăng nhập</h1>';
                                }
                                
                                      $conn->close();
                                ?>
                      </div> 
                      
                    <div class="tong_gh">
                        <div class="left_tong">
                            <i style="float:left;margin-right:10px; font-size:14px;" class="fa fa-tags" aria-hidden="true"></i>
                            <p style="font-size:15px; font-weight:500; margin-bottom:15px;">MÃ GIẢM GIÁ</p>
                            <form action="">
                                <p>
                                    <input class="ipgiamgia"  type="text" placeholder="Sử dụng mã giảm giá(nếu có)">
                                    <button class="btngiamgia">sử dụng</button>
                                </p>
                            </form>
                        </div>
                        <div class="right_tong">
                            <div class="label">
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
                                            <p style='font-size:19px; color:#ed1c24; font-weight:600;'>".number_format($tong,0,',','.')." đ</p>
                                        </div>
                                    ";
                                    
                                }
                            ?>
                        </div>
                    </div>

                    <?php 
                        if(isset($_SESSION ['login']['idkh'])){
                            echo '
                            <div class="btn">
                                <a href="http://localhost:8080/webbandongho/1.php" style="text-decoration:none;color:black;">
                                    <div class="left_btn">
                                        <p>TIẾP TỤC MUA HÀNG</p>
                                    </div>
                                </a>
                                <a href="http://localhost:8080/webbandongho/thanhtoan.php" style="text-decoration:none;color:black;">
                                    <div class="right_btn">
                                        <p> THANH TOÁN</p>
                                    </div>
                                </a>
                            </div>';
                        }
                    ?>
                    
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