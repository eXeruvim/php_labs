<?php

$month_number = readline("Номер месяца: ");

if (is_numeric($month_number)){
	echo ($month_number > 0 && $month_number < 3 || $month_number == 12) ? "Зима" : "";
	echo ($month_number > 2 && $month_number < 6) ? "Весна" : "";
	echo ($month_number > 5 && $month_number < 9) ? "Лето" : "";
	echo ($month_number > 8 && $month_number < 12) ? "Осень" : "";
	echo ($month_number < 1 || $month_number > 12) ? "Нет такого месяца)" : "";
}
?>