<?php
// Инициализация сессии (Задание №1)
session_start();

// --- Задание №1: Работа с сессиями (Счетчик просмотров) ---
if (!isset($_SESSION['views'])) {
    $_SESSION['views'] = 1;
} else {
    $_SESSION['views']++;
}

// --- Задание №2: Работа с куки (Запоминаем дату последнего визита) ---
$last_visit = "";
if (isset($_COOKIE['last_visit'])) {
    $last_visit = $_COOKIE['last_visit'];
}
// Устанавливаем куку на 30 дней
setcookie('last_visit', date("d.m.Y H:i:s"), time() + (3600 * 24 * 30), "/");

// --- Задание №3: Функция проверки авторизации ---
function isAdmin() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

// Функция дня недели (из ЛР 23)
function getRussianDay() {
    $weekday = date('D');
    $days = ['Mon'=>'понедельник','Tue'=>'вторник','Wed'=>'среда','Thu'=>'четверг','Fri'=>'пятница','Sat'=>'суббота','Sun'=>'воскресенье'];
    return $days[$weekday] ?? $weekday;
}
?>