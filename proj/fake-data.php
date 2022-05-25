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
//不要用query避免攻擊
// 避免 SQL injection (SQL 隱碼攻擊)
$sql = "INSERT INTO `address_book`(
    `name`, `email`, `mobile`, 
    `birthday`, `address`, `created_at`
    ) VALUES (
        ?, ?, ?,
        ?, ?, NOW()
    )";
//準備
$stmt = $pdo->prepare($sql);
//執行
$stmt->execute([
    "李小明's pen",
    'ming@test.com',
    '0918123456',
    '1987-11-23',
    '南投市',
]);

//印出新增的筆數
echo $stmt->rowCount();
