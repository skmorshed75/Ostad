<?php
//3. inheritance.php

class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "The fruit is {$this->name} and color is {$this->color}.";
    }
}

//Strawberry is inherited from fruit
class Strawberry extends Fruit{
    public function message(){
        echo "Am I a fruit or berry?";
    }
}

$strawberry = new Strawberry('Strawberry', 'Red');
$strawberry->message();
echo PHP_EOL;
$strawberry->intro();