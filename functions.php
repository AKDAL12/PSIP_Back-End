<?php
session_start();
require_once 'db_connect.php'; // Подключаем базу

// Проверка: залогинен ли кто-то вообще
function isLogged() {
    return isset($_SESSION['user_id']);
}

// Проверка на админа
function isAdmin() {
    return isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';
}

// Получение данных текущего пользователя
function getCurrentUser($pdo) {
    if (!isLogged()) return null;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    return $stmt->fetch();
}

// --- Функции корзины ---

// Подсчет количества услуг в корзине
function getCartCount() {
    return isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
}

// Подсчет общей суммы (если нужно для зачета)
function getCartTotal() {
    $total = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $total += $item['price'];
        }
    }
    return $total;
}

// Русский день недели (из ЛР 23, чтобы была в одном месте)
function getRussianDay() {
    $days = ['Mon'=>'понедельник','Tue'=>'вторник','Wed'=>'среда','Thu'=>'четверг','Fri'=>'пятница','Sat'=>'суббота','Sun'=>'воскресенье'];
    return $days[date('D')] ?? date('D');
}