<?php
/*
echo "*       *       *\n"; 
echo " *     * *     *\n";
echo "  *   *   *   *\n";
echo "   * *     * *\n";
echo "    *       *\n";
*/

$line0 = " ";
$line1 = " ";
$line2 = " ";
$line3 = " ";
$line4 = " ";

for ($i = 0; $i < 17; $i++){
	$line0 .= ($i == 0 || $i == 8 || $i == 16) ? "*" : " ";
	$line1 .= ($i == 1 || $i == 7 || $i == 9 || $i == 15) ? "*" : " ";
	$line2 .= ($i == 2 || $i == 6 || $i == 10 || $i == 14) ? "*" : " ";
	$line3 .= ($i == 3 || $i == 5 || $i == 11 || $i == 13) ? "*" : " ";
	$line4 .= ($i == 4 || $i == 12) ? "*" : " ";
}

echo $line0 ."\n";
echo $line1 ."\n";
echo $line2 ."\n";
echo $line3 ."\n";
echo $line4 ."\n";
?>