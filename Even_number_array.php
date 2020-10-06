<?php

$number=[1,2,3,4,5,6,7,8,9];

echo '<pre>';
print_r($number);
echo '<pre>';

//Even number

//$even=array_filter($number,function ($n)
//                    {
//                        return $n%2==0;
//                    }  );

$even=array_filter($number,fn($n) =>  $n % 2 == 0);


echo "Even numbers";
echo '<pre>';
print_r($even);
echo '<pre>';