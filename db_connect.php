<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '12345678'; 
$db   = 'standart_express';
$port = '3306'; 

try {
    // Подключаемся напрямую к созданной в Workbench базе
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);
    
    // Настройки обработки ошибок
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Если связи нет, выводим ошибку
    die("Ошибка связи с базой данных Workbench: " . $e->getMessage());
}
?>