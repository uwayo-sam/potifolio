<?php

require_once(__DIR__."/vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// database credentials

$dbName = $_ENV["DB_NAME"];
$dbUser = $_ENV["DB_USER"];
$dbPass = $_ENV["DB_PASSWORD"];
$dbHost = $_ENV["DB_HOST"];


// appwrite credentials

$appwriteSecretKey = $_ENV["APPWRITE_SECRETY_KEY"];
$appwriteProjectId = $_ENV["APPWRITE_PROJECT_ID"];
$appwriteBucketId = $_ENV["APPWRITE_BUCKET_ID"];
$appwriteEndPoint = $_ENV["APPWRITE_ENDPOINT"];



