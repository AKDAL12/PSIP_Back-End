<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №22 - Вариант 12</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        h3 { color: #2c3e50; border-bottom: 1px solid #ccc; }
        .result-box { background: #f9f9f9; border: 1px solid #ddd; padding: 15px; }
    </style>
</head>
<body>
    <h1>Результаты лабораторной работы №22</h1>

    <div class="result-box">
        <?php
        // Задание №1: Использование операторов включения
        require_once 'functions.php'; // Подключаем функции
        include 'tasks.php';          // Подключаем остальные задания

        // Задание №6 (Вывод результата функции здесь)
        echo "<h3>Задание 6: Результат функции</h3>";
        $test_x =1; // Можно подставить любое число, например 1 для проверки ошибки
        $result = calculateFormula($test_x);
        
        echo "При x = $test_x, результат y = $result";
        ?>
    </div>

</body>
</html>