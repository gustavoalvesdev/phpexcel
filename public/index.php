<?php 

require __DIR__ . '/../vendor/autoload.php';

use PHPExcel\SpreadSheet;
use PHPExcel\TxtFile;

$spreadSheet = new SpreadSheet();
$txtFile = new TxtFile();

#$spreadSheet->writeSpreadSheet();

$text = $spreadSheet->readSpreadSheet('hello_world.xlsx');
$file = $txtFile->open('spreadsheet_content.txt');

$txtFile->write($file, $text);
