<?php 

include_once "printer.php";

$printer = new GenericPrinter\Printer();
$printer->print(); 

$PDFPrinter = new GenericPrinter\PDFPrinter();

$metalPrinter = new Metal\Printer();