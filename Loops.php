<?php

// While

$number=0;
echo "<b>While loop</b>".'<br>';
while($number<5){

    echo "counter $number".'<br>';
    $number++;
}

//for
echo '<br>'."<b>For loop</b>".'<br>';
for($i=0 ; $i<=5;$i++){
    echo "Number $i".'<br>';

}

//Foreach

echo '<br>'."<b>Foreach</b>".'<br>';

$fruits=["Apple","Orange","Banana"];

foreach ($fruits as $fruit){


    echo "$fruit".'<br>';
}

//Associative array
echo '<br>'."<b>Associative array</b>".'<br>';

$details=["Name"=>"Archana","Age"=>27,"hobbies"=>['reading','Sleeping','cocking']];

foreach($details as $key=>$value){
    if($key==='hobbies'){
       break;
    }
    echo $value.'<br>';

}