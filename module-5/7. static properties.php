<?php
//7. static properties.php

class pi{
    public static $value = 3.14159;
}

//Get Static property

echo pi::$value;


//To call a static property from a child class, use the parent keyword inside the child class:

class pi2{
    public static $value = 3.14159;    
}

class x extends pi2{
    public function xStatic(){
        return parent::$value;
    }    
}

echo PHP_EOL;
echo x::$value; // Get value of static property directly via child class

echo PHP_EOL;
$x= new x();
echo $x->xStatic();


