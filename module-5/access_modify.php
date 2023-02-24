<?php
//access_modify.php
//Access Modifiers

//ACCESS MODIFIERS
class MyClass{
    public $num1 = 20;
    protected $num2 = 15;

    public function addTwo(){
        $num3 = $this->num1+$this->num2;
        echo $num3;
    }
}


//STATIC METHODS
$obj = new MyClass();
//$obj->addTwo();

class MyClass2{
    static function addTwo(){
        $num1=20; $num2=30;
        $num3 = $num1+$num2;
        echo $num3;
    }
}
//MyClass2::addTwo();


//STATIC PROPERTIES
class MyClass3{
    public static $cityList = array(
        'Dhaka',
        'Chattogram',
        'Rajshahi'
    );
}
//echo MyClass3::$cityList[0];


//INHERITANCE
class Father{
    function addTwo() {
        $num1 = 20;
        $num2 = 15;
        $num3 = $num1+$num2;
        echo $num3;
    }
}

class Son extends Father{

}

$obj = new Son();
//$obj->addTwo();

//INHERITANCE OVERRIDE
class Father1{
    function addTwo(){
        $num1 = 15;
        $num2 =10;
        $num3=$num1+$num2;
        echo $num3;
    }
}

class Son1 extends Father1{
    function addTwo(){
        $num1 = 2;
        $num2 = 2;
        $num3 = $num1+$num2;
        echo $num3;        
    }
}
$obj = new Son1();
$obj->addTwo();

class Fruit {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
//$mango->color = 'Yellow'; // ERROR
//$mango->weight = '300'; // ERROR
?> 