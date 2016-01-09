<?php

//資料庫連線設定
$db_host="localhost";
$db_username="final";
$db_password="3fueeSMfZqmBcWFW";

//連線伺服器
$conn = @mysql_connect($db_host,$db_username,$db_password);
if(!$conn) die("資料庫連線失敗");

//設定字元集與連線校對
mysql_query("SET NAMES 'utf8'");

//連線資料庫
$seldb= @mysql_select_db("final");
if(!$seldb) die("資料庫連線失敗");



?>
