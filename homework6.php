<?php

echo "===========================================".PHP_EOL;
echo "HW 6. Сортування масиву" . PHP_EOL;
echo "===========================================".PHP_EOL;

$array = [];
$array2 = [];

$count_max_elements = rand(4,6);
echo "Generate array with max items - $count_max_elements" . PHP_EOL;
echo "===========================================".PHP_EOL;
for ($i=0; $i <= $count_max_elements; $i++) {
    $array[$i] = rand(0,20);
}

// version #1 with for
echo "Array:".PHP_EOL;
for ($i=0; $i <= $count_max_elements; $i++) {
    echo "array[$i]=$array[$i]".PHP_EOL;
}

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
echo "SORT Function".PHP_EOL;
sort($array).PHP_EOL;
for ($i=0; $i <= $count_max_elements; $i++) {
    echo "array[$i]=$array[$i], ";
    if ($i === $count_max_elements) {
        echo " " . PHP_EOL;
    }
}
echo "===========================================".PHP_EOL;
echo "RSORT Function".PHP_EOL;
rsort($array).PHP_EOL;
for ($i=0; $i <= $count_max_elements; $i++) {
    echo "array[$i]=$array[$i], ";
    if ($i === $count_max_elements) {
        echo " " . PHP_EOL;
    }
}

echo "===========================================".PHP_EOL;
echo "Sorting ACS (bubble method) items in array[$count_max_elements]" . PHP_EOL;
for ($k=0; $k <= $count_max_elements; $k++) {
    //$item = $array[$k];
    //$position = $k;
    for ($i=0; $i <= $count_max_elements-1-$k; $i++) {
        if ($array[$i] > $array[$i+1]) {
            $tmp_item = $array[$i+1];
            $array[$i+1] = $array[$i];
            $array[$i] = $tmp_item;
        }
    }
}

//echo "Sorting ACS Array:".PHP_EOL;
for ($i=0; $i <= $count_max_elements; $i++) {
    echo "array[$i]=$array[$i], ";
    if ($i === $count_max_elements) {
        echo " " . PHP_EOL;
    }
}

echo "===========================================".PHP_EOL;
echo "Sorting DESC (bubble method) items in array[$count_max_elements]" . PHP_EOL;
for ($k=0; $k <= $count_max_elements; $k++) {
    //$item = $array[$k];
    //$position = $k;
    for ($i=0; $i <= $count_max_elements-1-$k; $i++) {
        if ($array[$i] < $array[$i+1]) {
            $tmp_item = $array[$i+1];
            $array[$i+1] = $array[$i];
            $array[$i] = $tmp_item;
        }
    }
}

//echo "Sorting DESC Array:".PHP_EOL;
for ($i=0; $i <= $count_max_elements; $i++) {
    echo "array[$i]=$array[$i], ";
    if ($i === $count_max_elements) {
        echo " " . PHP_EOL;
    }
}