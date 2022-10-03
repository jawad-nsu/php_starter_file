<?php

//  $number = [1, 2, 'sadat'];
//  var_dump($number);

 $person = [
    'name' => 'Jawad',
    'age' => 25,
    'email' => ['Reading', 'Coding']
 ];

//  var_dump($person['age']);

 $people = [
    [
        'name' => 'Jawad',
        'age' => 25,
        'email' => 'jawad@gmail.com'
    ],
    [
        'name' => 'Fariha',
        'age' => 25,
        'email' => 'fariha@gmail.com'
    ],
    [
        'name' => 'Salsabeel',
        'age' => 17,
        'email' => 'salsabeel@gmail.com'
    ],
];

echo $people[1]['email'];
?>