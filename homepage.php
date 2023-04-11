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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
      * {
        box-sizing: border-box;
      }

      body {
      
        font-family: Arial, Helvetica, sans-serif;
      
        
      }
      .topnav{
        display: flex;
        align-items: center;
        width: 100%;
      }

      ul {
        /* 取消ul預設的內縮及樣式 */
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex;
        width: 100%;         
      }

      ul.drop-down-menu {
        border: #ccc 1px solid;
 
        font-family: "Open Sans", Arial, sans-serif;
        font-size: 13px;
        position: relative;
        width: 100%; 
        align-items: center;
      }

      ul.drop-down-menu li {
        position: relative;
        white-space: nowrap;
        width: 100%; 
       
        align-items: center;        
      }

      ul.drop-down-menu > li:last-child {
        border-right: none;
      }

      ul.drop-down-menu > li {
        float: left;

        /* 只有第一層是靠左對齊*/
      }

      ul.drop-down-menu a {
        background-color: #212868;
        color: #fff;
        display: block;
        padding: 0 30px;
        text-decoration: none;
        line-height: 40px;

      }

      ul.drop-down-menu a:hover {
        /* 滑鼠滑入按鈕變色*/
        background: linear-gradient(to bottom, rgba(48, 73, 118, 0.5), rgba(48, 73, 118, 0.7));
        color: #fff;
      }

      ul.drop-down-menu li:hover > a {
        /* 滑鼠移入次選單上層按鈕保持變色*/
        background: linear-gradient(to bottom, rgba(48, 73, 118, 0.5), rgba(48, 73, 118, 0.7));
        color: #fff;
      }

      ul.drop-down-menu ul {
        border: #ccc 1px solid;
        position: absolute;
        z-index: 99;
        left: -1px;
        top: 100%;
        min-width: 180px;
      }

      ul.drop-down-menu ul li {
        border-bottom: #ccc 1px solid;
      }

      ul.drop-down-menu ul li:last-child {
        border-bottom: none;
      }

      ul.drop-down-menu ul ul {
        /*第三層以後的選單出現位置與第二層不同*/
        z-index: 999;
        top: 10px;
        left: 90%;
      }

      ul.drop-down-menu ul {
        /*隱藏次選單*/
        display: none;
      }

      ul.drop-down-menu li:hover > ul {
        /* 滑鼠滑入展開次選單*/
        display: block;
      }
     
      
      .wraper{
        display: flex;
        justify-content: space-around;
      }

      .card{
        width: 280px;
        height: 360px;
        padding: 2rm 1rem;
        background: #fff;
        position: relative;
        display: flex;
        align-items: flex-end;
        box-shadow: 0px 7px 10px rgba(0,0,0,0.5);
        transition: 0.5s ease-in-out;
      }
      .card:hover{
        transform: translateY(20px);
      }

      .card:before{
        content:"";
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(0,176,155,0.5), rgba(150,201,61,1));
        z-index: 2;
        transition: 0.5s all;
        opacity: 0;
      }
      .card:hover:before{
        opacity: 1;
      }

      .card img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
      }
      
      .card .info{
        position: relative;
        z-index: 3;
        color: #fff;
        opacity: 0;
        transform: translateY(30px);
        transition: 0.5s all;
      }
      .card:hover .info{
        opacity: 1;
        transform: translateY(0px);
      }
      .card .info h1{
        margin-top: 8px;
        margin-right: 50px;
    


      }
      .card .info p{
       Letter-spacing: 1px;
       font-size: 15px;
       margin-top: 8px;
      
       margin-left: 50px;
      }
      .card .info .btn{
       text-decoration: none;
       padding: 0.5rem 1rem;
       background: #fff;
       color: #000;
       font-size: 14px;
       font-weight: bold;
       cursor: pointer;
       margin-left: 35px;
       transition: 0.4s ease-in-out;
      }
      .card .info .btn:hover{
        box-shadow: 0px 7px 10px rgba(0,0,0,0.5);

      }
      .title-style{
        font-weight:bold;
        border-left: 10px solid;
        color:#212868;
     }
      .schedule-container{
        display: flex;
        justify-content: space-around;
      }
     .schedule-item{
      
        display: flex;
        flex-direction: column;
        justify-content:flex-start;
       
        




   
      }
      .footer {                               
        width: 100%;
        height: 50px;
        background-color: #212868;
        color: #fff;
        font-size: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
      }

      @media only screen and (max-width: 768px) {
      
      .topnav{
        display: flex;
        align-items: center;
        width: 100%;
      } 

      ul {
        /* 取消ul預設的內縮及樣式 */
        margin: 0;
        padding: 0;
        list-style: none;
        display: block;
        text-align: center;
        width: 414px;
        height: 42px;         
      }
      .card{
        width: 100px;
        height: 200px;
        padding: 2rm 1rem;
        background: #fff;
        position: relative;
        display: flex;
        flex-wrap: wrap;
        box-shadow: 0px 7px 10px rgba(0,0,0,0.5);
        transition: 0.5s ease-in-out;
      }
      .card:hover:before{
        opacity: 1;
      }

      .card img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
      }
      

        }

 
      
    </style>
  </head>
  <body>
    
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <style>
        .carousel-item {
          height: 400px; /* 設置輪播視窗高度 */
          width: 100%; /* 設置輪播視窗寬度 */
          z-index: 1;
        }
        .carousel-item img {
          object-fit: cover; /* 設置圖片的 object-fit 屬性 */
          height: 100%; /* 設置圖片高度 */
          width: 100%; /* 設置圖片寬度 */
          z-index: 1;
        }
      </style>

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
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="next"
      >
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
  
    <div style="margin-top:3%;
                margin-left:3%;">
            <h4 class="title-style">分組名單</h4>
    <div class="wraper">
     <div class="card">
      <img src="./picture/poola.jfif">
      <div class="info">
        <h1>參賽隊伍</h1>
        <p>古巴</p>
        <p>荷蘭</p>
        <p>中華</p>
        <p>義大利</p>
        <p>巴拿馬</p>
        <a href="#" class="btn">了解更多</a>
      </div>
    </div>


    <div class="card">
      <img src="./picture/poolb.jpg">
      <div class="info">
        <h1>參賽隊伍</h1>
        <p>日本</p>
        <p>韓國</p>
        <p>澳洲</p>
        <p>中國</p>
        <p>捷克</p>
        <a href="#" class="btn">了解更多</a>
      </div>
    </div>

    <div class="card">
      <img src="./picture/pool c.png">
      <div class="info">
        <h1>參賽隊伍</h1>
        <p>美國</p>
        <p>英國</p>
        <p>墨西哥</p>
        <p>加拿大</p>
        <p>哥倫比亞</p>
        <a href="#" class="btn">了解更多</a>
      </div>
    </div>

    <div class="card">
      <img src="./picture/pool d.png">
      <div class="info">
        <h1>參賽隊伍</h1>
        <p>以色列</p>
        <p>波多黎各</p>
        <p>委內瑞拉</p>
        <p>多明尼加</p>
        <p>尼加拉瓜</p>
        <a href="#" class="btn">了解更多</a>
      </div>
    </div>
</div>

<!--八強賽賽程表, 熱門影片-->
<div style="margin-top:3%;
                    margin-left:3%;">
            <div class="schedule-container">

                <div>
                    <h4 class="title-style";>八強賽賽程表</h4>
                    <img src="./picture/八強賽賽程表.png"
                        alt="八強賽賽程表"
                        style="weight: 560px;
                                height:315px;"
                                />
                </div>

                <div class="schedule-item"
                style="padding-left:3%";>
                    <h4 class="title-style";>熱門影片</h4>
                    <div>
                        <iframe width="560" 
                            height="315" 
                            src="https://www.youtube.com/embed/yT0_dxTJs48" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; 
                                    autoplay; 
                                    clipboard-write;
                                    encrypted-media; 
                                    gyroscope; 
                                    picture-in-picture; 
                                    web-share" allowfullscreen>
                        </iframe>
                    </div>  
                </div>
            </div>
        </div>

        <!--交通資訊, 周邊購買-->
        <div style="margin-bottom:5%";>
            <div class="schedule-container"
                style="margin-top:3%;
                        margin-left:3%;">
                <div>
                <h4 class="title-style";>
                        交通資訊</h4>
               <a href ="transportation.php">

                <img src="./picture/台中洲際棒球場.jpg"
                    alt="台中洲際棒球場"
                    style="width:560px;
                            height:315px;"
                            >
                 </a>
                </div>
                <div class="schedule-item"
                style="padding-left:3%";>
                <h4 class="title-style";>
                        周邊購買</h4>
                <a href ="shoppingpage1.php">
                 <img src="./picture/tamanna-rumee-eD1RNYzzUxc-unsplash.jpg"
                    alt="周邊購買"
                    style="width:560px;
                            height:315px;"
                            >
                 </a>
                </div>
                
            </div>  
        </div>
    </div>
    
   
    <footer class="footer">

            <p style="font-weight:bold;
                      text-align:center;">僅練習使用，非商業用途</p>
            
        </footer>
  </body>
</html>

