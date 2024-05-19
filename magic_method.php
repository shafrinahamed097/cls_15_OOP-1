<?php
class Person {
    private $name;
    private $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function introduce() {
        echo "My name is {$this->name} and I am {$this->age} years old\n";
    }

    function __toString(){
        // return "Name: {$this->name}, Age: {$this->age}";
        // convert to json
        return json_encode(["name" => $this->name, "age" => $this->age]);
    }

  function __get($key) {  // Made public
        if ($key == "name" || $key == "age") {
            return $this->$key;
        }
        throw new Exception("Invalid Property");
    }
}


$p1 = new Person("Shakib", 27);
echo $p1 ; // Added newline for readability
