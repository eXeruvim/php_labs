<?php
// Объявление функций для формул
function cylinder_volume($r, $h){
	echo "\nОбъем цилиндра с радиусом " .$r ." и высотой " .$h ." равен " .(3.14 * pow($r, 2) * $h) ." см^3";
} 
function cone_volume($r, $h){
	echo "\nОбъем конуса с радиусом " .$r ." и высотой " .$h ." равен " .(1/3 * 3.14 * pow($r, 2) * $h) ." см^3";
}
function prism_volume($a, $b, $h){
	$S = 1/2 * $a * $b;
	$V = $S * $h;
	echo "\nОбъем призмы с площадью " .$S ." и высотой " .$h ." равен " .$V ." см^3";
}
// Вызов функций
cylinder_volume(5, 3);
cone_volume(6, 4);
prism_volume(4, 5, 7);
?>