<?php 

class Person{
    public function __construct(public $name, public $age){}

    function introduce(){
        echo "My name is {$this->name}, and I'm {$this->age} years old" ."\n";
    }
}

$p1 = new Person("John", 30);
$p2 = clone $p1;
$p2->name="David";
$p1->introduce();
$p2->introduce();