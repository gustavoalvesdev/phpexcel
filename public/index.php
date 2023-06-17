<?php 

require __DIR__ . '/../vendor/autoload.php';

use PHPExcel\SpreadSheet;

$spreadSheet = new SpreadSheet();

$spreadSheet->writeSpreadSheet();
