<?php
//1. class & object.php
//Class & Object
//In a class, variables are called properties and functions are called methods!

////ADDING VALUE TO SET_NAME() METHOD INSIDE THE CLASS
class Fruit{
    //Properties
    public $name;
    public $color;

    //Methods
    function set_name($name){
        $this->name = $name;
    }
    function set_color($color){
        $this->color = $color;
    }

    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}
$apple = new Fruit();
$banana = new Fruit();
$cherry = new Fruit();

$apple->set_name('Apple');
$apple->set_color('Red');
$banana->set_name('Banana');
$banana->set_color('Yellow');
$cherry->set_name('Cherry');
$cherry->set_color('Brown');

echo "Name : ".$banana->get_name().", Color : ".$banana->get_color();
echo PHP_EOL;
echo "Name : {$apple->get_name()}, Color : {$apple->get_color()}";
echo PHP_EOL;
echo "Name : {$cherry->get_name()}, Color : {$cherry->get_color()}";


////OUTSIDE THE CLASS (DIRECTLY CHANGING THE PROPERTY VALUE)
class Fruit2{
    public $name;
}
$mango = new Fruit2();
$mango->name = "Mango";
echo PHP_EOL;
echo "Fruit2 Name is {$mango->name}";

// ALTERNATIVE ADDING VALUE TO SET_NAME() METHOD INSIDE THE CLASS
class Fruit3{
    public $name;
    function set_name($name){
        $this->name = $name;
    }
}
$apple = new Fruit3();
$apple->set_name("Apple");
echo PHP_EOL;
echo "Fruit3 is : {$apple->name}";

