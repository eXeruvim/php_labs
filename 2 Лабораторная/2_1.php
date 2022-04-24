<?php

function print_array($array){
	foreach($array as $value)
		echo "[" .$value ."]";
	echo "\n";
}

echo "Неотсортированный массив: \n";
$array = array(1, 9, 2, 8, 3, 7, 4, 6, 5, 0);
print_array($array);

echo "Отсортированный массив по возрастанию: \n";
sort($array);
print_array($array);

echo "Отсортированный массив по убыванию: \n";
rsort($array);
print_array($array);

?>