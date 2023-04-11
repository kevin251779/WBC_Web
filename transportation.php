<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>WBC台灣官方網站</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="homepagewantest1.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body style="background:#FFFFF4">
    <div class='wrapper'>
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">


            <!-- Indicators/dots -->
            <div class="carousel-indicators">
            <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="0"
                class="active"
            ></button>
            <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="1"
            ></button>
            <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="2"
            ></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                src="./picture/首頁輪播照.png"
                alt="WBC1"
                class="d-block"
                style="width: 100%"
                />
            </div>
            <div class="carousel-item">
                <img
                src="./picture/首頁輪播照1.jpg"
                alt="WBC2"
                class="d-block"
                style="width: 100%"
                />
            </div>
            <div class="carousel-item">
                <img
                src="./picture/首頁輪播照2.jpg"
                alt="WBC3"
                class="d-block"
                style="width: 100%"
                />
            </div>
            </div>

            <!-- Left and right controls/icons -->
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#demo"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#demo"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <div class="topnav">
        
            <ul class="drop-down-menu">
            <li>
                <a href="homepage.php">首頁</a>
                <ul>
                    <li>
                    <a href="historypage.php">歷史沿革</a>
                    </li>
                    <li>
                    <a href="historycompetition.php">歷屆概況</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">比賽日程</a>
                <ul>
                    <li>
                    <a href="competitiondateA.php">A組</a>
                    </li>
                    <li>
                    <a href="competitiondateB.php">B組</a>
                    </li>
                    <li>
                    <a href="competitiondateC.php">C組</a>
                    </li>
                    <li>
                    <a href="competitiondateD.php">D組</a>
                    </li>
                </ul>
            </li>
            <li>
            <a href="#">參賽隊伍</a>
                <ul>
                    <li>
                    <a href="#">A組</a>
                    </li>
                    <li>
                    <a href="#">B組</a>
                    </li>
                    <li>
                    <a href="#">C組</a>
                    </li>
                    <li>
                    <a href="#">D組</a>
                    </li>
                </li>
            </ul>
            <li>
            <a href="transportation.php">交通資訊</a>
            </li>
            <li>
            <a href="shoppingpage1.php">周邊購買</a>
            </li>
            <li>
            <a
                target="_blank"
                href="https://twitter.com/wbcbaseball?lang=zh-Hant"
            >
                <img
                src="./picture/twitter.png"
                alt="twitter"
                style="width: 30px; text-align: right;"
                />
            </a>
            </li>
            <li>
            <a target="_blank" href="https://www.instagram.com/wbcbaseball/">
                <img src="./picture/ig.png" alt="instagram" style="width: 30px" />
            </a>
            </li>
            <li>
            <a
                target="_blank"
                href="https://www.youtube.com/c/worldbaseballclassic"
            >
                <img
                src="./picture/youtube.png"
                alt="youtube"
                style="width: 35px"
                />
            </a>
            </li>
            <li><?php if (isset($user)): ?>
        
        <a href="#"style="color:yellow;"><?= htmlspecialchars($user["name"]) ?></a>
        
        <?php else: ?>
        <a href="#"style="color:yellow;">未登入</a>
      
        </style>


        <?php endif; ?>
        
        </li>
        <li><?php if (isset($user)): ?>
        <a href="logout.php">登出</a>
        
        <?php else: ?>
        
        <a href="loginform.php">註冊/登入</a> 
        
        <?php endif; ?>
        </li>
        </ul>
        </div>
    </div>



    <!--交通資訊-->
    <div style="border:solid #003060 2px;background:white;border-radius:15px;margin:3% 16%;box-shadow: 2px 2px 5px grey;">
        <h3 style="margin-top:3%;
                    margin-left: 15%; 
                    margin-right: 15%;
                    text-align:center;
                    padding:10px;
                    border-bottom:solid gray;  ">
                    台中洲際棒球場交通資訊
        </h3>
        <!--按鈕-->
        <div>
            <ul style="list-style:none;
                        display:flex;
                        justify-content:center;
                        padding:0;">
                <li style="margin:10px;">
                    <button style="padding:10px 25px;
                                    background-color: #FFD306;
                                    border:none;
                                    font-weight:bold;
                                    border-radius:20px;">
                                    <a href="#drive" style="text-decoration:none;color:black">自行開車
                                    </a>
                    </button>
                    
                </li>
                <li style="margin:10px;">
                    <button style="padding:10px 25px;
                                    background-color: #FFD306;
                                    border:none;
                                    font-weight:bold;
                                    border-radius:20px;">
                                    <a href="#highspeed"style="text-decoration:none;color:black">高鐵
                                    </a>
                    </button>
                </li>
                <li style="margin:10px;">
                    <button style="padding:10px 25px;
                                    background-color: #FFD306;
                                    border:none;
                                    font-weight:bold;
                                    border-radius:20px;">
                                    <a href="#train" style="text-decoration:none;color:black">台鐵
                                    </a>
                    </button>
                </li>
                <li style="margin:10px;">
                    <button style="padding:10px 25px;
                                    background-color: #FFD306;
                                    border:none;
                                    font-weight:bold;
                                    border-radius:20px;">
                                    <a href="#mrt" style="text-decoration:none;color:black">捷運
                                    </a>
                    </button>
                </li>
                <li style="margin:10px;">
                    <button style="padding:10px 25px;
                                    background-color: #FFD306;
                                    border:none;
                                    font-weight:bold;
                                    border-radius:20px;">
                                    <a href="#bus" style="text-decoration:none;color:black">公車
                                    </a>
                    </button>
                </li>
            </ul>
        </div>
        <!--地圖-->
        <div>
            <p style="text-align: center;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.209854684533!2d120.68395579999999!3d24.1994288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346917a1785a1bff%3A0xdf4c97eedc4697c0!2zNDA25Y-w5Lit5biC5YyX5bGv5Y2A5bSH5b636Lev5LiJ5q61ODM16Jmf!5e0!3m2!1szh-TW!2stw!4v1675929556258!5m2!1szh-TW!2stw" 
                    style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" 
                    width="85%" height="450"></iframe></p>
        </div>
        <div >
            <table border="1" cellspacing="1" cellpadding="5" 
                   style=" line-height: 170%;margin:auto">
                <tbody>
                    <!--自行開車-->
                    <tr id="drive">
                        <td headers="e" align="left" bgcolor="#ffffff">
                            <img src="./picture/car.png"
                                style="width:35px;hight:35px;" 
                                border="0" alt="自行開車" >自行開車
                        </td>
                    </tr>
                    <tr>
                        <td headers="e" align="left" bgcolor="#ECF5FF">
                            國道1號(北部南下民眾)：大雅交流道→環中路→右轉崇德路三段→洲際棒球場
                            <br>國道3號(南部北上民眾)：霧峰系統交流道→台74(崇德路出口)→環中路迴轉→崇德路三段→洲際棒球場
                            <br>74快速道(從西邊前往)：台74(崇德路出口)→環中路→右轉崇德路三段→洲際棒球場
                            <br>
                                <span>74快速道(</span><span>從東邊前往)：台74(崇德路出口)→環中路迴轉→右轉崇德路三段→洲際棒球場
                            <br></span>
                        </td>
                    </tr>
                    <!--搭乘火車-->
                    <tr id="train">
                        <td headers="e" align="left" bgcolor="#ffffff">
                            <img src="./picture/underground.png" 
                                 style="width:35px;hight:35px;"
                                 border="0" alt="搭乘火車" >搭乘火車
                        </td>
                    </tr>
                    <tr>
                        <td headers="e" align="left" bgcolor="#ECF5FF">
                            <p><strong>•</strong> 於臺中火車站下車
                                <br>搭乘12、12延、58、58副、58區2、71、700 公車至臺中洲際棒球場下車
                                <br>搭乘14 公車至七張犁站，再步行700公尺<span>至臺中洲際棒球場</span>
                            </p>
                            <p><strong>•</strong><span> 於潭子火車站下車</span>
                                <br><span>搭乘58、58副、58區2 公車至臺中洲際棒球場下車</span>
                            </p>
                            <p><span><strong>•</strong><span> 於豐原火車站下車</span>
                                <br><span>搭乘700 公車至臺中洲際棒球場下車</span></span>
                            </p>
                            <p><span><span><strong><span style="color: #0000ff;">
                                <a style="color: #0000ff;" 
                                   href="http://citybus.taichung.gov.tw/ebus/driving-map" 
                                   target="_blank" title="公車路線查詢(另開新視窗)">公車路線查詢
                                </a></span></strong></span></span>
                            </p>
                        </td>
                    </tr>
                    <!--搭乘高鐵-->
                    <tr id="highspeed">
                        <td headers="e" align="left" bgcolor="#ffffff">
                            <img src="./picture/high-speed-train.png" 
                                 style="width:35px;hight:35px;"; border="0" alt="搭乘高鐵" >
                                 搭乘高鐵
                        </td>
                    </tr>
                    <tr>
                        <td headers="e" align="left" bgcolor="#ECF5FF">於臺中站下車
                            <br>1.轉臺鐵至臺中車站下車後查看上方「搭乘火車」資訊。
                            <br>2.轉捷運至臺中捷運文心崇德站下車後<span>查看下方「搭乘捷運」資訊</span>。
                            
                        </td>
                    </tr>
                    <!--搭乘公車-->
                    <tr id="bus">
                        <td headers="e" align="left" bgcolor="#ffffff">
                            <img src="./picture/bus.png" style="width:35px;hight:35px;"  
                                border="0" alt="搭乘公車" >搭乘公車
                        </td>
                    </tr>
                    <tr>
                        <td headers="e" align="left" bgcolor="#ECF5FF">
                            <p>臺中市區公車可達臺中洲際棒球場班次：12、14、58、71、127、127延、700、956。
                                <br><span style="color: #0000ff;">
                                <strong><a style="color: #0000ff;" 
                                        href="http://citybus.taichung.gov.tw/ebus/driving-map" 
                                        target="_blank" title="公車路線查詢(另開新視窗)">公車路線查詢
                                        </a>
                                </strong></span>
                            </p>
                        </td>
                    </tr>
                    <!--搭乘捷運-->
                    <tr id="mrt">
                        <td headers="e" align="left" bgcolor="#ffffff">
                            <img style="width:35px;hight:35px;" 
                                 src="./picture/seoul-metro-logo.png" 
                                 style="width:35px;hight:35px;"; alt="搭乘臺中捷運">搭乘臺中捷運
                        </td>
                    </tr>
                    <tr>
                        <td headers="e" align="left" bgcolor="#ECF5FF">
                            <p><strong>•</strong> 請搭至文心崇德站下車後搭乘 12、58、71、127延、700公車至臺中洲際棒球場站下車。
                                <br><span style="color: #0000ff;">
                                    <strong><a style="color: #0000ff;" 
                                            href="http://citybus.taichung.gov.tw/ebus/driving-map" 
                                            target="_blank" title="公車路線查詢(另開新視窗)">公車路線查詢
                                            </a>
                                </strong></span>
                            </p>
                        </td>
                    </tr>
                    
                </tbody>
            </table>  
        </div>
    </div>



    <!--footer-->
    <footer class="footer">
        <p style="font-weight:bold;
            text-align:center;">僅練習使用，非商業用途</p>

    </footer>
   
  </body>
</html>