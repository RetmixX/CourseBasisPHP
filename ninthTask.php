<?php

$task1 = fopen("task", "r");
$task2 = fopen("task2", "r");

$task3 = fopen("task", "r");

echo strtoupper(fgets($task1))."\n";
echo strtoupper(fgets($task2))."\n";

$strArray = explode(" ", fgets($task3));
foreach (array_reverse($strArray) as $item){
    echo $item." ";
}