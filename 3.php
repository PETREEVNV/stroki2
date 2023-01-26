<?php
$str = 'Mama  mila  ramu'; 
$arr = explode(' ',$str);
 echo $str . '<br>'; 
 for($i=0;$i<count($arr);$i++){
$str2 = $arr[$i];
if ($str2[0]='M') $str2[0]='P';
if ($str2[0]='m') $str2[0]='p'; $arr[$i][0] = $str2[0];
echo $arr[$i];
}
?>