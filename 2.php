<?php
$str = 'Ay hy gy';
for($i=0;$i<strlen($str);$i++){
    if ($str==' '){
        continue;
    }
    if (strpos($str,$str[$i])== strpos($str,$str[$i])){
        echo $str[$i];
    }
}
?>