<?php
//mysql.hostinger.com.br u580842516_root vasco07
header('Content-Type: text/html; charset=utf-8');
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("xxxclusive", $conn);
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
?>