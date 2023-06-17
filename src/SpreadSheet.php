<?php 

namespace PHPExcel;

use PhpOffice\PhpSpreadsheet\Spreadsheet as OfficeSpreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
}
