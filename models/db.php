<?php

//create connection to database

require_once __DIR__ . '/../envloader.php';

$conn = mysqli_connect($dbHost , $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}