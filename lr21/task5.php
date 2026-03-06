<?php
// Создаем константу NUM_E
define("NUM_E", 2.71828);

// Вывод значения константы
echo "Число e равно " . NUM_E . "<br><br>";

// Работа с типами данных
$num_e1 = NUM_E;
echo "Значение: $num_e1, Тип: " . gettype($num_e1) . "<br>";

// Изменяем тип на string (строковый)
settype($num_e1, "string");
echo "Значение (string): $num_e1, Тип: " . gettype($num_e1) . "<br>";

// Изменяем тип на integer (целый)
settype($num_e1, "integer");
echo "Значение (int): $num_e1, Тип: " . gettype($num_e1) . "<br>";

// Изменяем тип на boolean (булевский)
settype($num_e1, "boolean");
echo "Значение (bool): " . ($num_e1 ? 'true' : 'false') . ", Тип: " . gettype($num_e1) . "<br>";

/* 
   Комментарий: 
   При приведении 2.71828 к integer получается 2.
   При приведении любого ненулевого числа к boolean получается true (1).
*/
?>