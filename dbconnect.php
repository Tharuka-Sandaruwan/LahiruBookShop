<?php 
define('DB_HOST', 'mysqldbgroup.mysql.database.azure.com'); 
define('DB_NAME', 'sourcecodester_bookdb'); 
define('DB_USER','master'); 
define('DB_PASSWORD','SuperUs3r4098'); 

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
?>
