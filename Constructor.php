<?php
class Salary{
    private String $name;
    private int $salary;
    private int $number;

    public function __construct($name,$number,$salary)
    {
        $this->name=$name;
        $this->number=$number;
        $this->salary=$salary;
    }
}


$object=new Salary('Archana',6476689577,60000);

echo '<pre>';
print_r($object);
echo '<pre>';
