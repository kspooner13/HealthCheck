<?php
$servername = "labtech.acumenit.com";
$username = "kspooner";
$password = "acumen2015";
$dbname = "labtech";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
mysql_connect($servername, $username, $password) or die(mysql_error());
mysql_select_db('labtech') or die(mysql_error());
?>