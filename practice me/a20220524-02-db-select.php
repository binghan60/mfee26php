<?php
require __DIR__ . '/connect_db.php';

$stmt = $pdo->query("SELECT * FROM address_book LIMIT 5");

// $row = $stmt->fetch(PDO::FETCH_NUM); 
// 以索引式陣列

while ($r = $stmt->fetch()) {
    echo "{$r['name']} <br>";
}
