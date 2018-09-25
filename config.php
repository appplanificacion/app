
<?php
header( 'Content-Type: text/html;charset=utf-8' );
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'db_appplanificacion');
$db = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);
//header("Access-Control-Allow-Origin: *");
$connect = mysqli_connect("localhost", "root", "", "db_appplanificacion")or die ("could not connect database");    

?>