<?php

function swap($n){
	$tmp = substr($n, 0, 1);
	$n[0] = substr($n, strlen($n)-1, 1);
	$n[strlen($n)-1] = $tmp;
	return $n;
}

$number = readline("Введите трехзначное (или более) число: ");
echo (strlen($number) < 3) ? "Это число содержит меньше 3 знаков" : ((str_starts_with($number, "-")) ? "-" .swap((String) ABS($number)) : swap($number));
?>