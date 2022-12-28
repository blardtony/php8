<?php

$array1 = ["a" => 1];
$array2 = ["a" => 2];
$array = ["a" => 0, ...$array1, ...$array2];

var_dump($array);


$array1 = [1,2,3];
$array2 = [4,5,6];
$array = [...$array1, ...$array2];

var_dump($array);