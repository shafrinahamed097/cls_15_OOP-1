<?php

interface Vehicle{
    function start();

    function stop();

    function getMilage($distance, $fuel);

}

abstract class VehicleX implements Vehicle{
    function getMilage($distance, $fuel)    {
        echo "Vehicle Mileage is ". ($distance/$fuel) ."\n";
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

    public function getMilage($distance, $fuel){
        echo "Honda Mileage is: ". ($distance/$fuel) ."\n";
    }
}

$m = new MotorCyle();
$m->start();
$m->stop();
$m->getMilage("1000","30");

/*
 Honda Started
Honda Stopped
Honda Mileage is: 33.333333333333
*/

$n=new Car();
$n->start();
$n->stop();
    $m->getMilage("20","10");

    /*
Car is Started
Car is Stopped
Honda Mileage is: 2


    */
