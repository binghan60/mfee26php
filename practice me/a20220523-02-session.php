<?php

if (!isset($_SESSION)) {
    session_start();
}
//如果沒有設定就啟動
// 沒有啟動會變undefine

echo $_SESSION['a'];
