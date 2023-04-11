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
        <!--下拉選單-->
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
                    <a href="competitiondateC.php#">C組</a>
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
    
    <!--賽事簡介-->
    <div  style="margin-top:4%;margin-left:11%;">
        <h5 > <span style="background:#003060;
                           color:white;
                           border-radius:10px 10px 0 0;
                           padding:10px ">賽事簡介</span></h5>
    </div>
    <div style="margin:auto;
                border-top:solid 1px;
                width:80%;
                height:auto">
        <p style="padding:15px">　　<strong>世界棒球經典賽</strong>（World Baseball Classic，簡稱WBC）是由美國職棒大聯盟與世界棒壘球總會共同策劃的國際棒球大賽，
        首屆比賽於2006年3月3日在日本進行第一場比賽，由十六個受邀國家的代表隊分四地進行總共三十九場的賽事，為國際棒壇史上最大的棒球盛事。
        </p>
    </div>
    <!--賽事緣起-->
    <div  style="margin-top:2%;margin-left:11%;">
        <h5 > <span style="background:#003060;
                           color:white;
                           border-radius:10px 10px 0 0;
                           padding:10px ">賽事緣起</span></h5>
    </div>
    <div style="margin:auto;
                border-top:solid 1px;
                width:80%;
                height:auto">
        <p style="padding:15px">　　由於近年來，國際奧林匹克委員會（IOC）對於日漸增多的夏季奧運會比賽項目，
            產生「奧運瘦身」的提議，於是出現了削減某些運動項目的構想。
            因此，2012年在倫敦舉行的第三十屆奧運會，棒球和壘球成為了被削減的對象。<br />
        　　雖然表面上的理由是「真正發展棒球運動的國家太少」
        ，但實際上，是因為日益商業化的奧運會，對於奧運棒球賽的收視率不夠滿意，影響廣告主對於奧運會提供商業贊助的意願；
        再加上執世界棒壇牛耳的美國，對於奧運棒球賽漠不關心，不願正式開放現役大聯盟球員參加奧運會，無法讓奧運棒球賽成為世界上水準最高的棒球賽；
        而且，棒球比賽所使用的場地建造成本也不低，往往奧運主辦國必須興建新的棒球場，
        提供奧運棒球比賽使用，奧運結束之後又常常棄置不用，造成奧運主辦國的困擾與財政負擔；
        因此，國際奧林匹克委員會刪除奧運棒球項目，除了是對美國職棒的報復性行動之外，也是國際奧會開源節流的措施之一。<br />
        　　棒球於2005年7月8日被國際奧會正式排除在奧運比賽之外以後，各國對於棒球日後在國際間的發展頗感憂心。
        但由於近年來，進軍大聯盟的外國籍選手逐年增多，為了讓棒球的發展更加國際化，於是2005年7月11日，邀請各國棒球界代表齊集美國底特律，
        與世界棒壘球總會(時為國際棒球總會)共同策劃新的國際棒球大賽。本次參與會議的各國代表，
        除了中華方面由洪瑞河代表與會之外，還有來自澳洲、加拿大、中國、多明尼加、義大利、韓國、墨西哥、荷蘭、巴拿馬、委內瑞拉、波多黎各、南非等各國代表，共同參與本次會議；
        日本方面由於當時尚未與球員工會完成協商，因此沒有派代表出席；而古巴方面的代表，也因故未出席本次會議。
            本次會議經過各國廣泛討論之後，也因而確定了這項國際賽事的舉行，並決定將在2006年三月間舉辦，而這項國際賽事的名稱，就定名為「世界棒球經典賽」（World Baseball Classic）。
    </div> 
    <!--名稱由來-->
    <div  style="margin-top:2%;margin-left:11%;">
        <h5 > <span style="background:#003060;
                           color:white;
                           border-radius:10px 10px 0 0;
                           padding:10px ">名稱由來</span></h5>
    </div>
    <div style="margin:auto;
                border-top:solid 1px;
                width:80%;
                height:auto">
        <p style="padding:15px">　　本項賽事的名稱由來，是為了與兩年舉行一屆的世界盃棒球錦標賽（Baseball World Cup）有所區隔，避免造成混淆，
            於是大聯盟參酌明星賽（All Star Game）又被稱為「仲夏經典」（Mid Summer Classic）、世界大賽（World Series）
            又被稱為「秋季經典」（Fall Classic）的模式，因此將這項國際賽事的名稱定名為「世界棒球經典賽」（World Baseball Classic）。
            原先曾經有人提議使用「超級世界盃」（Super World Cup）的名稱，但由於名稱與世界盃棒球錦標賽的味道，所以並未獲得採行。
        </p>
    </div>
    <!--賽事概要-->
    <div  style="margin-top:2%;margin-left:11%;">
        <h5 > <span style="background:#003060;
                           color:white;
                           border-radius:10px 10px 0 0;
                           padding:10px ">賽事概要</span></h5>
    </div>
    <div style="margin:auto;
                border-top:solid 1px;
                width:80%;
                height:auto">
        <p style="padding:15px">　　「世界棒球經典賽」（World Baseball Classic）是由美國職棒大聯盟與世界棒壘球總會(時為國際棒球總會)共同策劃的國際棒球賽事，
            於2006年三月進行第一屆的比賽，預定於2009年舉行第二屆，往後每隔四年舉行一屆比賽。<br />
        　　於2006年舉行的首屆比賽，共有十六個國家參賽。由參賽的十六個國家代表隊分成四個組別，在四地分別進行第一輪的地區預賽，
        其中一組在日本東京、一組在波多黎各、另外兩組分別在美國的亞利桑那州與佛羅里達州進行比賽，各組的前兩名進入第二輪的八強複賽。
        亞洲區的分組預賽有中華、日本、南韓、中國參賽，比賽在2006年3月3日至5日進行；在波多黎各的分組預賽則是波多黎各、古巴、巴拿馬、荷蘭參賽；
        在亞利桑那州的分組預賽有美國、加拿大、墨西哥、南非參賽；在佛羅里達州的分組預賽則有多明尼加、委內瑞拉、澳洲、義大利參賽。
        以上三組的比賽皆預定在2006年3月7日至10日進行。<br />
        　　第二輪的八強複賽分別在美國加州安那罕與波多黎各首府聖胡安舉行，晉級的八個球隊再分成兩個組別，進行單循環比賽，
        八強複賽於2006年3月12日至16日進行，各組的前兩名進入第三輪的決賽。四支晉級準決賽的球隊，各進行一場淘汰賽，
        比賽在2006年3月18日進行，獲勝球隊即可獲得參加冠軍決賽的資格。而冠軍決賽在2006年3月20日進行一場比賽，決定首屆比賽冠軍誰屬。<br />
        　　每支參賽球隊的球員名單設定在三十人，其中各隊投手至少要有十三人、捕手至少要有三人以上；
        大聯盟現役球員也可以參賽，大聯盟球隊每隊最多可以支援九名球員參加世界棒球經典賽的各國代表隊，
        因此最多可能有兩百七十位大聯盟現役球員參賽。當然，大聯盟個別球員的參賽與否，
        仍需得到大聯盟球團資方的同意。
        另外，美國職棒大聯盟也要求各球團不得影響球員參加該國國家隊的意願、而球員也有自主選擇是否加入國家隊的權利。
        為了比賽的公平性，世界棒球經典賽也會採取史上最嚴格的禁藥措施。<br />
        　　本項賽事自第3屆起增加「資格賽」階段，於會內賽的前一年舉行。自第5屆起會內賽賽制亦有所變動，由先前的「預賽、複賽、決賽」階段，
        變更為效法世界盃足球賽的「分組賽、淘汰賽」階段。
        </p>
    </div>
        <footer class="footer">

            <p style="font-weight:bold;
                      text-align:center;">僅練習使用，非商業用途</p>
            
        </footer>
   
  
    
    </body>
</html>