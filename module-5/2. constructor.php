<?php
//constructor.php
// PHP OOP Constructor
//We see in the example below, that using a constructor saves us from calling the set_name() method which reduces the amount of code:
class Fruit{
    public $name;
    public $color;

    function __construct($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}
$apple = new Fruit("Apple");
//echo $apple->get_name();

//EXAMPLE 02
class Fruit2{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function get_name(){
        return $this->name;        
    }

    function get_color(){
        return $this->color;
    }
}
$apple = new Fruit2('Apple','Red');
echo $apple->get_name();
echo PHP_EOL;
echo $apple->get_color();
