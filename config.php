<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

// define('DB_SERVER', 'mysql');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', 'root');
// define('DB_NAME', 'demo');

/* Attempt to connect to MySQL database */
// $link = mysqli_connect($dbusername, $dbusername, $dbpassword, "demo");
$dbusername = fread(fopen("php-mysql-app/dbusername.txt", "r"),filesize("php-mysql-app/dbusername.txt"));
$dbhost = fread(fopen("php-mysql-app/dbhost.txt", "r"),filesize("php-mysql-app/dbhost.txt"));
$dbpassword = fread(fopen("php-mysql-app/dbpassword.txt", "r"),filesize("php-mysql-app/dbpassword.txt"));

echo $dbpassword;
echo $dbusername;
echo $dbhost;

$link = mysqli_connect($dbhost, $dbusername, $dbpassword, "demo");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    echo "connected successfully"
}
?>
