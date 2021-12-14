<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include_once('config.inc.php');

// define('DB_SERVER', 'mysql');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', 'root');
// define('DB_NAME', 'demo');

/* Attempt to connect to MySQL database */
// $link = mysqli_connect($dbusername, $dbusername, $dbpassword, "demo");
$link = mysqli_connect($dbusername, $dbusername, $dbpassword, "demo");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    echo "connected successfully"
}
?>
