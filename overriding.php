<?php

class Printer{
    function print(){
        echo "Print from Printer";
    }
}

class PaperPrinter extends Printer{
    function print(){
        echo "Print from Paper Printer";
    }

}

$paper = new PaperPrinter();
$paper->print();