<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // 分號結尾，否則會出錯！


    define("MY_CONST", 123);
    // 常數，全域都可取用
    echo MY_CONST;
    // echo 輸出到頁面上
    print MY_CONST;
    // print 也能輸出到頁面上，但是較少使用(因為多打一字)

    $a = 123;
    // 變數
    echo $a;
    // 輸出變數
    echo empty($b) ? "empty" : "not empty";
    // empty()，檢查是否為空，輸出為布林值

    echo empty($b);  //true 輸出1
    echo !empty($b);  //false 輸出空字串
    // 輸出布林值


    // 省略寫法：點符號（.）做字串串接
    echo $a . '<br>';
    echo $a . '<br>';;


    // 雙引號和單引號：匯出效果不同
    // 單引號，直接匯出內容
    echo '$a<br>';  //顯示：$a
    // 雙引號，匯出變數所存內容 
    echo "$a<br>";  //顯示：123


    // 跳脫表示法：雙引號和單引號，不太⼀樣
    // 雙引號()：(\n)、(\")、(\')、(\\)、(\$)
    echo "\$a<br>"; //顯示：$a
    // 單引號()：只有兩種有效果，表達單引號(\')、表達倒斜線(\\)

    echo  '\n\" \'\\<br>123';

    // 三元運算子變形用法(php7以後語法)
    // echo $c = "bill";
    echo $c ?? 'peter<br>';
    // 如果變數c有設定，用原設定;沒設定，用??後面代替

    // 變數+字串
    $name = "Chaoting";
    // echo "Hello,$name123"; 
    //Notice: Undefined variable: name123 
    echo "Hello,$name 123<br>";  // 空格 
    echo "Hello,${name}123<br>"; // 包name
    echo "Hello,{$name}123<br>"; // 包$name 都可以

    // 字串串接
    echo $name . "<br>"; // 包$name 都可以

    // 字串相加，會被自動轉型成數字
    echo "123" + "10"; // 133，字串會被自動轉型
    // echo "123" + "a" // 若不能轉換，會跳 Warning

    // ．判斷拿到的值是什麼類型：var_dump()
    // php運算子優先運算權：指定運算子>文字的邏輯運算子(and)

    ?>
    <?php

    phpinfo();

    ?>

</body>

</html>