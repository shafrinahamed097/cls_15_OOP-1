<?php


class Person{
    private $name;
    private $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function __get($key){
        return $this->$key;
    }
}

$p1 = new Person("Shakib", 27);
echo $p1->name;
echo $p1->age;