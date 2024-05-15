<?php

$host = 'localhost';
$port = 3306;
$dbName = 'shopapp';
$username = 'root';
$password = '';

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {

    $conn = new PDO($dsn, $username, $password);

    //Set PDO để throw Error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // echo "success connect";

} catch (PDOException $e) {
    throw new Error("Connect thất bại: {$e->getMessage()}");
}