<?php


class Person{

    public String $name;
    public int $age;
    public float $salary;
    public ?float $f_number;

}


$p=new Person();
$p->name='Archana';
$p->age=27;
$p->salary=60000;
$p->f_number=null;

echo '<pre>';
print_r($p);
echo '<pre>';

