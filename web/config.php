<?php

session_start();

$db_host = "65.2.182.236";
$db_user = "php";
$db_pass = "password";
$db_name = "php";

$mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);
$mysql->set_charset("utf8");

?>
