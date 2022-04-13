<?php
function quadratic_equation($a, $b, $c){
	if ($b == 0 && $c == 0)
		echo "x = 0\n";	
	elseif ($b == 0)
		echo "x = +-" .sqrt(-$c / $a) ."\n";
	elseif ($c == 0)
		echo "x1 = 0 " . "\nx2 = " .(-$b / $a) ."\n";
	else{
		$D = pow($b, 2) - 4 * $a * $c;
		if ($D > 0)
			echo "x1 = " .((-$b - sqrt($D)) / (2 * $a) ."\nx2 = " .((-$b + sqrt($D)) / (2 * $a))) ."\n";
		elseif ($D = 0)
			echo "x = " .(-$b / (2 * $a)) ."\n";
		elseif ($D < 0)
			echo "Корней нет, D < 0 \n";
	}
}

quadratic_equation(1, 10, 9);
quadratic_equation(-5, 0, 20);
quadratic_equation(4, 0, 0);
?>