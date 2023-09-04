<?php

echo "HW 4. Порівняння типів і значень" . PHP_EOL;

$a_int = 0;
$b_int = 1;

$a_str = 'AAA';
$b_str = 'aaa';

$a_float = 1.25;
$b_float = 2.25;

$a_array = [0,1,2,3];
$b_array = [0,1,2,3];

$a_bool = True;
$b_bool = False;

echo "-----------------------------" . PHP_EOL;

echo "$a_int == $b_int  result ";
var_dump($a_int == $b_int);

echo "$a_int == $b_bool  result ";
var_dump($a_int == $b_int);

echo "$a_str == $b_str  result ";
var_dump($a_str == $b_str);

echo "$a_float == $b_float  result ";
var_dump($a_float == $b_float);

echo "$a_array == $b_array  result ";
var_dump($a_array == $b_array);

echo "$a_bool == $b_bool  result ";
var_dump($a_bool == $b_bool);

echo "-----------------------------" . PHP_EOL;

echo "$a_int === $b_int  result ";
var_dump($a_int === $b_int);

echo "$a_str === $b_str  result ";
var_dump($a_str === $b_str);

echo "$a_float === $b_float  result ";
var_dump($a_float === $b_float);

echo "$a_array === $b_array  result ";
var_dump($a_array === $b_array);

echo "$a_bool == $b_bool  result ";
var_dump($a_bool === $b_bool);

