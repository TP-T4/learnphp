<?php
$test = array(1, 2, 3, 4, 5);
$test = [1, 2, 3, 4, 5];
$test = [1, 'adsasas', true, [1, 2, 3, 4, 5]];
$test = [
    'name' => 'Tauri',
    'age' => 18,
    3,
    true,
    100 => 'lol',
    'troll'
];
var_dump($test[3][2]);
var_dump($test);
?>