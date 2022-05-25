<?php
require __DIR__ . '/connect_db.php'; //把這個檔案包含進來,相當於整個檔案貼在這裡
// include __DIR__ . '/connect_db.php';
//include功能一樣,比較沒那麼強烈


//方法的多載,過載 overload
//同一方法,參數輸入格式不同有不同效果
//pdo.query執行SQL的語法
$stmt = $pdo->query("SELECT * FROM address_book LIMIT 5");
//LIMIT 1取前1筆
//LIMIT 0,5 第0筆  最多取5筆

// $row = $stmt->fetch(PDO::FETCH_NUM); 
// 以索引式陣列每次都要打,可以在connect直接設定全部

$rows = $stmt->fetchAll(); //取出Recordset所有資料

echo json_encode($rows);
