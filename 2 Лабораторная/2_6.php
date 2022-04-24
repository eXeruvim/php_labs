<?php
echo "Размер матрицы:\n";
$n = readline("n = \n");

function create_array($n) {
    $array = array();
    for ($i = 0; $i < $n; $i++) {
		$array[$i] = array();
        for($j = 0; $j < $n; $j++) {
            $array[$i][$j] = mt_rand(0, 99);
        }
    }	
    return $array;
}

function print_array($matrix){
	global $n;
	for ($i = 0; $i < $n; $i++){
		for ($j = 0; $j < $n; $j++){
			echo $matrix[$i][$j] ." ";
		}
		echo "\n";
	}
}

function matrix_multiplication($matrix1, $matrix2){
	global $n;
	$matrix;
	for ($i = 0; $i < $n; $i++){
		for ($j = 0; $j < $n; $j++){
			$matrix[$i][$j] = 0;
			for ($k = 0; $k < $n; $k++)
				$matrix[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
		}
	}

	return $matrix;
}
	
echo "1-ая матрица: \n";
$matrix_1 = create_array($n);	
print_array($matrix_1);

echo "\n";

echo "2-ая матрица: \n";
$matrix_2 = create_array($n);
print_array($matrix_2);

echo "\n";

echo "Результат умножения матриц: \n";
$matrix = matrix_multiplication($matrix_1, $matrix_2);
print_array($matrix);
	
?>