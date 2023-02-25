<?php
//6. abstract classes.php

//PARENT CLASS
abstract class Car{
    public $name; //property

    //Method
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro() : string;
}


//CHILD CLASS
class Audi extends Car{
    public function intro():string{
        return "Choose German Quality I am a {$this->name}";
    }
}

class Volvo extends Car{
    public function intro():string{
        return "Proud to be Swedish! I'm a {$this->name}.";
    }
}

class Toyota extends Car{
    public function intro():string{
        return "Hello dear! I am owner of a {$this->name}.";
    }
}

//CREATE OBJECTS FROM CHILD CLASSESS
$audi = new Audi("Audi");
echo $audi->intro();

echo PHP_EOL;

$volvo = new volvo("Volvo");
echo $volvo->intro();

echo PHP_EOL;
$toyota = new Toyota("Toyota");
echo $toyota->intro();
