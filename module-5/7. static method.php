<?php
//7. static method.php

class MyClass{
    public static function staticMethod(){
        //echo "Hello World";
        return "Hello World";
    }
}

//MyClass::staticMethod();
echo MyClass::staticMethod();

//A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::):

class Greeting {
  public static function welcome() {
    echo "Greeting Hello World!";
  }

  public function __construct() {
    self::welcome();
  }
}

echo PHP_EOL;
new Greeting();

//Static methods can also be called from methods in other classes. To do this, the static method should be public:

class Greeting2{
    public static function welcome(){
        echo "03 Hello World";
    }
}

class OtherClass{
    public function message(){
        Greeting2::welcome();
    }
}
