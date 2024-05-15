<?php

$dsn = "mysql:host=localhost;port=3306;dbname=quanlysach";

$option = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
];

try {
    $pdo = new PDO($dsn, 'root', '', $option);
    echo "connect thành công";
} catch (PDOException $e) {
    throw new Error("Kết nối thất bại: {$e->getMessage()}");
}
