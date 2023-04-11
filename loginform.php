<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: homepage.php");
            exit;
        }
    }
    
    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <title>登入</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap");

      * {
        font-family: "Poppins", sans-serif;
      }
      .wrapper {
        background-image: url("picture/jimmy-conover-SEQ2VI0KI6A-unsplash.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
        padding: 0 20px 0 20px;
      }
      .main {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }
      
      .row {
        width: 900px;
        height: 550px;
        border-radius: 10px;
        background: #fff;
        box-shadow: 5px 5px 10px 1px rgba(0, 0, 0, 0.2);
      }

      .side-image {
        background-image: url("picture/mike-bowman-xKShyIiTNJk-unsplash.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
        border-radius: 10px 0 0 10px;
      }
      img {
        width: 200px;
        position: absolute;
        top: 30px;
        left: 30px;
      }
      .text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      .text p {
        color: #fff;
        font-size: 18px;
      }
      i {
        font-weight: 400;
        font-size: 15px;
      }
      .right {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
      }
      .input-box {
        width: 330px;
        box-sizing: border-box;
       
      }

      .input-box header {
        font-weight: 700;
        font-size: 40px;
        text-align: center;
        margin-bottom: 20px;
        position: absolute;
        right: 30%;
        bottom: 70%;
       
 
      }
      .input-field {
        display: flex;
        flex-direction: column;
        position: relative;
        padding: 0 10px 0 10px;
      }
      .input {
        height: 45px;
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        outline: none;
        margin-bottom: 20px;
        color: #40414a;
      }
      .input-box .input-field label {
        position: absolute;
        top: 10px;
        left: 10px;
        pointer-events: none;
        transition: 0.5s;
      }
      .input-field .input:focus ~ label {
        top: -10px;
        font-size: 13px;
      }
      .input-field .input:valid ~ label {
        top: -10px;
        font-size: 13px;
        color: #5d5076;
      }
      .input-field .input:focus,
      .input-field .input:valid {
        border-bottom: 1px solid #743ae1;
      }
      .submit {
        border: none;
        outline: none;
        height: 45px;
        background: #ececec;
        border-radius: 5px;
        transition: 0.4s;
      }
      .submit:hover {
        background: rgba(37, 95, 156, 0.9);
        color: #fff;
      }
      
      input[type="email"] {
        border: 1px solid #ccc; 
        border-radius: 5px; 
        padding: 5px; 
        font-size: 16px; 
        width: 200px; 
        box-sizing: border-box; 
      }

      input[type="password"] {
        border: 1px solid #ccc; 
        border-radius: 5px; 
        padding: 5px; 
        font-size: 16px; 
        width: 200px; 
        box-sizing: border-box; 
      }

      .signin {
        position: absolute;
        text-align: left;
        font-size: small;
        margin-top: 10px;

      }
      span a {
        text-decoration: none;
        font-weight: 700;
        color: #000;
        transition: 0.5s;
      }
      span a:hover {
        text-decoration: underline;
        color: #000;
      }
      button {
        position: absolute;
        top:68%;
        width: 160px;
        height: 30px;
        background-color: white;
        border-style:inset;
        border-color: #49B8A8;
        font-size: 15px;
        font-weight: bold;
        margin-top: 10px;
        transition: all 0.5s;

      }
      button:hover {
        background-color: #088A85; /* Green */
        color: white;
          border-radius: 10px;
      }
      button {
        position: absolute;
        top:68%;
        width: 160px;
        height: 30px;
        background-color: white;
        margin-top: 10px;
        border-style:inset;
        border-color: #49B8A8;
        font-size: 15px;
        font-weight: bold;
        transition: all 0.5s;
      }
      .alert {
          position: absolute;
          width: 150px;
          height: 60px;
          text-align: center;
          font-weight: bold;
          padding: 20px;
          background-color: rgba(255, 0, 0, 0.8);/* Red */
          color: white;
          
          margin-top: 80px;
         
      }

      /* The close button */
      .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
      }

      /* When moving the mouse over the close button */
      .closebtn:hover {
      color: black;
      }
    
      @media only screen and (max-width: 768px) {
        .side-image {
          border-radius: 10px 10px 0 0;
        }
        img {
          width: 80px;
          position: absolute;
          top: 5px;
          left: 80%;
        }
        .text {
          position: absolute;
          text-align: center;
        }
        .text p,
        i {
          font-size: 17px;
         

        }
        .row {
          max-width: 420px;
          width: 100%;
        }
        button {
        position: absolute;
        top:85%;
        left: 50%;
        transform: translate(-50%, -85%);
        width: 160px;
        height: 30px;
        background-color: white;
        margin-top: 10px;
        border-style:inset;
        border-color: #49B8A8;
        font-size: 15px;
        font-weight: bold;
        transition: all 0.5s;
      }
    }
    </style>
  </head>
  <body>
   

    <div class="wrapper">
      <div class="container main">
        <div class="row">
          <div class="col-md-6 side-image">
            <!-------Image-------->
            <img
              src="picture/_world_baseball_classic_logo_primary_2023_sportslogosnet-6650.png"
              alt="image break"
            />
            <div class="text"></div>
          </div>
         
          <div class="col-md-6 right">
            <div class="input-box">
              <header>會員登入</header>
                <form method="post">
                <label for="email">電子信箱:</label><br>
                <input type="email" name="email" id="email" 
                        value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"><br>    

                <label for="password">密碼:</label><br>
                <input type="password" name="password" id="password"><br>     

                <button>登入</button>
             <div class="signin">
                <span>尚未加入會員? <a href="signup.html">註冊</a></span>
             </div>
                </form>             
              </div>
              <?php if ($is_invalid): ?>
              <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <em>密碼錯誤</em>
              
              </div>
              <?php endif; ?>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
