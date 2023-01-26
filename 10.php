<?php
$str = ' wm-school@example.com '; 
echo 'Исходная строка: ' . $str . '<br>'; 
echo 'Полученная строка: ' ;
for ($i=0;$i<strlen($str);$i++){
if ($str[$i]!='@') {
echo $str[$i];
}
else{
break;
}
}
?>