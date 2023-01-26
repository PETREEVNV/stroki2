<?php $str = "Меня зовут Виталя"; 
echo $str . '<br>'; 
$arr = str_split($str); 
$i=0;
foreach ($arr as $value){
if ($value===' ' && $i%2==0){
$arr[$i]='  ';
}
$i++;
}
for ($i=0;$i<count($arr);$i++){
echo $arr[$i];
}
?>