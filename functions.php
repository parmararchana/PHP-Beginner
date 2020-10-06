<?php
//Sum of two number
echo "<b>Function</b>".'<br>';
function Sum($a,$b)
{
    echo "the sum of $a and $b is : ";
    echo $a+$b.'<br>';

}

$a=7;
$b=7;
sum($a,$b);

//Use the name
echo '<br>'."<b>Pass the string</b>".'<br>';

function Details($name){

    echo "Hello I am  ".$name.'<br>';
}

details("Urvesh");
details("Arti");

//Return the functions


echo '<br>'."<b>Return the function</b>".'<br>';
function addition($a,$b){

    return $a+$b;
}

$sum=addition(8,9);
echo "sum of the number is ".$sum.'<br>';



