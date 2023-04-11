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
            <a href="competitiondateA.php">比賽日程</a>
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
        <!--日曆-->
        <td width="89" height="50" valign="middle" >
            <div style="margin-top:3%;text-align:right;margin-right:6%">
                  <select onchange="window.location.href=this.value;" style="font-size:1.2em;">
                    <option value="competitiondateA.php" href="competitiondateA.php">A組 台中洲際</option>
                    <option  value="competitiondateB.php"href="competitiondateB.php">B組 東京巨蛋</option>
                    <option selected value="competitiondateC.php"href="competitiondateC.php">C組 大通銀行球場</option>
                    <option value="competitiondateD.php" href="competitiondateD.php">D組 馬林魚球場</option>
                  </select>   
            </div>
        </td>
    <div style="overflow-x:auto;margin-bottom:4%">
        <td colspan="3" text-align="center" valign="top" >
                    <table style="margin-left:8%;" width="80%"  cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td height="5"></td>
                        </tr>
                        <tr>
                         
                          <td align="center">一</td>
                          <td align="center">二</td>
                          <td align="center">三</td>
                          <td align="center" >四</td>
                          <td align="center">五</td>
                          <td align="center" style="color:#FF0000">六</td>
                          <td align="center" style="color:#FF0000">日</td>
                        </tr>
                      </tbody>
                    </table>
                <!-- cal -->
                    <table  style="margin-left:8%;background:white" width="80%" border="2 #003D79"  cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td ><table width="100%"  cellspacing="0" cellpadding="6">
                              <tbody>
                                <!--1~5-->
                                <tr>
                                    <td class="calendertext"></td>
                                    <td class="calendertext"></td>
                                    <td class="calendertext">1<br></td>
                                    <td class="calendertext">2<br></td>
                                    <td class="calendertext">3<br></td>
                                    <td class="calendertext" style="color:red" >4<br></td>
                                    <td style="color:red"class="calendertext2">5<br></td>
                                </tr>
                                <!--6~12-->
                                <tr>
                                    <td class="calendertext" >6<br></td>
                                    <td class="calendertext" >7<br></td>
                                    <td class="calendertext" >8<br></td>
                                    <td class="calendertext">9<br></td>
                                    <td class="calendertext">10<br></td>
                                    <td class="calendertext"><span style="color:red">11</span><br></td>
                                    <td class="calendertext2"><span style="color:red">12</span><br>哥倫比亞V.S墨西哥<br>03:30<br>
                                        <span style="background:#FFFFB9;padding:3px;">FINAL:5:4</span><br>
                                        英國v.s美國<br>10:00<br>
                                        <span style="background:#FFFFB9;padding:3px;">FINAL:2:6</span><br>
                                    </td>
                                </tr>
                                <!--13~19-->
                                <tr>
                                    <td class="calendertext" >13<br>英國v.s加拿大<br>03:00<br>
                                        <span style="background:#FFFFB9;padding:3px;">FINAL:8:18</span><br>
                                        墨西哥v.s美國<br>10:00<br>
                                        <span style="background:#FFFFB9;padding:3px;">FINAL:11:5</span><br>
                                    </td>
                                    <td class="calendertext" >14<br>哥倫比亞v.s英國<br>03:00<br>
                                        <span style="background:#FFFFB9;padding:3px;">FINAL:5:7</span><br>
                                        加拿大v.s美國<br>10:00<br>
                                        <span style="background:#FFFFB9;padding:3px;">FINAL:1:12</span><br>
                                    </td>
                                    <td class="calendertext" >15<br>加拿大v.s哥倫比亞<br>03:00<br>
                                        <span style="background:#FFFFB9;padding:3px;">FINAL:5:0</span><br>
                                        英國v.s墨西哥<br>10:00<br>
                                        <span style="background:#FFFFB9;padding:3px;">FINAL:1:2</span><br>
                                    </td>
                                    <td class="calendertext" >16<br>墨西哥v.s加拿大<br>03:00<br>
                                        <span style="background:#FFFFB9;padding:3px;">FINAL:10:3</span><br>
                                        美國v.s哥倫比亞<br>10:00<br>
                                        <span style="background:#FFFFB9;padding:3px;">FINAL:3:2</span><br>
                                    </td>
                                    <td class="calendertext" >17<br></td>
                                    <td class="calendertext" ><span style="color:red">18</span></td>
                                    <td class="calendertext2"><span style="color:red">19</span></td>
                                </tr>
                                <!--20~26-->
                                <tr>
                                    <td class="calendertext">20<br></td>
                                    <td class="calendertext">21<br></td>
                                    <td class="calendertext">22<br></td>
                                    <td class="calendertext">23<br></td>
                                    <td class="calendertext">24<br></td>
                                    <td class="calendertext"><span style="color:red">25</span></td>
                                    <td class="calendertext2"><span style="color:red">26</span><br></td>
                                </tr>
                                <!--27~31-->
                                <tr>
                                    <td class="calendertext1">27<br></td>
                                    <td class="calendertext1">28<br></td>
                                    <td class="calendertext1">29<br></td>
                                    <td class="calendertext1">30<br></td>
                                    <td class="calendertext1">31<br></td>
                                    <td></td><td></td></tr>       
                        </tbody>
                          </table></td>
                        </tr>
                      </tbody>
                    </table>
                  <!-- cal end -->
              
    </div>

        

        <footer class="footer">

            <p style="font-weight:bold;
                      text-align:center;">僅練習使用，非商業用途</p>
            
        </footer>
   
  </body>
</html>