<?php

$array = array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
$sum = 0;

echo "Все элементы массива: \n";
for ($i = 0; $i < count($array); $i++){
	echo "[".$array[$i]."]";
}

for ($i = 0; $i < count($array); $i++){
	$sum += $array[$i];
}
echo "\nСумма всех элементов массива = {$sum}";

?>
