<?php 
$hostname = "dev-iotedge.rhcloud.com";
$dbuser = "admin4jrDUwT";
$dbpass = "25MPhpqBdZq-";
$dbname = "iotdevices";

$link = new mysqli($hostname, $dbuser, $dbpass, $dbname);
// Check connection 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 

?> 