<?php
$hash = '$2y$10$CO17oeLxa/TU//OvPObOG.SGA9BxhcZo3WUasHfk4Dma6ukjRqEAe';

$password = isset($_GET['p']) ? $_GET['p'] : '';

if (password_verify($password, $hash)) {
    echo '正確';
} else {
    echo '錯誤的密碼';
}
