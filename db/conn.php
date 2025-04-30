<?php
// require __DIR__ . '../vendor/autoload.php';

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// Access variables
$dbHost = "localhost";
$dbName = "porotifolio";
$dbUser = "root";
$dbPass = "";


//create connection 

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
  die('db connectio failed'. mysqli_connect_error());
}