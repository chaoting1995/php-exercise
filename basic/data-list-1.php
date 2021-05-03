<?php
// 後端，從DB拿資料
$page_title = "資料列表";
// 透過「$pdo」連線資料庫
require __DIR__ . '/parts/__connect_db.php';
// 透過「->query("SQL語法")」撈出資料(PDO Statement)
$stmt = $pdo->query('SELECT * FROM `address_book` LIMIT 5');
// 透過「->fetchAll()」將資料轉成PHP關聯式陣列(也決定要撈多少資料)
$rows = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/parts/__html_head.php'; ?>

<body>
    <?php include __DIR__ . '/parts/__navbar.php'; ?>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">姓名</th>
                    <th scope="col">Email</th>
                    <th scope="col">手機</th>
                    <th scope="col">生日</th>
                    <th scope="col">地址</th>
                    <th scope="col">建立時間</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $r) : ?>
                    <!-- `sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at` -->
                    <tr>
                        <td><?= $r['sid'] ?></td>
                        <td><?= $r['name'] ?></td>
                        <td><?= $r['email'] ?></td>
                        <td><?= $r['email'] ?></td>
                        <td><?= $r['mobile'] ?></td>
                        <td><?= $r['birthday'] ?></td>
                        <td><?= $r['address'] ?></td>
                        <td><?= $r['created_at'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php include __DIR__ . '/parts/__scripts.php'; ?>
    <?php include __DIR__ . '/parts/__html_foot.php'; ?>
</body>

</html>