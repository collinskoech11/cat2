<?php session_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', '6470users');
$conn=mysqli_connect (DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE)
or die ('I cannot connect to the database.');
 ?>