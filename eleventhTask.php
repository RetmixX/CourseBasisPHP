<?php
//1 task
/*$array = [1,3,2];
sort($array);
echo join(":", $array);*/

//2 task
/*$array2 = [1,2,3,4,5];
var_dump(array_slice($array2, 1,3));*/

//3 task
$inputStr = "0 2 3 1 2";
echo $inputStr."<br>";
$inputArray = explode(" ", $inputStr);
$uniqueArray = array_unique($inputArray);
sort($uniqueArray);
echo join(" ", $uniqueArray);