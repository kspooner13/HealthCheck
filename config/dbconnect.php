<?php
$servername = "labtech.acumenit.com";
$username = "kspooner";
$password = "acumen2015";
$dbname = "labtech";

define("DB_HOST", "labtech.acumenit.com");
define("DB_NAME", "labtech");
define("DB_USER", "kspooner");
define("DB_PASS", "acumen2015");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>