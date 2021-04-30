<?php

//簡單除錯，intval()，整數化
$a = intval($_GET['a']) ?? 0;
$b = intval($_GET['b']) ?? 0;
// $c = intval($_GET['c']) ?? 0;
// $d = intval($_GET['d']) ?? 0;
// $e = intval($_GET['e']) ?? 0;
// $f = intval($_GET['f']) ?? 0;
// $g = intval($_GET['g']) ?? 0;
// $h = intval($_GET['h']) ?? 0;
// $i = intval($_GET['i']) ?? 0;

// $a = isset($_GET['a']) ? intval($_GET['a']) : 0;
// $b = isset($_GET['b']) ? intval($_GET['b']) : 0;

// 輸出Json格式的資料
printf('{"answer":%s}', $a + $b);
// 參數一：參數的模板
// 參數二：第一個洞%s
// f即format格式
// 用%s挖一個洞，s表示字串
// 用?a=10&b=5測試
// printf('{"answer":%s} %s', $a + $b, $a - $b);

// 不用printf()，會看起來很亂
// echo '{"answer":'. ($a+$b). '}'; 