<?php
//- 1 - green
//- 2 - red
//- 3 - blue
//- 4 - brown
//- 5 - violet
//- 6 - black
echo "HW 5. Вивід в залежності від умови" . PHP_EOL;

$value = 152;

echo "value = $value".PHP_EOL;

switch ($value) {
    case 1:
        echo "green" . PHP_EOL;
        break;
    case 2:
        echo "red" . PHP_EOL;
        break;
    case 3:
        echo "blue" . PHP_EOL;
        break;
    case 4:
        echo "brown" . PHP_EOL;
        break;
    case 5:
        echo "violet" . PHP_EOL;
        break;
    case 6:
        echo "black" . PHP_EOL;
        break;
    default:
        echo "white".PHP_EOL;
}
