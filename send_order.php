<?php
require_once 'logic.php';
require_once 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    // Если не залогинен — отправляем на вход
    header("Location: login.php?error=auth");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $service_name = $_POST['service_name'];

    $stmt = $pdo->prepare("INSERT INTO orders (user_id, service_name, status) VALUES (?, ?, 'Новый')");
    $stmt->execute([$user_id, $service_name]);

    // Переходим в личный кабинет увидеть заказ
    header("Location: profile.php");
    exit;
}