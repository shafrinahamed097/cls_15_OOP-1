<?php


class Account{
    private $balance;
    private $accountNumber;

    function __construct($accountNumber){
        $this->accountNumber = $accountNumber;
        $this->balance = 10000;
    }
}
