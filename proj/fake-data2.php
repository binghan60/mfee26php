<div>
    <?php require __DIR__ . '/parts/connect_db.php';
    exit; // 關閉功能
    echo microtime(true) . "<br>";

    $lname = ['陳', '林', '李', '吳', '王'];
    $fname = ['小明', '小華', '雅玲', '怡君', '大頭'];


    $sql = "INSERT INTO `address_book`(
    `name`, `email`, `mobile`, 
    `birthday`, `address`, `created_at`
    ) VALUES (
        ?, ?, ?,
        ?, ?, NOW()
    )";

    $stmt = $pdo->prepare($sql);

    for ($i = 0; $i < 1000; $i++) {
        //每次迴圈都把順序弄亂
        shuffle($lname);
        shuffle($fname);
        $ts = rand(strtotime('1980-01-01'), strtotime('1995-12-31'));
        $stmt->execute([
            //弄亂後在抓第一個達成假資料
            $lname[0] . $fname[0],
            "ming{$i}@test.com",
            '0918' . rand(100000, 999999),
            date('Y-m-d', $ts),
            '南投市',
        ]);
    }

    echo microtime(true) . "<br>";
    ?>
</div>