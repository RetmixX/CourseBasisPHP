<?php

function valueIsPresentInArray($array, $value){
    foreach ($array as $item)
        if ($value===$item) return true;
    return false;
}

function countEntryValueInArray($array, $value){
    $count = 0;
    foreach ($array as $item){
        if ($item===$value){
            $count++;
        }
    }

    return $count;
}

function fib($num){

    $fib = [0, 1];
    for($i=1; $i < $num-1; $i++) {
        $fib[] = $fib[$i] + $fib[$i-1];
    }

    echo implode(' ', $fib);
}


$str = "1 2 3 4 5 6 7 8 9";
$array = explode(" ", $str);

foreach ($array as $item){
    if ((int)$item%2==0) echo $item." ";
}

echo "\n";

if (valueIsPresentInArray([1,2,5,6,7], 6)) echo "Число 6 есть в массиве\n";
else "Числа 6 нет в массиве\n";

echo "Число 4 встречается в массиве: ".countEntryValueInArray([4,2,7,1,4,6,1,2,4,5], 4)." раз\n";

fib(6);
echo "\n";
fib(4);
