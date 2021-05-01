<?php
session_start();
?>
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

    if (isset($_SESSION["myVar"])) {
        //有設定就加一
        $_SESSION["myVar"]++;
    } else {
        //沒設定就一
        $_SESSION["myVar"] = 1;
    }
    echo $_SESSION["myVar"];

    ?>

</body>

</html>