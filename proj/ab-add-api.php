<?php
require __DIR__ . '/parts/connect_db.php';

// 傳給前端的東西用陣列包起來
$output = [
    'success' => false,
    'postData' => $_POST,
    'code' => 0,
    'error' => ''
];

//後端檢查
if (empty($_POST['name'])) {
    $output['error'] = '沒有姓名資料';
    $output['code'] = 400;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}



$sql = "INSERT INTO `address_book`(
    `name`, `email`, `mobile`, `birthday`, `address`, `created_at`) VALUES (
    ?,?,?,
    ?,?, NOW()
)";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    empty($_POST['birthday']) ? NULL : $_POST['birthday'],
    $_POST['address'],
]);


if ($stmt->rowCount() == 1) {
    $output['success'] = true;
    // 最近新增資料的primarykey
    $output['lastInsertId'] = $pdo->lastInsertId();
} else {
    $output['error'] = '資料無法新增';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
