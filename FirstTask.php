<?php
$a = 3;
$b = 5;
//С доп переменной
echo 'a = ', $a, "\n";
echo 'b = ', $b, "\n\n";

$c = $a;
$a=$b;
$b=$c;

//Без доп переменной
echo 'a = ', $a, "\n";
echo 'b = ', $b, "\n\n";


$a=3;
$b=5;

echo 'a = ', $a, "\n";
echo 'b = ', $b, "\n\n";

$a+=+$b-$b=$a;

echo 'a = ', $a, "\n";
echo 'b = ', $b, "\n\n";
