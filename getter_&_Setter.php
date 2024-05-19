<?php

/*
Getter and setter are crucial component of object-oriented programming in PHP. They provide a 
controlled interface for accessing and modifying the internal state of objects, promoting 
encapsulation and maintaining a clear separation between an object's implementation details and
it's external usage .
*/

class Account{
    private $accountNumber;
    private $balance;

    public function deposit(){
        echo "Deposit";
    }

    public function withdraw(){
        echo "Withdraw";
    }

}

$aac = new Account();
$acc->balance=10000;
$acc->withdraw(9999);