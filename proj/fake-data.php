<?php require __DIR__ . '/parts/connect_db.php';

/*
$sql = "INSERT INTO `address_book`(
    `name`, `email`, `mobile`, 
    `birthday`, `address`, `created_at`
    ) VALUES (
        '李小明', 'ming@test.com', '0918123456',
        '1987-11-23', '南投市', NOW()
    )";
$stmt = $pdo->query($sql);
*/

// 避免 SQL injection (SQL 隱碼攻擊)
$sql = "INSERT INTO `address_book`(
    `name`, `email`, `mobile`, 
    `birthday`, `address`, `created_at`
    ) VALUES (
        ?, ?, ?,
        ?, ?, NOW()
    )";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    "李小明's pen",
    'ming@test.com',
    '0918123456',
    '1987-11-23',
    '南投市',
]);


echo $stmt->rowCount();
