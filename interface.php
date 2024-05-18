<?php


/*
Interface are tools and concepts that technology developers use as points of interaction
between hardware and software components. They help all components within a system communicate
with each other via an input-output system and detailed protocols while also allowing them 
to function independently.

*/
interface Printer{
    function print();

}

class PDFPrinter implements Printer {
    public function print(){
        echo "Print from PDF Printer" ."\n";
    }
}

class PaperPrinter implements Printer{
    public function print(){
        echo "Print from Paper Printer" ."\n";
    }
}

class ThreeDPrinter  implements Printer{
    function print(){
        echo "Create 3D Printer" ."\n";
    }
}

function printdoc(Printer $printer){
    $printer->print();
}

$pdf = new PDFPrinter();
$paper = new PaperPrinter();
$threeDPrinter = new ThreeDPrinter();

printdoc($threeDPrinter);
