<?php
$str = 'Арбуз груша дыня груша клубника груша';
$arr=explode(' ',$str);
$kol=0;
for($i=0;$i<count($arr);$i++){
    if ($arr[$i]=='груша') $kol++;
}
echo $str.'<br>';
echo 'Количество слов "груша " в строке '.$kol;
?>