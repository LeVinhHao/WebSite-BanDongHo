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
.navbar a{
    text-decoration:none;
    color:black;
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
                    <p style='margin-left:20px;'>Danh m???c</p>
                </div>
                <div class="navbar">
                    <ul>
                        <a href="http://localhost:8080/webbandongho/admin.php"><li><i class="fa fa-suitcase" aria-hidden="true"></i>Qu???n l?? s???n ph???m</li></a>
                        <a href="http://localhost:8080/webbandongho/QLngdung.php"><li><i class="fa fa-user" aria-hidden="true"></i>Qu???n l?? ng?????i d??ng</li></a>
                        <a href="http://localhost:8080/webbandongho/QLdonhang.php"><li><i class="fa fa-truck" aria-hidden="true"></i>Qu???n l?? gi??? h??ng</li></a>
                        <a href="http://localhost:8080/webbandongho/ttKH.php"><li><i class="fa fa-info-circle" aria-hidden="true"></i>Th??ng tin ????n h??ng</li></a>
                    </ul>
                </div>
            </div>
            <div class="content ">
                <div class="nav_content">
                    <div class="wrap_navct grid">
                        <p>QU???N L?? GI??? H??NG</p>
                        <form action="">
                            <div class="form-group">
                                <input type="text" placeholder="T??m ki???m">
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="content_ct grid">
                    <div class="title" style="margin-top:50px;  background:#88686817;">
                        <div class="left_side" >
                            <p>S???n ph???m</p>
                        </div>
                        <div class="wrap_right_side">
                            <div class="right_side">
                                <p>Ti??u ?????</p>
                            </div>
                            <div class="right_side">
                                <p>????n gi??</p>
                            </div>
                            <div class="right_side">
                                <p>S??? l?????ng</p>
                            </div>
                            <div class="right_side">
                                <p>IDKH</p>
                            </div>
                            <div class="right_side">
                                <p>X??a</p>
                            </div> 
                        </div>
                    </div>
                   <?php
                        require 'connect.php';
                        $query="SELECT * FROM `giohang`";
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
                                    <p>".$row['title']."</p>
                                </div>
                                <div class='right_side'>
                                    <p>".$row['dongia']."</p>
                                </div>
                                <div class='right_side'>
                                    <p>".$row['soluong']."</p>
                                </div>
                                <div class='right_side'>
                                    <p>".$row['idkh']."</p>
                                </div>
                                <div class='right_side'>
                                    <a href='http://localhost:8080/webbandongho/admin_xoadh.php/?id=".$row['id']."' style='text-decoration:none; color:black;'><p>X??a</p></a>
                                </div>
                            </div>
                        </div>";
                        }
                        $conn->close();
                   ?>
                </div>
               
            </div>
        </div>
    </body>
</html>