<?php
echo "Размер матрицы:\n";
$n = readline("n = \n");
$m = readline("m = \n");

$min = 99;
$max = 0;
$min_line = 0;
$max_line = 0;

function print_array($matrix){
	global $n, $m, $min, $max;
	for ($i = 0; $i < $n; $i++){
		for ($j = 0; $j < $m; $j++){
			if ($matrix[$i][$j] == $min)
				echo "\033[01;31m{$matrix[$i][$j]} \033[0m";
			elseif ($matrix[$i][$j] == $max)
				echo "\033[01;32m{$matrix[$i][$j]} \033[0m";
			else
				echo $matrix[$i][$j] ." ";
		}
		echo "\n";
	}
}

function create_array() {
    $array = array();
	global $n, $m;
    for ($i = 0; $i < $n; $i++) {
		$array[$i] = array();
        for($j = 0; $j < $m; $j++) {
            $array[$i][$j] = mt_rand(0, 99);
        }
    }	
    return $array;
}

function find_max($matrix){
	global $n, $m, $max, $max_line;
    for ($i = 0; $i < $n; $i++) {
        for($j = 0; $j < $m; $j++) {
			if ($max < $matrix[$i][$j]){
				$max = $matrix[$i][$j];  
				$max_line = $i;
			}				
        }
    }	
    return $max_line;	
}

function find_min($matrix){
	global $n, $m, $min, $min_line;
    for ($i = 0; $i < $n; $i++) {
        for($j = 0; $j < $m; $j++) {
			if ($min > $matrix[$i][$j]){
				$min = $matrix[$i][$j];
				$min_line = $i;
			}
        }
    }	
    return $min_line;	
}

function swap($array){
	$tmp1 = $array[find_min($array)];
	$tmp2 = $array[find_max($array)];
	if ($tmp1 == $tmp2){
		echo "Минимум и максимум находятся в одной строке";
		exit;
	}
	else{
	echo "Измененная матрица: \n";
	$array[find_min($array)] = $tmp2;
	$array[find_max($array)] = $tmp1;
	}
	return $array;
}

echo "\n";
$matrix = create_array();
echo "Исходная матрица: \n";
print_array($matrix);
echo "\n";
$matrix = swap($matrix);
print_array($matrix);
?>