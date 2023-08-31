<?php

// Написати консольну програму на PHP, яка робить кілька дій:
//
// - запитує імʼя і виводить в консоль кілька рядків привітання по імені
//
// - приймає кілька числових аргументів і виводить їх суму та середне арифметичне

echo "HW 3. Перша консольна програма" . PHP_EOL;
echo "------------------------------" . PHP_EOL;
echo "part #1".PHP_EOL;
echo "=======".PHP_EOL;
echo "What is your name ?" . PHP_EOL;
$name_user = fgets(STDIN);
echo "Hi, " . trim($name_user) . ". We are welcome you! " . PHP_EOL;
echo "part #2".PHP_EOL;
echo "=======".PHP_EOL;
$sum_numbers = 0;
$average = 0;
foreach($argv as $value){
    $sum_numbers = $sum_numbers + intval($value);
}
$average = $sum_numbers / (count($argv)-1);
echo "Sum = $sum_numbers" . PHP_EOL;
echo "Avg = $average" . PHP_EOL;




