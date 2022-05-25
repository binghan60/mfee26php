<?php
require __DIR__ . '/connect_db.php';
//require_once
//include_once
//只包一次

$stmt = $pdo->query("SELECT * FROM address_book LIMIT 5");


while ($r = $stmt->fetch()) {
    echo "{$r['name']} <br>";
}
//迴圈跑5次
