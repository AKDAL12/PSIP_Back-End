<?php
// --- Задание №2: Работа с датой ---
echo "<h3>Задание 2: Даты текущего месяца</h3>";
$month = date('n'); // Номер текущего месяца
$year = date('Y');  // Текущий год
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

echo "Текущий месяц: $month, Год: $year. Даты:<br>";
for ($d = 1; $d <= $daysInMonth; $d++) {
    echo $d . " ";
}
echo "<hr>";


// --- Задание №3: Операторы цикла (while) ---
echo "<h3>Задание 3: Вывод ФИО (Вариант 12)</h3>";
$n = 12; // номер варианта
$iterations = $n + 5; // 17 раз
$i = 1;
$fio = "Максимчик Алексей"; 

while ($i <= $iterations) {
    echo "$i. $fio<br>";
    $i++;
}
echo "<hr>";


// --- Задание №4: Работа с массивами ---
echo "<h3>Задание 4: Массив из 6 элементов</h3>";
$numbers = [5, -10, 15, 20, -3, 8]; // Исходный массив
echo "Исходный массив: " . implode(", ", $numbers) . "<br>";

// Считаем среднее арифметическое
$average = array_sum($numbers) / count($numbers);
echo "Среднее арифметическое: " . round($average, 2) . "<br>";

// Заменяем положительные элементы
$modifiedNumbers = $numbers;
foreach ($modifiedNumbers as &$val) {
    if ($val > 0) {
        $val = $average;
    }
}
unset($val); // разрываем ссылку

echo "Измененный массив: ";
foreach ($modifiedNumbers as $val) {
    echo round($val, 2) . "  ";
}
echo "<hr>";


// --- Задание №5: Работа со строками ---
echo "<h3>Задание 5: Строковые операции</h3>";
$S1 = "ИВАН ИВАНОВ"; 
$S2 = "Программирование спорт чтение"; 

// 1. Длина строки S1 (используем mb_ для кириллицы)
echo "1. Длина строки S1: " . mb_strlen($S1) . " символов<br>";

// 2. Вставить в S2 дополнительные пробелы
$S2_spaced = str_replace(" ", "   ", $S2);
echo "2. S2 с пробелами: " . $S2_spaced . "<br>";

// 3. Заменить имя в S1 на "Андрей"
$S1_replaced = str_replace($S1, "Андрей", $S1); 
// Либо, если нужно заменить часть строки, можно просто: $S1_replaced = "Андрей";
echo "3. Результат замены в S1: " . $S1_replaced . "<hr>";
?>