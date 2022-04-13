<?php
$x = -2.34;
$formula = round(((abs($x-5)-sin($x)) / 3) + (sqrt(pow($x, 2) + 2014) * cos(2*$x) - 3), 5);
echo $formula;
?>