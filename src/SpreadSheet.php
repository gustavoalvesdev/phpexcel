<?php 

namespace PHPExcel;

use PhpOffice\PhpSpreadsheet\Spreadsheet as OfficeSpreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

class SpreadSheet
{
    private function generateSpreadSheet()
    {
        $spreadsheet = new OfficeSpreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');
        return $spreadsheet;
    }

    public function writeSpreadSheet()
    {
        $writer = new Xlsx($this->generateSpreadSheet());
        $writer->save('hello_world.xlsx');
    }

    public function readSpreadSheet($spreadsheetFile)
    {
        $worksheet = IOFactory::load($spreadsheetFile);
        $worksheet = $this->generateSpreadSheet()->getActiveSheet();
        return $worksheet->getcell('A1');
    }
}
