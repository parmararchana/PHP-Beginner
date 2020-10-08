<?php



function sum(...$numbers){
//    $sum=0;
//    foreach ($numbers as $number){
//        $sum+=$number;
//    }
//    return $sum;


    return array_reduce($numbers,fn($result,$n) => $result+=$n );

}

$result=sum(1,2,3,4,5);
echo "The result is ".$result.'<br>';