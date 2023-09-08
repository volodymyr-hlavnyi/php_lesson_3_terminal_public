<?php

$array = ['elem1', 'elem2', 'elem3'];
$lenght = count($array);
//sizeof()

// while
$i=0;
$limit = 50;
while($i <= $limit)
{
    echo $i . PHP_EOL;
    $i++;
}
// do
echo '==========================================='.PHP_EOL;
$i=0;
do {
    echo $i . PHP_EOL;
    $i++;
} while(false);

//for
echo '==========================================='.PHP_EOL;
for ($counter = 0; $counter<=10; $counter++) {
    echo $counter . PHP_EOL;
}
// for 2 var
echo '==========================================='.PHP_EOL;
for ($counter = 0, $j=2; $counter<=10; $counter++, $j++) {
    echo "$counter - $j" . PHP_EOL;
}

echo '==========================================='.PHP_EOL;
for ($counter = 0; $counter<$lenght; $counter++) {
    echo $array[$counter] . PHP_EOL;
}

echo '==========================================='.PHP_EOL;
foreach ($array as $line) {
    echo $line.PHP_EOL;
}

echo '==========================================='.PHP_EOL;
foreach ($array as $key => $line) {
    echo "$key => $line" . PHP_EOL;
}

echo '==========================================='.PHP_EOL;
$array2 = ['title' => 'PHP', 'slary' => 2000, 'location' => 'Kiew'];
foreach ($array2 as $key => $line) {
    echo "$key => $line" . PHP_EOL;
    if ($key === 'title') {
        $array2[$key]='Python';
    }
}
var_dump($array2);

echo '==========================================='.PHP_EOL;
$array3 = [
    ['title' => 'PHP', 'slaary' => 2000, 'location' => 'Kiew'],
    ['title' => 'Python', 'salary' => 1500, 'location' => 'Odessa'],
    ['title' => 'Java', 'salary' => 2500, 'location' => 'Wermelskirchen'],
];
foreach ($array3 as $key => $line) {
    if ($line['location'] === 'Kiew') {
        $array3[$key]['salary'] = $array3[$key]['salary'] * 1.02;
    }
    echo "$key => $line" . PHP_EOL;
}
var_dump($array3);

$locations = [
    ['id' => 3, 'name' => 'Odessa'],
    ['id' => 2, 'name' => 'Kiev'],
    ['id' => 1, 'name' => 'Lviv'],
];

$titlies = [
    ['title_id' => 1, 'name' => 'PHP'],
    ['title_id' => 2, 'name' => 'Python'],
    ['title_id' => 3, 'name' => 'Java'],
];
$vacancies = [
    ['title_id' => 1, 'slaary' => 2000, 'location_id' =>  1],
    ['title_id' => 2, 'salary' => 1500, 'location_id' => 2],
    ['title_id' => 3, 'salary' => 2500, 'location_id' => 3],
];

foreach ($vacancies as $key => $vacancy) {
    //var_dump($vacancy);
    foreach ($locations as $key2 => $location) {
       //var_dump($location);
        if ($vacancy['location_id'] === $location['id']) {
            $vacancies[$key]['location'] = $location['name'];
            unset($vacancies[$key]['location_id']);
            break;
            //break 2;
            //continue 2;
        }
    }
}
var_dump($vacancies);


echo '==========================================='.PHP_EOL;
$names = ['Jim', 'Kate', 'Nick'];
$string = '';
$keylast=array_key_last($names);
foreach ($names as $name) {
    if ($keylast === $key) {
        $string .="$name";
    }
    else {
        $string .="$name,";
    }

}

echo '==========================================='.PHP_EOL;
echo implode(',', $names).PHP_EOL;
$newline = implode(',', $names).PHP_EOL;

var_dump(explode(',' , $newline).PHP_EOL);

$key5 = ['title', 'salary', 'location'];
$value5 = ['PHP Dev', 2500, 'London'];

$new_array5 = array_combine($key5, $value5);
var_dump($new_array5);

$array5_key = array_keys($new_array5);
$arrayValue5 = array_values($new_array5);
var_dump($array5_key);
var_dump($arrayValue5);

echo '==========================================='.PHP_EOL;
var_dump(array_flip($new_array5));

echo '==========================================='.PHP_EOL;
$key5 = ['title', 'salary', 'location'];
$a = $key5[0];
$b = $key5[1];
$c = $key5[2];
var_dump($a, $b,$c);
list($a, $b, $c) = $key5;
var_dump($a, $b,$c);

[$a, $b, $c] = $key5;
var_dump($a, $b, $c);

echo '==========================================='.PHP_EOL;

$vacancies6 = ['title' => 'PHP', 'salary' => 2000, 'location_id' =>  1];


[$title, $salary, $location] = $vacancies6;

extract($vacancies6);
var_dump($title, $salary, $location_id);

echo '==========================================='.PHP_EOL;
$title = 'PHP Dev';
$salary = 2500;
$location = 'London';
$array7 = compact('title', 'salary', 'location');
var_dump($array7);

echo '==========================================='.PHP_EOL;
$array8 = [1,2,3,4,5];
foreach ($array8 as $key =>$array){
    $array8[$key] = $array **2;
}
var_dump($array8);

echo '==========================================='.PHP_EOL;
$array8 = [1,2,3,4,5];
$new_array8 = array_map(function ($elem) {
    return $elem **2;
}, $array8);

var_dump($new_array8);