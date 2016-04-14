<?php 
$hostname = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "iotdevices";

$link = new mysqli($hostname, $dbuser, $dbpass, $dbname);
// Check connection 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 

?> 