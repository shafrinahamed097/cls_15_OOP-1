<?php 

class Person{
    public function __construct(public $name){}

    function introduce(){
        echo "My name is {$this->name}" ."\n";
    }
}

$p1 = new Person('John');
$p2 = $p1;

$p2->name="Jane";

$p1->introduce() ;
$p2->introduce();