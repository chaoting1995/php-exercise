<?php
// 連到哪台主機
$db_host = "localhost";
// 連到哪個資料庫
$db_name = "address_book_db_0502";
// phpMyAdmin帳號
$db_user = "chaoting";
// phpMyAdmin帳號
$db_pass = "chaoting";
// 數據源
$dsn = "mysql:host={$db_host};dbname={$db_name}";
// PDO連線設定
$pdo_options = [
    // 出錯的呈現=>無訊息
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // 取資料形式=>關聯式陣列
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // 首次連線，執行什麼SQL=>
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
    //"SET NAMES 'utf8'":即，資料庫進出都用'utf8'
];

//建立用PDO連線的物件，並放入指定的相關參數
$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
