<?php

class Person{
    // Property promotion
    function __construct(private $name, private $age){}

    function introduce(){
        echo "My name is  {$this->name}. I am {$this->age} years old.";    
    }
}

$person1 = new Person("Shafrin", 27 );
$person1->introduce();