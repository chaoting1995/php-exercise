<?php

//用陣列模擬儲存在DB裡的帳密資料
$accounts = [
    "cha" => [
        "pw" => "12345",
        "nickname" => "小兆"
    ],
    "ting" => [
        "pw" => "67890",
        "nickname" => "小廷"
    ],
];

//  json_encode() : JSON字串，轉回PHP物件或陣列
// echo json_encode($accounts);


// 外掛，即不要跳脫中文字
echo json_encode($accounts, JSON_UNESCAPED_UNICODE);
