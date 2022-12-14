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
                            <a href="http://localhost:8080/webbandongho/dangnhap.php">????ng Nh???p</a>
                        </li>
                        <li><i class="fa fa-sign-in" aria-hidden="true"></i>
                        <li class="header_nav_left">
                            <a href="http://localhost:8080/webbandongho/dangky.php">????ng K??</a>
                        </li>     
                    </ul>           
                        <ul class="c">    
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                        </li> 
                        <li class="header_nav_right">
                            <a href="">19001081</a>
                        </li>
                        <li class="header_nav_right">
                            <a href="">Li??n H???</a>
                        </li>
                        <li><i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </li>
                        <li class="header_nav_right">
                            <a href="">Gi??? H??ng</a>
                        </li> 
                        </ul>
                        <div class="topnav">                          
                            <div class="search-container">
                                <form action="action_page.php">
                                  <input type="text" placeholder="T??m ki???m.." name="search" style="border:1px solid #f6f6f6">
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
                                <li><a href="">GI???I THI???U</a></li>
                                <li><a href="">TH????NG HI???U</a></li>
                                <li><a href="">S???N PH???M</a></li>
                                <li><a href="">KI???N TH???C & TIN T???C</a></li>
                                <li><a href="">?????I L?? & C???A H??NG</a></li>
                                <li><a href="">TH??NH VI??N TOPTEN CLUB</a></li>
                                <li><a href="">B???O H??NH & S???A CH???A</a></li>
                                <li><a href="">LI??N H???</a></li>
                                </ul>
                        </ul>
                    </div>
                    
            </div>

            <!-- content --> 
            <div class="titleHome">
                <p>GI??? H??NG</p>
            </div>
            
            
        <div class='content'>
                <div class='wrap_content grid_content'>
                  <div class="title_gh">
                      <div class="left_gh">
                        <p>S???N PH???M</p>
                      </div>
                      <div class="wrap_right_gh">
                          <div class="right_gh">
                              <p>S??? L?????NG</p>
                          </div>
                          <div class="right_gh">
                              <p>????N GI??</p>
                          </div>
                          <div class="right_gh">
                              <p>TH??NH TI???N</p>
                          </div>
                          <div class="right_gh">
                              <p>X??A</p>
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
                                                          <p style='font-size:14px;'>".number_format($row['dongia'],0,',','.')." ??</p>
                                                      </div>

                                                      <div class='ghdec'>
                                                          <p style='font-size:14px; color:#ed1c24;'>".number_format($dongia,0,',','.')." ??</p>
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
                                    echo '<h1 style="padding:100px 0; text-align:center;">B???n ch??a ????ng nh???p</h1>';
                                }
                                
                                      $conn->close();
                                ?>
                      </div> 
                      
                    <div class="tong_gh">
                        <div class="left_tong">
                            <i style="float:left;margin-right:10px; font-size:14px;" class="fa fa-tags" aria-hidden="true"></i>
                            <p style="font-size:15px; font-weight:500; margin-bottom:15px;">M?? GI???M GI??</p>
                            <form action="">
                                <p>
                                    <input class="ipgiamgia"  type="text" placeholder="S??? d???ng m?? gi???m gi??(n???u c??)">
                                    <button class="btngiamgia">s??? d???ng</button>
                                </p>
                            </form>
                        </div>
                        <div class="right_tong">
                            <div class="label">
                                <p>T???ng gi??? h??ng:</p>
                                <p>Gi???m gi??:</p>
                                <p>T???ng c???ng:</p>
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
                                            <p>".number_format($tong,0,',','.')."??</p>
                                            <p>-0 ??</p>
                                            <p style='font-size:19px; color:#ed1c24; font-weight:600;'>".number_format($tong,0,',','.')." ??</p>
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
                                        <p>TI???P T???C MUA H??NG</p>
                                    </div>
                                </a>
                                <a href="http://localhost:8080/webbandongho/thanhtoan.php" style="text-decoration:none;color:black;">
                                    <div class="right_btn">
                                        <p> THANH TO??N</p>
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
                            <h4>????NG K?? NH???N TH??NG TIN M???I NH???T T??? TOP TEN</h4>
                        </div>
                        <div class="submit">
                            <input type="text" placeholder="Nh???p email nh???n tin t???c" style="padding: 10px 10px; width: 300px;">
                            <button type="submit" style="padding: 12px 20px; background-color: red; color: white; border: none; margin-left: -5px;">G???i</button>
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
                                <p class="left1_title">TH??NG TIN C??NG TY</p>
                                <p class="left1_decs">Gi???i Thi???u</p>
                                <p class="left1_decs">Tin c??ng ty</p>
                                <p class="left1_decs">?????i l?? & C???a h??ng</p>
                                <p class="left1_decs">Tuy???n d???ng</p>
                                <p class="left1_decs">Li??n h???</p>
                            </div>
                            <div class="left1_col">
                                <p class="left1_title">TH????NG HI???U</p>
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
                                <p class="left1_title">S???N PH???M</p>
                                <p class="left1_decs">?????ng h??? Nam</p>
                                <p class="left1_decs">?????ng h??? N???</p>
                                <p class="left1_decs">?????ng h??? ????i</p>
                                <p class="left1_decs">Trang s???c</p>
                                <p class="left1_decs">Ph??? ki???n</p>
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
                                <p class="left2_decs"> <i class="fa fa-home" aria-hidden="true "style="margin-right:7px"></i>102-104 Th???ch Th??? Thanh, Qu???n 1, TP.H??? Ch?? Minh.</p>
                                <p class="left2_decs"><i class="fa fa-phone" aria-hidden="true" style="margin-right:7px"></i>(84-28) 38 203 204 ; 0776 889 889</p>
                                <p class="left2_decs"><i class="fa fa-volume-control-phone" aria-hidden="true" style="margin-right:7px"></i>(84-28) 38 203 959</p>
                                <p class="left2_decs"><i class="fa fa-envelope" aria-hidden="true"style="margin-right:7px"></i>contact@toptenco.com.vn</p>
                            </div>
                            <div class="left2_col">
                                <h4 class="left2_title">TRUNG T??M B???O H??NH QU???C T???</h4>
                                <p class="left2_decs"><i class="fa fa-home" aria-hidden="true "style="margin-right:7px"></i>18bis/21 Nguy???n Th??? Minh Khai, Qu???n 1, TP.HCM</p>
                                <p class="left2_decs"><i class="fa fa-phone" aria-hidden="true" style="margin-right:7px"></i>(84-28) 39 111 699 ; 0926 789 789</p>
                                <p class="left2_decs"><i class="fa fa-envelope" aria-hidden="true"style="margin-right:7px"></i>servicecenter@toptenco.com.vn</p>
                            </div>
                            <div class="left2_col">
                                <h4 class="left2_title">CHI NH??NH H?? N???I: AEON LONG BIEN</h4>
                                <p class="left2_decs"><i class="fa fa-home" aria-hidden="true "style="margin-right:7px"></i>JW1-2, s??? 27 ???????ng C??? Linh, Ph?????ng Long Bi??n, Qu???n Long Bi??n, H?? N???i.</p>
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
                                <p class="left3_decs">C??ng ty TNHH T???P T??N</p>
                                <p class="left3_decs">102-104 Th???ch Th??? Thanh, Ph?????ng T??n ?????nh, Qu???n 1, Th??nh ph??? H??? Ch?? Minh.</p>
                                <p class="left3_decs">Gi???y ph??p kinh doanh s???: 0303647244</p>
                                <p class="left3_decs">????ng k?? ng??y: 07 th??ng 12 n??m 2004 b???i S??? K??? ho???ch v?? ?????u T?? Th??nh ph??? H??? Ch?? Minh.</p>
                            </div>
                            <div class="left3_col">
                                <p class="left3_decs">Copyright ?? 2018 ?????NG H??? TOPTEN</p>
                                <p class="left3_decs">Thi???t k??? web: <a  href="https://www.facebook.com/profile.php?id=100015418338286" style="text-decoration: none;"> Leader-Pham Minh Hau</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                       
        </div>
    </body>
</html>