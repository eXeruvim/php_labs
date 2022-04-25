<?php
function utf_strrev($str){
    preg_match_all('/./us', $str, $ar);
    return join('', array_reverse($ar[0]));
}
echo utf_strrev(readline("Введите строку: "));
?>