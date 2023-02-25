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

class greeting {
  public static function welcome() {
    echo "Greeting Hello World!";
  }

  public function __construct() {
    self::welcome();
  }
}

echo PHP_EOL;
new greeting();

//Static methods can also be called from methods in other classes. To do this, the static method should be public:

class greeting2{
    public static function welcome(){
        echo "03 Hello World";
    }
}

class otherClass{
    public function message(){
        greeting2::welcome();
    }
}
