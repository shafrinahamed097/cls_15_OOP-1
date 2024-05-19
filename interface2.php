<?php

interface Vehicle{
    function start();

    function stop();

    function getMilage($distance, $fuel);

}

abstract class VehicleX implements Vehicle{
    function getMilage($distance, $fuel) {
        $vehicle=get_class($this);
        echo "{$vehicle} Mileage is " .($distance/$fuel)." kmpl \n";
    }
}


class Car extends VehicleX{

   public function start(){
    echo "Car is Started" ."\n";
   }

   public function stop(){
    echo "Car is Stopped" ."\n";
   }

   
}

class MotorCyle extends VehicleX{

    public function start(){
        echo "Honda Started" ."\n";
    }

    public function stop(){
        echo "Honda Stopped" ."\n";
    }

    
}

class Truck extends VehicleX{
    public function start(){
        echo "Truck is Started" ,"\n";
    }

    public function stop(){
        echo "Truck is Stopped" ,"\n";
    }

//    Method Over-Ridding 
    function getMilage($distance, $fuel){
    echo "Vehicle Milage is: " .($distance/$fuel) ." MPL \n";
   }

}

$m = new MotorCyle();
$m->start();
$m->stop();
$m->getMilage("1000","30");



$n=new Car();
$n->start();
$n->stop();
    $m->getMilage("20","10");



    $p= new Truck();
    $p->start();
    $p->stop();
    $p->getMilage("20","30");

    /*

    Honda Started
Honda Stopped
MotorCyle Mileage is 33.333333333333 kmpl 
Car is Started
Car is Stopped
MotorCyle Mileage is 2 kmpl 
Truck is Started
Truck is Stopped
Vehicle Milage is: 0.66666666666667 MPL 

*/
