<?php
$carsSpeed = [100,54,69,65,121];

$sumSpeed = 0;
$countCars = 0;

foreach ($carsSpeed as $item){
    $sumSpeed+=$item;
    $countCars++;
}

echo "Средняя скорость движения по трассе: ".$sumSpeed/$countCars;

