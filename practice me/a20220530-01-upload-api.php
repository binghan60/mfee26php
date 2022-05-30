<?php
header('Content-Type: application/json');

$folder = __DIR__ . '/uploaded/';

// 把上傳的檔案搬移到指定的位置
move_uploaded_file($_FILES['myfile']['tmp_name'], $folder . $_FILES['myfile']['name']);

echo json_encode($_FILES);

// 單一檔案
// $_FILES['myfile']
/*
{
    "myfile": {
        "name": "v_149255855_m_601_m1_220_124.jpg",
        "type": "image/jpeg",
        "tmp_name": "C:\\xampp\\tmp\\phpFB9.tmp",
        "error": 0,
        "size": 5576
    }
}
*/

//
/*
{
    "myfile": {
        "name": [
            "v_147904924_m_601_220_124.jpg",
            "v_148103914_m_601_m2_220_124.jpg",
            "v_148111956_m_601_m1_220_124.jpg"
        ],
        "type": [
            "image/jpeg",
            "image/jpeg",
            "image/jpeg"
        ],
        "tmp_name": [
            "C:\\xampp\\tmp\\php4272.tmp",
            "C:\\xampp\\tmp\\php4273.tmp",
            "C:\\xampp\\tmp\\php4274.tmp"
        ],
        "error": [
            0,
            0,
            0
        ],
        "size": [
            5815,
            7780,
            6892
        ]
    }
}
*/
