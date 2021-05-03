<?php

require __DIR__ . '/parts/__connect_db.php';

//用「__connect__DB.php」內代表連線的變數$pdo，去資料庫拿資料
$stmt = $pdo->query('SELECT * FROM `address_book` WHERE 1');
echo json_encode($stmt->fetchAll(), JSON_UNESCAPED_UNICODE);
