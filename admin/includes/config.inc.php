<?php 

$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'gorblog';

$link = mysqli_connect($host, $user, $password, $dbName) or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");