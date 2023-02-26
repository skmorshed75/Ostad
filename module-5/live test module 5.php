<?php

/*
live test module 5.php
LIVE TEST : MODULE 5 26/02/2023

create a PHP class called Car that has three private properties: $make, $model and $year. Define a constructor method to set the values of these properties when a new object is created. Also, define six additional methods: get_make(), get_model(), get_year(), set_make(), set_model() and set_year(). The get methods should allow us to retrieve the values of the private properties, while the set_methods should allow us to update them. Finally, define a method called display_info() that echoes out the car's make, model and year.

Create a Car object with the make, model and year of a 2015 Toyota Corolla. Call the display_info() method to display the car's information.

Then, use the set_make() and set_mode() methods to update the car's make and model to a 2015 Honda Civic. Call the display_info() method again to display the updated car information.

Hinds :
OUtput :
Car make: Toyota
Car model : Corolla
Car year : 2015
*/

class Car {
    private $make;
    private $model;
    private $year;
    
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    
    public function get_make() {
        return $this->make;
    }
    
    public function set_make($make) {
        $this->make = $make;
    }
    
    public function get_model() {
        return $this->model;
    }
    
    public function set_model($model) {
        $this->model = $model;
    }
    
    public function get_year() {
        return $this->year;
    }
    
    public function set_year($year) {
        $this->year = $year;
    }
    
    public function display_info() {
        echo "Car make: " . $this->make . "\n";
        echo "Car model: " . $this->model . "\n";
        echo "Car year: " . $this->year . "\n";
    }
}

// create a new Car object with the make, model and year of a 2015 Toyota Corolla
$my_car = new Car("Toyota", "Corolla", 2015);

// display the car's information
echo "Display the car's information\n";
$my_car->display_info(); // output: Car make: Toyota, Car model: Corolla, Car year: 2015

// update the car's make and model to a 2015 Honda Civic using the set_make() and set_model() methods
echo PHP_EOL;
echo "Using the set_make() and set_mode() methods to update the car's make and model to a 2015 Honda Civic : \n";
$my_car->set_make("Honda");
$my_car->set_model("Civic");

// display the updated car information
$my_car->display_info(); // output: Car make: Honda, Car model: Civic, Car year: 2015


