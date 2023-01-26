<?php 
$str = 'меня зовут Саня';
$arr = explode(' ',$str);
$kol = 0;
for ($i=0;$i<count($arr);$i++){
    if (str_ends_with($arr[$i],'я')){
    $kol++;
    }
}
echo $str . "<br>"; 
echo 'Количество слов с буквой "я" на конце: ' . $kol; 
?>