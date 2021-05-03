<?php
//這隻檔案是查看session用
session_start();

echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE);
