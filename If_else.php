<?php

$age=27;
$name='Archana';


// == will check the value, === will check the value and the datatype
if ($age==27){
    echo "You are 27".'<br>';

}

else{

    echo "You are not 27".'<br>';
}

//ternary if

echo $age>25 ? 'Old' : 'Young';
