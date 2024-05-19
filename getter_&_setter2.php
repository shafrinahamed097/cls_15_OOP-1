<?php

class Person {
    private $name;
    private $age;

    public function setName($name) { // Corrected setter
        $this->name = $name; 
    }

    public function setAge($age) { // Corrected setter
        if ($age <= 0) {
            throw new Exception("Age cannot be negative");
        }
        $this->age = $age; 
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function introduce() {
        echo "My name is {$this->getName()}, and I'm {$this->getAge()} years old.";
    }
}

$person = new Person();
$person->setName("Shafrin Ahamed"); 
$person->setAge(27);                
$person->introduce();
