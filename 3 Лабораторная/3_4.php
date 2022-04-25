<?php
function input_text(){
	echo "Русский язык пока что (или вообще) не работает!\n";
	$text = readline("Строка: ");
	if (preg_match('/[A-Za-z]$/', $text))
		return $text;
	else 
		echo "Ввод только английских букв\n";
}

function input_digit(){
	$shift = readline("Смещение: ");
	if (preg_match('/[0-9]$/', $shift))
		return $shift;
	else 
		echo "Смещение указывается в виде цифры\n";
}


function cipher($text, $shift){
	$result = "";
	for ($i = 0; $i < strlen($text); $i++){
		if (preg_match('/[A-Z]$/', $text[$i])==true)
			$result = $result.chr((ord($text[$i]) + $shift - 65) % 26 + 65);
		elseif (preg_match('/[a-z]$/', $text[$i])==true)
			$result = $result.chr((ord($text[$i]) + $shift - 97) % 26 + 97);			
    }
    return $result;
}

$text = input_text();
$shift = input_digit();
echo "Зашифрованная строка: " .$text = cipher($text, $shift);
echo "\nРасшифрованная (для теста): " .cipher($text, 26-$shift);
?>