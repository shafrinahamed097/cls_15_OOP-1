<?php 

class Person
{
   public function __construct(public $name, public $age){}
}

$p1 = new Person("Shafrin", 27);
$p2 = new Person("Shafrin", 25);

echo $p1 == $p2;