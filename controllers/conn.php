<?php

include "../envloader.php";
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if(!$conn){
    die('db cnnection failed'. mysqli_connect_error());
}
