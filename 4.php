<?php
$str = 'Здравствуйте меня зовут Николай'; 
$arr = explode(' ',$str); 
for ($i=0; $i < count($arr); $i++) { 
    print $arr[$i].' ';
}
echo '<br>';

usort($arr, function($a, $b){ 
    if($diff !== false){
$diff = strlen($a) - strlen($b);
strpos($a, $b);
}
return $diff;
});
for ($i =0; $i <count($arr); $i++ )
{
     echo $arr[$i]." ";
}
?>