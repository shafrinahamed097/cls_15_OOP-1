<?php 

class Person
{
   public function __construct(public $name){}
}

$p1 = new Person("Shafrin");
$p2 = new Person("Shafrin");

echo $p1 == $p2; // compare value
echo $p1 === $p2; // compare reference/object