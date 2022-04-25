<?php
$line = readline("Введите строку: ");
echo "Cимволов: " .strlen(utf8_decode($line));
echo "\n";
echo "Слов: " .count(preg_split('/\s+/', $line));
?>