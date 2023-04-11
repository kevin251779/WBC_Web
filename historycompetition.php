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
    
    <!--歷屆概況-->
    <h2 style="margin-top:3%;
                margin-left: 15%; 
                margin-right: 15%;
                text-align:center;
                padding:10px;
                border-bottom:solid gray;  "> 
                <span >歷屆概況</span>
    </h2>
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
                                <a href="#one" style="text-decoration:none;color:black">資格賽
                                </a>
                </button>
                
            </li>
            <li style="margin:10px;">
                <button style="padding:10px 25px;
                                background-color: #FFD306;
                                border:none;
                                font-weight:bold;
                                border-radius:20px;">
                                <a href="#two"style="text-decoration:none;color:black">會內賽
                                </a>
                </button>
            </li>
            <li style="margin:10px;">
                <button style="padding:10px 25px;
                                background-color: #FFD306;
                                border:none;
                                font-weight:bold;
                                border-radius:20px;">
                                <a href="#three" style="text-decoration:none;color:black">排名概況
                                </a>
                </button>
            </li>
            <li style="margin:10px;">
                <button style="padding:10px 25px;
                                background-color: #FFD306;
                                border:none;
                                font-weight:bold;
                                border-radius:20px;">
                                <a href="#four" style="text-decoration:none;color:black">特別規定
                                </a>
                </button>
            </li>
        </ul>
    </div>
    <!--資格賽-->
    <h4 id="one"  style="margin-top:3%"> 
        <span style="margin-left:11%;">資格賽</span>
    </h4>
    <div style="margin-left:11%;
                padding:0;
                display:inline-block;">
        <table border ="1" cellspacing="0" cellpadding="6" 
               style="margin:0;
                      background:#FFF;
                      border-color:black;
                      border-collapse:collapse;
                      font-size:10pt;
                      line-height:120%;
                      white-space:nowrap;
                      text-align:center">

            <tr style="background:linear-gradient(#DDD, #FFF);
                       font-size:11pt;">
                <th colspan="11" style="letter-spacing:4px">
                      資　格　賽　歷　屆　賽　況
                </th>
            </tr>
            <tr style="background:#DDD">
                <th> 屆次 </th>
                <th> 年度 </th>
                <th> 比賽日期 </th>
                <th> 比賽地點 </th>
                <th> 參賽隊數</th>
                <th style="border-right:1px dashed black">Qualifier 1 </th>
                <th style="border-right:1px dashed black">Qualifier 2 </th>
                <th style="border-right:1px dashed black">Qualifier 3 </th>
                <th>Qualifier 4 </th>
            </tr>
            <!--第三屆資格賽-->
            <tr>
                <td> 3 </td>
                <td>2012</td>
                <td>09/19～11/18</td>
                <td> 美國、德國、巴拿馬、台灣 </td>
                <td>16</td>
                <td style="text-align:left;
                           padding:0 10px;
                           border-right:1px dashed black"> 
                           <div>
                                <table><tr><td><span>
                                <img alt="spain" src="./picture/spain.png" width="25" height="20" /></span></td><td>
                                    西班牙</td></tr></table>
                           </div>
                </td>
                <td style="text-align:left;
                           padding:0 10px;
                           border-right:1px dashed black"> 
                            <div>
                                <table><tr><td><span>
                                <img alt="canada" src="./picture/canada.png" width="25" height="20">
                                    加拿大</td></tr></table>
                            </div>
                </td>
                <td style="text-align:left;
                           padding:0 10px;
                           border-right:1px dashed black"> 
                           <div>
                                <table><tr><td><span>
                                    <img alt="brazil" src="./picture/brazil.png" width="25" height="20">
                                        巴西</td></tr></table>
                           </div>
                </td>
                <td style="text-align:left;
                           padding:0 10px;
                           background:#FFB"> 
                           <div>
                                <table><tr><td><span>
                                    <img alt="taiwan" src="./picture/taiwan.png" width="25" height="20" >
                                    中華台北</td></tr></table>
                            </div>
                </td>
                
                
            <!--第四屆資格賽-->
            <tr>
                <td> 4 </td>
                <td>2016</td>
                <td> 02/11～09/25 </td>
                <td> 澳洲、墨西哥、巴拿馬、美國 </td>
                <td> 16</td>
                <td style="text-align:left;
                           padding:0 10px;
                           border-right:1px dashed black"> 
                    <div>
                        <table><tr><td><span>
                            <img alt="australia" src="./picture/australia.png" width="25" height="20"/>
                        </span></td><td>澳洲</td></tr></table>
                    </div>
                </td>
                <td style="text-align:left;
                           padding:0 10px;
                           border-right:1px dashed black"> 
                    <div>
                        <table><tr><td><span><img alt="mexico" src="./picture/mexico.png" width="25" height="20"/>
                        </span></td><td>墨西哥</td></tr></table>
                    </div>
                </td>
                <td style="text-align:left;
                           padding:0 10px;
                           border-right:1px dashed black"> 
                    <div>
                        <table><tr><td><span><img alt="colombia" src="./picture/colombia.png" width="25" height="20" />
                        </span></td><td >哥倫比亞</td></tr></table>
                    </div>
                </td>
                <td style="text-align:left;
                           padding:0 10px"> 
                    <div>
                        <table><tr><td><span><img alt="israel" src="./picture/israel.png" width="25" height="20"/>
                        </span></td><td >以色列</td></tr></table>
                    </div>
                </td>
                </tr>
            <tr style="background:#DDD">
                <th> 屆次 </th>
                <th> 年度 </th>
                <th> 比賽日期 </th>
                <th> 比賽地點 </th>
                <th> 參賽隊數</th>
                <th style="border-right:1px dashed black" colspan="2">Pool A</th>
                <th style="border-right:1px dashed black" colspan="2">Pool B</th>
            </tr>
            <!--第五屆資格賽-->
            <tr>
                <td> 5 </td>
                <td> 2022</td>
                <td> 09/16～10/05 </td>
                <td> 德國、巴拿馬 </td>
                <td> 12</td>
                <td style="text-align:left;
                           padding:0 10px;
                           border-right:1px dashed black"> 
                <div>
                        <table><tr><td><span>
                            <img alt="united-kingdom" src="./picture/united-kingdom.png" width="25" height="20"/>
                            英國</span></td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                           padding:0 10px;
                           border-right:1px dashed black"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="czech-republic" src="./picture/czech-republic.png" width="25" height="20">
                            捷克</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                           padding:0 10px;
                           border-right:1px dashed black"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="panama" src="./picture/panama.png" width="25" height="20" >
                            巴拿馬</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                           padding:0 10px"> 
                    <div>
                        <table><tr><td><span>
                            <img alt="nicaragua" src="./picture/nicaragua.png" width="25" height="20">
                            尼加拉瓜</td></tr>
                        </table>
                    </div>
                </td>
                <td> 
                </td></tr></table>
                </div>
    </div>
     <!--會內賽-->
     <h4  id="two" style="margin-top:3%"> <span style="margin-left:11%">會內賽</span>
     </h4>
     <div style="margin-left:11%;
                padding:0;
                display:inline-block;">           
            <table border="1" cellspacing="0" cellpadding="6"
                    style="
                            background:#FFF;
                            border-color:black;
                            border-collapse:collapse;
                            font-size:10pt;
                            line-height:120%;
                            white-space:nowrap;
                            text-align:center">
            
            <tr style="background:linear-gradient(#DDD, #FFF);
                        font-size:11pt;">
        
            <th colspan="11" style="letter-spacing:4px">會　內　賽　歷　屆　賽　況</th>
            <tr style="background:#DDD">
                <th> 屆次 </th>
                <th> 年度 </th>
                <th> 比賽日期 </th>
                <th> 比賽地點 </th>
                <th> 參賽隊數</th>
                <th style="border-right:1px dashed black">冠軍 </th>
                <th style="border-right:1px dashed black">亞軍 </th>
                <th style="border-right:1px dashed black">季軍 </th>
                <th>殿軍</th>
                <th> 中華隊名次 </th>
            <!--第一屆會內賽-->
            <tr>
                <td> 1 </td>
                <td> 2006</td>
                <td> 03/03～03/21 </td>
                <td> 日本、美國、波多黎各 </td>
                <td> 16</td>
                <td style="text-align:left;
                            padding:0 10px;
                            border-right:1px dashed black"> 
                    <div>
                        <table><tr><td><span>
                            <img alt="Japan" src="./picture/japan.png" width="25" height="20">
                            日本</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                            padding:0 10px;
                            border-right:1px dashed black"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="Cuba" src="./picture/cuba.png" width="25" height="20">
                            古巴</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                            padding:0 10px;
                            border-right:1px dashed black"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="Korea" src="./picture/south-korea.png" width="25" height="20">
                            韓國</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                            padding:0 10px"> 
                    <div>
                        <table><tr><td><span>
                            <img alt="Dominican" src="./picture/dominican-republic.png" width="25" height="20">
                            多明尼加</td></tr>
                        </table>
                    </div>
                </td>
                <td> 12 </td>
        
            </tr>
            <!--第二屆會內賽-->
            <tr>
                
                <td> 2 </td>
                <td> 2009</td>
                <td> 03/05～03/23 </td>
                <td> 日本、美國、墨西哥、加拿大、波多黎各 </td>
                <td> 16</td>
                <td style="text-align:left;
                        padding:0 10px;
                        border-right:1px dashed black"> 
                    <div>
                        <table><tr><td><span>
                        <img alt="Japan.png" src="./picture/japan.png" width="25" height="20">
                        日本</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                        padding:0 10px;
                        border-right:1px dashed black"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="Korea.png" src="./picture/south-korea.png" width="25" height="20">
                            韓國</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                        padding:0 10px;
                        border-right:1px dashed black"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="Venezuela.png" src="./picture/venezuela.png" width="25" height="20"/></span></td><td>
                                委內瑞拉</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                        padding:0 10px"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="USA" src="./picture/united-states-of-america.png" width="25" height="20"/></span></td><td>
                                美國</td></tr>
                        </table>
                    </div>
                </td>
                <td> 14 </td>
            </tr>
            <!--第三屆會內賽-->
            <tr>
            
                <td> 3 </td>
                <td>2013</td>
                <td> 03/02～03/20 </td>
                <td> 日本、台灣、波多黎各、美國 </td>
                <td> 16</td>
                <td style="text-align:left;
                        padding:0 10px;
                        border-right:1px dashed black"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="Dominican" src="./picture/dominican-republic.png" width="25" height="20">
                            多明尼加</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                        padding:0 10px;
                        border-right:1px dashed black"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="Puerto rico" src="./picture/puerto-rico.png" width="25" height="20">
                            波多黎各</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                        padding:0 10px;
                        border-right:1px dashed black"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="Japan" src="./picture/japan.png" width="25" height="20">
                            日本</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                        padding:0 10px"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="Netherlands" src="./picture/netherlands.png" width="25" height="20">
                            荷蘭</td></tr>
                        </table>
                    </div>
                </td>
                <td> 8 </td>
            </tr>
            <!--第四屆會內賽-->
            <tr>
                
                <td> 4 </td>
                <td> 2017</td>
                <td> 03/06～03/22 </td>
                <td> 韓國、日本、美國、墨西哥 </td>
                <td> 16</td>
                <td style="text-align:left;
                        padding:0 10px;
                        border-right:1px dashed black"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="USA" src="./picture/united-states-of-america.png" width="25" height="20">
                            美國</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                        padding:0 10px;
                        border-right:1px dashed black"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="Puerto rico" src="./picture/puerto-rico.png" width="25" height="20"/></span></td><td>
                                波多黎各</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                        padding:0 10px;
                        border-right:1px dashed black"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="Japan" src="./picture/japan.png" width="25" height="20">
                            日本</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                        padding:0 10px">
                    <div>
                        <table><tr><td ><span>
                            <img alt="Netherlands" src="./picture/netherlands.png" width="25" height="20" >
                            荷蘭</td></tr>
                        </table>
                    </div>
                </td>
                <td> 14 </td>
            </tr>
            <!--第五屆會內賽-->
            <tr>
                
                <td> 5 </td>
                <td> 2023 </td>
                <td> 03/08～03/21 </td>
                <td> 台灣、日本、美國 </td>
                <td> 20</td>
                <td style="text-align:left;
                        padding:0 10px;
                        border-right:1px dashed black"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="Japan" src="./picture/japan.png" width="25" height="20" ></span></td><td>
                                日本</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                        padding:0 10px;
                        border-right:1px dashed black"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="USA" src="./picture/united-states-of-america.png" width="25" height="20"/></span></td><td>
                                美國</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                        padding:0 10px;
                        border-right:1px dashed black">
                    <div>
                        <table><tr><td ><span>
                            <img alt="Mexico" src="./picture/mexico.png" width="25" height="20">
                            墨西哥</td></tr>
                        </table>
                    </div>
                </td>
                <td style="text-align:left;
                        padding:0 10px"> 
                    <div>
                        <table><tr><td ><span>
                            <img alt="Cuba" src="./picture/cuba.png" width="25" height="20"> 
                            古巴</td></tr>
                        </table>
                    </div>
                </td>
                <td> 17 </td>
            </tr>
            </table>
    </div>
    <!--排名概況-->
    <h4 id="three" style="margin-top:3%"> <span style="margin-left:11%">排名概況</span></h4>
    <div style="margin-left:11%;
                padding:0;
                display:inline-block;">    
        <table border="1" cellspacing="0" cellpadding="2" 
                style="
                        background:#FFF;
                        border-color:black;
                        border-collapse:collapse;
                        font-size:10pt;
                        text-align:center;
                        white-space:nowrap;
                        font-family:Consolas">

            <tr style="font-family:&#39;微軟正黑體&#39;;
                    background:linear-gradient(#DDD, #FFF);
                    font-size:11pt;">
            <th colspan="11" style="letter-spacing:4px">世界棒球經典賽</th>
            </tr>
            <tr style="background:#DDD">
                <th> 參賽隊伍 </th>
                <th> 冠軍 </th>
                <th> 亞軍 </th>
                <th> 季軍  </th>
                <th> 殿軍 </th>
                <th> 總計</th>
            </tr>
            <!--日本-->
            <tr style="background:#FBFBFB">
                <td style="text-align:left">
                    <div>
                        <table><tr><td ><span>
                            <img alt="Japan" src="./picture/japan.png" width="25" height="20">
                            日本</td></tr>
                        </table>
                    </div> 
                </td>
                <td> 3 </td>
                <td> 0 </td>
                <td> 2 </td>
                <td> 0 </td>
                <td> 5</td>
            </tr>
            <!--美國-->
            <tr style="background:#FBFBFB">
                <td style="text-align:left">
                    <div>
                        <table><tr><td ><span>
                            <img alt="USA" src="./picture/united-states-of-america.png" width="25" height="20" >
                            美國</td></tr>
                        </table>
                    </div> 
                </td>
                <td> 1 </td>
                <td> 1 </td>
                <td> 0 </td>
                <td> 1 </td>
                <td> 3</td>
            </tr>
            <!--多明尼加-->
            <tr style="background:#FBFBFB">
                <td style="text-align:left">
                    <div>
                        <table><tr><td ><span>
                            <img alt="Dominican" src="./picture/dominican-republic.png" width="25" height="20" >
                            多明尼加</td></tr>
                        </table>
                    </div> 
                </td>
                <td> 1 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 1 </td>
                <td> 2</td>
            </tr>
            <!--波多黎各-->
            <tr style="background:#FBFBFB">
                <td style="text-align:left">
                    <div>
                        <table><tr><td ><span>
                            <img alt="Puerto rico" src="./picture/puerto-rico.png" width="25" height="20" >
                            波多黎各</td></tr>
                        </table>
                    </div> 
                </td>
                <td> 0 </td>
                <td> 2 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 2</td>
            </tr>
            <!--韓國-->
            <tr style="background:#FBFBFB">
                <td style="text-align:left">
                    <div>
                        <table><tr><td ><span>
                            <img alt="Korea" src="./picture/south-korea.png" width="25" height="20">
                            韓國</td></tr>
                        </table>
                    </div> 
                </td>
                <td> 0 </td>
                <td> 1 </td>
                <td> 1 </td>
                <td> 0 </td>
                <td> 2</td>
            </tr>
            <!--古巴-->
            <tr style="background:#FBFBFB">
                <td style="text-align:left">
                    <div>
                        <table><tr><td ><span>
                            <img alt="Cuba" src="./picture/cuba.png" width="25" height="20" >
                            古巴</td></tr>
                        </table>
                    </div> 
                </td>
                <td> 0 </td>
                <td> 1 </td>
                <td> 0 </td>
                <td> 1 </td>
                <td> 2</td>
            </tr>
            <!--委內瑞拉-->
            <tr style="background:#FBFBFB">
                <td style="text-align:left">
                    <div>
                        <table><tr><td ><span>
                            <img alt="Venezuela" src="./picture/venezuela.png" width="25" height="20">
                            委內瑞拉</td></tr>
                        </table>
                    </div> 
                </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 1 </td>
                <td> 0 </td>
                <td> 1</td>
            </tr>
            <!--墨西哥-->
            <tr style="background:#FBFBFB">
                <td style="text-align:left">
                    <div>
                        <table><tr><td ><span>
                            <img alt="Mexico" src="./picture/mexico.png" width="25" height="20" >
                            墨西哥</td></tr>
                        </table>
                    </div> 
                </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 1 </td>
                <td> 0 </td>
                <td> 1</td>
            </tr>
            <!--荷蘭-->
            <tr style="background:#FBFBFB">
                <td style="text-align:left">
                    <div>
                        <table><tr><td ><span>
                            <img alt="Netherlands" src="./picture/netherlands.png" width="25" height="20" /></span></td><td >
                            荷蘭</td></tr>
                        </table>
                    </div> 
                </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 2 </td>
                <td> 2</td>
            </tr>
        </table>
    </div>           
    <div style="margin-left:11%;margin-top:10px">
        <tr >
            <td nowrap="NOWRAP">✎備註：統計至2023年，前四名為主。</td>
        </tr>
        
    </div>
    <!--特別規定-->
    
    <h4 id="four" style="margin-top:4%;"> <span style="margin-left:11%;" >特別規定</span></h4>
    <div style="margin-left:11%;margin-right:11%;border-top:solid 2px gray;">    
        <ul><li style="margin-top:3%"><b>延長賽規定：</b>
            </li></ul>
            <ol><li>2006年第一屆分組預賽與八強賽最多延長至14局，若未分勝負，則以和局論。
            </li><li>2006年第一屆在準決賽以後，視情況決定是否保留比賽到隔天再戰。
            </li><li>2006年第一屆平手收場時，雙方勝負各獲0.5場，並以此計算勝率。
            </li></ol>
            <ul><li><b>延賽規定：</b>
            </li></ul>
            <ol><li>若因為天候不佳，比賽未滿五局，則保留比賽至隔天再戰。
            </li><li>若比賽滿五局則比賽成立，但比賽結果若影響晉級，原則上保留比賽至隔天。
            </li></ol>
            <ul><li><b>投球數限制：</b>
            </li></ul>
            <ol><li>2006年第一屆分組預賽時，每位投手每場最多投65球。2009年第二屆分組預賽時，改為每位投手每場最多投70球。
            </li><li>2006年第一屆八強賽及準決賽時，每位投手每場最多投80球。2009年第二屆八強賽時，改為每位投手每場最多投85球。
            </li><li>2006年第一屆決賽時，每位投手每場最多投95球。2009年第二屆準決賽或決賽中時，改為每位投手每場最多投100球。
            </li><li>若投手達到投球數限制時，可投到該面對打席投球任務結束為止再行退場。
            </li></ol>
            <ul><li><b>隔場限制：</b>
            </li></ul>
            <ol><li>單場投球數超過50球，必須休息四天。
            </li><li>單場投球數在30至50球之間，必須休息一天。
            </li><li>連續兩天投球數在30球以內，必須休息一天。
            </li><li>2009第二屆賽事，在準決賽(Semifinal)中投球數達到或超過30球的投手，在決賽(Final)中都不得上場投球。
            </li></ol>
            <ul><li><b>提前結束規定：</b>
            </li></ul>
            <ol><li>比賽進行達五局以上，雙方差距達15分，比賽提前結束。
            </li><li>比賽進行達七局以上，雙方差距達10分，比賽提前結束。
            </li></ol>
    </div>
   



  



<!--footer-->
<footer class="footer">
    <p style="font-weight:bold;
        text-align:center;">僅練習使用，非商業用途</p>

</footer>
   
  </body>
</html>
    
    