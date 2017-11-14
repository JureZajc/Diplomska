<?php

$server = "localhost"; //127.0.0.1
$db_username = "root";
$db_pass = "";
$db_name = "diplomska3";
$salt = "067Ćdfj5404%%#dg";

$link = mysqli_connect($server, $db_username, $db_pass, $db_name);
mysqli_query($link, "SET NAMES 'utf8'");
?>