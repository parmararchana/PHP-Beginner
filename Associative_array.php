<?php

//In associative array it has key,value pair
//EX. key=name && value= Archana
$person=[
    'name'=> 'Archana',
    'Surname'=> 'Raj',
    'Age'=> 27
    ];

echo '<pre>';
print_r($person);
echo '<pre>';

echo $person['name'].'<br>';
echo $person['Age'].'<br>';

$person['salary']=6000;

echo'<pre>';
print_r($person);
echo '<pre>';

ksort($person);  // Sort by key
echo'<pre>';
print_r($person);
echo '<pre>';

//2D array

$todolist=[
    ["Name"=> "Archana", "Task"=> "Yes"],
    ["Name"=> "Piya", "Task"=> "No"],
    ["Name"=> "Kiaya", "Task"=> "Yes"]

];

echo '<pre>';
print_r($todolist);
echo '<pre>';
