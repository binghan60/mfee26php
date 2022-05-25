<?php require __DIR__ . '/parts/connect_db.php';
$perPage = 5;
//每一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$sql = sprintf("SELECT * FROM address_book LIMIT %s ,%s", ($page - 1) * $perPage, $perPage);

$rows = $pdo->query($sql)->fetchAll();
?>


<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>

<div class="container">
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">姓名</th>
                <th scope="col">手機</th>
                <th scope="col">電話</th>
                <th scope="col">生日</th>
                <th scope="col">地址</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $r) : ?>
                <tr>
                    <td><?= $r["sid"] ?></td>
                    <td><?= $r["name"] ?></td>
                    <td><?= $r["mobile"] ?></td>
                    <td><?= $r["email"] ?></td>
                    <td><?= $r["birthday"] ?></td>
                    <td><?= $r["address"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>

<?php include __DIR__ . '/parts/scripts.php' ?>
<?php include __DIR__ . '/parts/html-foot.php' ?>