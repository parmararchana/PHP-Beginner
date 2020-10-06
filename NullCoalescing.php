<?php

$details=[
    $name='Archana',
    $age=27,
    $address='123'

    ];


$myAddress= $address ?? 'Current Location';

echo '<pre>';
print_r($details);
echo '<pre>';

echo $myAddress;