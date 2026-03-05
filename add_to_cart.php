<?php
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['service_name'])) {
    // Создаем массив товара
    $item = [
        'name'  => $_POST['service_name'],
        'price' => (int)$_POST['service_price'],
        'id'    => $_POST['service_id']
    ];

    // Если корзины нет — создаем
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Добавляем товар в сессию
    $_SESSION['cart'][] = $item;

    // Возвращаем пользователя к каталогу
    header("Location: index.php#catalog");
    exit;
}