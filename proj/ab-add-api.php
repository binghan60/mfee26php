<?php
require __DIR__ . '/parts/connect_db.php';


$output = [
    'succes' => false,
    'postData' => $_POST
];

echo json_encode($output, JSON_UNESCAPED_UNICODE);
