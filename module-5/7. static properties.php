<?php
//7. static properties.php

class Pi{
    public static $value = 3.14159;
}

//Get Static property

echo pi::$value;


//To call a static property from a child class, use the parent keyword inside the child class:

class pi2{
    public static $value = 3.14159;    
}

class X extends pi2{
    public function xStatic(){
        return parent::$value;
    }    
}

echo PHP_EOL;
echo X::$value; // Get value of static property directly via child class

echo PHP_EOL;
$x= new X();
echo $x->xStatic();


