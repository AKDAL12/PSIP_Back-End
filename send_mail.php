<?php
// 1. Стартуем сессию (без пробелов перед <?php)
session_start();
ob_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'send_lead') {
    
    // 2. Получаем данные из формы
    $name  = strip_tags(trim($_POST['user_name']));
    $phone = strip_tags(trim($_POST['user_phone']));

    // 3. Формируем текст "письма"
    $to      = "mr9891549@gmail.com";
    $subject = "Заявка: Грузчики (ЛР 25)";
    
    $mail_body = "========== НОВОЕ ПИСЬМО ==========\n";
    $mail_body .= "Дата отправки: " . date("d.m.Y H:i:s") . "\n";
    $mail_body .= "Кому: $to\n";
    $mail_body .= "Тема: $subject\n";
    $mail_body .= "Имя клиента: $name\n";
    $mail_body .= "Телефон: $phone\n";
    $mail_body .= "----------------------------------\n\n";

    $log_file = 'mail_log.txt';
    
    if (file_put_contents($log_file, $mail_body, FILE_APPEND)) {
        // Если запись прошла успешно, считаем, что "почта отправлена"
        $_SESSION['mail_status'] = "success";
    } else {
        $_SESSION['mail_status'] = "error";
    }

    // 4. Возвращаемся на главную
    header("Location: index.php");
    exit;
}
ob_end_flush();
?>