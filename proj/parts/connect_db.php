<?php

$db_host = 'localhost'; // 主機名稱
$db_user = 'binghan'; // 資料庫連線的用戶
$db_pass = 'admin'; // 連線用戶的密碼
$db_name = 'mfee26';  // 資料庫名稱

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8mb4";

$pdo_optopns = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //取資料的方式,會變關聯式陣列,沒有設定會索引式跟關聯式兩種都給
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
];

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, $pdo_optopns);
} catch (PDOException $ex) {
    echo $ex->getMessage();

    // 瘦箭頭相當於JS的.
}
