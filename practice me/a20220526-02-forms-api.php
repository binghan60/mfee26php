<?php

$output = [
    'postData' => $_POST,
];

echo json_encode($output, JSON_UNESCAPED_UNICODE);
