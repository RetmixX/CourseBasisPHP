<?php
//1 task
/*$input = "3 2 5 2 1 3";
$array = explode(" ", $input);
$resultArray = [];
foreach ($array as $item){
    $count = 0;
    foreach ($array as $j) if ($item==$j) $count++;
    if ($count==2&&!in_array($item, $resultArray)) $resultArray[] =$item;
}
sort($resultArray);
echo join(" ", $resultArray);*/

//2 task
/*$input = "1 2 3 4";
$array = explode(" ", $input);
$max = [];
foreach ($array as $item){
    $temp = [];
    for ($i = 0; $i<count($array)-1; $i++) $temp[] = (int)$item*(int)$array[$i];

    $max[] = max($temp);
}
$maxValue = max($max);
echo $maxValue;*/