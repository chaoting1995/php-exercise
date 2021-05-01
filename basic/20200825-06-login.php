<?php
session_start(); //啟用session

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

// 1.當有POST資料進來:
if (isset($_POST['account'])) {
    // 2.驗證帳號:若帳號正確，丟進來就會有對應的Array，不會是空的("cha"或"ting")
    if (!empty($accounts[$_POST['account']])) {
        // 將當前帳號所對應的Array存入 $a，以便往下驗證
        $a = $accounts[$_POST['account']];
        // 3.驗證密碼:
        if ($_POST['password'] == $a['pw']) {
            //3.當通過驗證，建立一個session資料(存入(帳號、暱稱))
            $_SESSION['user'] = [
                'account' => $_POST['account'],
                'nickname' => $a['nickname']
            ];
        }
    }
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="./../bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">

                <div class="alert alert-info" role="alert">

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form method="post">
                    <!-- account -->
                    <div class="form-group">
                        <label for="account">Email address</label>
                        <input type="text" class="form-control" id="account" name="account">
                    </div>
                    <!-- password -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <!-- button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>



    <script src="./../lib/jquery-3.5.1.min.js"></script>
    <script src="./../bootstrap/js/bootstrap.js"></script>
</body>

</html>