<?php

if (empty($_POST["name"])) {
    die("姓名必填");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Email格式不對");
}

if (strlen($_POST["password"]) < 8) {
    die("密碼至少需要8字");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("密碼至少要有1個字母");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("密碼至少要有1個數字");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("密碼錯誤");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (name, email, password_hash)
        VALUES (?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}


$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: loginform.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}