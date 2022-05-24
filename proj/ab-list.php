<?php require __DIR__ . '/parts/connect_db.php';

$perPage = 5;

//用戶要看第幾頁
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($page < 1) {
    header('Location: ?page=1');
    exit;
}

$t_sql = "SELECT COUNT(1) FROM address_book";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows / $perPage); //總共有幾頁
// $t_sql = "SELECT COUNT(1) FROM address_book";
// $totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0]; // 總筆數
// $totalPages = ceil($totalRows / $perPage); // 總共有幾頁


$sql = sprintf("SELECT * FROM address_book LIMIT %s, %s", ($page - 1) * $perPage, $perPage);

$rows = $pdo->query($sql)->fetchAll();



?>
<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>

<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    
                    <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
                    </li>
                    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                        <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                    <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>






    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">姓名</th>
                <th scope="col">手機</th>
                <th scope="col">電郵</th>
                <th scope="col">生日</th>
                <th scope="col">地址</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $r) : ?>
                <tr>
                    <td><?= $r['sid'] ?></td>
                    <td><?= $r['name'] ?></td>
                    <td><?= $r['mobile'] ?></td>
                    <td><?= $r['email'] ?></td>
                    <td><?= $r['birthday'] ?></td>
                    <td><?= $r['address'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>


</div>



<?php include __DIR__ . '/parts/scripts.php' ?>
<?php include __DIR__ . '/parts/html-foot.php' ?>