$dbusername = trim(file_get_contents('dbusername.txt'));
$dbhost = trim(file_get_contents("dbhost.txt"));
$dbpassword = trim(file_get_contents("dbpassword.txt"));

echo $dbpassword;
echo $dbusername;
echo $dbhost;
