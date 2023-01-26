<?php $str = '073509'; 
echo 'Исходная строка: ' . $str . '<br>'; 
$arr = chunk_split($str,2,':'); 
echo 'Полученная строка: '. substr($arr,0,-1); 
?>