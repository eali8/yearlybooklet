
<?php

define('_HOST_NAME','localhost');
define('_DATABASE_NAME','userlogin');
define('_DATABASE_USER_NAME','root');
define('_DATABASE_PASSWORD','root');

$host = "localhost"; 
$user = "root"; 
$pass = "root"; 
$db = "classlist"; 
$table = "students"; 

$MySQLiconn = new MySQLi('localhost', 'root', 'root', 'classlist');

if($MySQLiconn->connect_errno)
     {
       die("ERROR : -> ".$MySQLiconn->connect_error);
     }
?>