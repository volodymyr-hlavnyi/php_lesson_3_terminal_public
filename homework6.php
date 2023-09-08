<?php

echo "===========================================".PHP_EOL;
echo "HW 6. Сортування масиву" . PHP_EOL;
echo "===========================================".PHP_EOL;

$array = [];
$array2 = [];

$count_max_elements = rand(5,15);
echo "Generate array with max items - $count_max_elements" . PHP_EOL;
echo "===========================================".PHP_EOL;
for ($i=0; $i <= $count_max_elements; $i++) {
    $array[$i] = rand(-999,999);
}

// version #1 with for
echo "Array (with for)".PHP_EOL;
for ($i=0; $i <= $count_max_elements; $i++) {
    echo "array[$i]=$array[$i]".PHP_EOL;
}

// version #2 with for
//echo "Array (with for)".PHP_EOL;
//$count_max_elements2 = rand(20,30);
//$array2 = array_fill(0, $count_max_elements2, rand(-999,999));
//for ($i2=0; $i2 <= $count_max_elements2; $i2++) {
//    echo "array2[$i2]=$array2[$i2]".PHP_EOL;
//}

echo "===========================================".PHP_EOL;

echo "Found MAX items in array[$count_max_elements]" . PHP_EOL;
$max_item = $array[0];
for ($i=0; $i <= $count_max_elements; $i++) {
    if ($array[$i] > $max_item) {
        $max_item = $array[$i];
    }
}
echo "Max item is $max_item".PHP_EOL;

echo "===========================================".PHP_EOL;

echo "Found MIN items in array[$count_max_elements]" . PHP_EOL;
$min_item = $array[0];
for ($i=0; $i <= $count_max_elements; $i++) {
    if ($array[$i] < $min_item) {
        $min_item = $array[$i];
    }
}
echo "Min item is $min_item".PHP_EOL;

echo "===========================================".PHP_EOL;

echo "===========================================".PHP_EOL;

echo "Found MIN items in array[$count_max_elements]" . PHP_EOL;
$min_item = $array[0];
for ($i=0; $i <= $count_max_elements; $i++) {
    if ($array[$i] < $min_item) {
        $min_item = $array[$i];
    }
}
echo "Min item is $min_item".PHP_EOL;

echo "===========================================".PHP_EOL;

