<?php
//global variables.php

$name = "Earth";

function doSomething(){
    //global $name;
    //echo $name;
    //OR
    echo $GLOBALS['name'];
}

doSomething();

