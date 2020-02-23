<?php 
$server = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'cms';

$connection = mysqli_connect($server,$userName, $password, $databaseName);

if(!$connection){
	die('Database connection failed.');
}
?>  