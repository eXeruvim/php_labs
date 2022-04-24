<?php
echo "Размер матрицы:\n";
$n = readline("n = \n");
$m = readline("m = \n");

function create_array($n, $m) {
    $array = array();
    for ($i = 0; $i < $n; $i++) {
		$array[$i] = array();
        for($j = 0; $j < $m; $j++) {
            $array[$i][$j] = mt_rand(0, 99);
        }
    }	
    return $array;
}

function print_array($matrix){
	global $n, $m;
	for ($i = 0; $i < $n; $i++){
		for ($j = 0; $j < $m; $j++){
			echo $matrix[$i][$j] ." ";
		}
		echo "\n";
	}
}

function print_transpose_array($matrix){
	global $n, $m;
	for ($i = 0; $i < $m; $i++){
		for ($j = 0; $j < $n; $j++){
			echo $matrix[$i][$j] ." ";
		}
		echo "\n";
	}
}

function transpose($matrix){
	return array_map(null, ...$matrix);
}

$matrix = create_array($n, $m);
print_array($matrix);

echo "\n";

$matrix_transpose = transpose($matrix);
print_transpose_array($matrix_transpose);


?>