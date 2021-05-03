<?php session_start();

//登出不需要畫面，主要放:執行清除Session的程式

//清除陣列內指定元素
unset($_SESSION["user"]);
// 清除 所有資料
// session_destroy($_SESSION) 
// 轉向到登入頁
header('Location: 20200825-06-login.php');
