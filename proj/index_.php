<?php require __DIR__ . '/parts/connect_db.php' ?>
<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>
<div class="container">
    <h2>Home</h2>
    <p><?= $pdo->quote("Alice's cats") ?></p>
    <!-- quote標引號 用來跳脫SQL裡的單引號 避免SQL injection隱碼攻擊 -->
</div>
<?php include __DIR__ . '/parts/scripts.php' ?>
<?php include __DIR__ . '/parts/html-foot.php' ?>