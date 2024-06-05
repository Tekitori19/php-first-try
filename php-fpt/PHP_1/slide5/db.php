<?php
$str = "mysql:host=localhost;dbname=wd18303_db;port=3306";


try {
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];

    $pdo = new PDO($str, 'root', '', $options);

 
} catch (PDOException $e) {
    throw new Error("Khong the ket noi db ". $e->getMessage());
}