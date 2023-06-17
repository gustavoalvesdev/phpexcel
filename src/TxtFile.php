<?php 

namespace PHPExcel;

class TxtFile
{

    private function open($file)
    {
        return fopen($file, 'w');
    }

    public function write($file, $text)
    {
        $myFile = $this->open($file);
        fwrite($myFile, $text);
        $this->close($myFile);
    }

    private function close($file)
    {
        fclose($file);
    }

}
