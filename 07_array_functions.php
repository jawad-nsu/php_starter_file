<?php

$fruits = ['apples'];
// var_dump(in_array('apples', $fruits));

//adding to array
$fruits[] = 'grapes';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mangoes');
// print_r($fruits);
// echo '<br>';
//removing from array
// array_pop($fruits);
// array_shift($fruits);
// unset($fruits[2]);

//Split into 2 chunks
// $chunked_array = array_chunk($fruits, 2);

//Concat arrays
// $arr1 = [1, 2, 3];
// $arr2 = [4,5,6];

// $arr3 = array_merge($arr1, $arr2);

// print_r($arr3);

$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];

$c = array_combine($a, $b);

$keys = array_keys($c);

$numbers = range(1, 20);

$newNumber = array_map(function($item){
 return "Number ${item}";
}, $numbers);

print_r($newNumber);

// print_r($numbers);




?>