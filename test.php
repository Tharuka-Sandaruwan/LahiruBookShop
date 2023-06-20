<?php
define('DB_HOST', 'mysqldbgroup.mysql.database.azure.com');
define('DB_NAME', 'sourcecodester_bookdb');
define('DB_USER', 'master');
define('DB_PASSWORD', 'SuperUs3r4098');

// Attempt to connect to the database
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (!$con) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Select the database
$db_selected = mysqli_select_db($con, DB_NAME);
if (!$db_selected) {
    die("Failed to connect to MySQL: " . mysqli_error($con));
}

echo "Connected to the database successfully!";
?>
