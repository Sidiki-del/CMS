<?php 
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_password'] = '';
$db['db_name'] = 'cms';

foreach ($db as $key => $value)
{
    define($key, $value);
}

$connection = mysqli_connect(db_host, db_user, db_password, db_name);
// if($connection)
// die("Connection failed");
   
// echo "We are connected";
?>