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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style1.css" />

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
        ul.drop-down-menu .shopping {
          background-color: #212868;
          color: #fff;
          display: block;
          padding: 0 30px;
          text-decoration: none;
          line-height: 40px;
  
        }
  
        ul.drop-down-menu .shopping:hover {
          /* 滑鼠滑入按鈕變色*/
          background: linear-gradient(to bottom, rgba(48, 73, 118, 0.5), rgba(48, 73, 118, 0.7));
          color: #fff;
        }
  
        ul.drop-down-menu li:hover > .shopping {
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
        .pagination ul{
          display: flex;
          justify-content: center;
          padding: 20px 0 10px 0;


        }
        .pagination a{
          width: 40px;
          height: 40px;
          line-height: 40px;
          padding: 0;
          text-align: center;
          text-decoration: none; /* 去除底線 */
          color: inherit; /* 保留繼承顏色 */
          cursor: pointer; /* 讓游標顯示成手形 */
          font-weight: bold;


        }

        .pagination a.is-active{
          background-color: #9c9c9c; 
          opacity: 0.8;
          border-radius: 100%;
          color: #fff;
          font-weight: bold;

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
                style="width: 30px"
              />
            </a>
          </li>
          <li>
          <div class="shopping">
          <img src="./picture/topnavcart.png" style="width: 35px" />
          <span class="quantity">0</span>
           </div>
          </li>
          <li><?php if (isset($user)): ?>
          
          <a href="#"style="color:yellow;"><?= htmlspecialchars($user["name"]) ?></a>
          
          <?php else: ?>
          <a href="#"style="color:yellow;">未登入</a>
        
          
  
  
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
     <div class="container">
      <header>
        <h1>新品上市</h1>
      </header>

        <div class="list">
 
      </div>
      <div class="productcard">
        <h1>購物車</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
           <div class="total">0</div>
           <div class="closeShopping">關閉</div>
        </div>
      </div>
      <div class="pagination">
      <ul>
        <a href=""><li><</li></a>
        <a class="is-active" href="shoppingpage1.php"><li>1</li></a>
        <a href=""><li>></li></a>
      </ul>
    </div>
    </div>
    <script src="./js/product.js"></script> 
  

    <footer class="footer">

            <p style="font-weight:bold;
                      text-align:center;">僅練習使用，非商業用途</p>
            
        </footer>
    </div>
   
  </body>
</html>