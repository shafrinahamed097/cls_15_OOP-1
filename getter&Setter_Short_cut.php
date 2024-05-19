<?php

class Person{
    function __construct(private $name, private $age){}

    function introduce(){
        echo "My name is  {$this->name}. I am {$this->age} years old.";    
    }
}

$person1 = new Person("Shafrin", 25);
$person1->introduce();