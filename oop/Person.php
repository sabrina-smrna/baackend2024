<?php

class Person {
    var $name;
    var $age;

    function greeting() {
        echo "Hello $this->name, my name is $this->name, I am $this->age years old" . PHP_EOL;
    }

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$sabrina = new Person("sabrina", 20);
$sabrina->greeting("sabrina");
// $sabrina = new Person();
// $sabrina->name = "sabrina";
// $sabrina->age = 20;
// $sabrina->greeting();