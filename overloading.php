<?php

// function overloading

function add(){
    $args = func_get_args();
    $sum=0;
    foreach($args as $arg){
        $sum+=$arg;
    }
    return $sum;
    
}

$sum=add(1,2,3,4,5);
echo $sum;