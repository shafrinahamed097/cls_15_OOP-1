<?php

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

function printdoc($printer){
    $printer->print();
}

$pdf = new PDFPrinter();
$paper = new PaperPrinter();
$threeDPrinter = new ThreeDPrinter();

printdoc($threeDPrinter);





