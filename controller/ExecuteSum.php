<?php 
namespace controller;
use controller\ReadFile;
use controller\AddInteger;

class ExecuteSum
{
    public $sequence;
    public $result;

    public function resultSum($file)
    {
        $readFile = new ReadFile();
        $sumValues = new AddInteger();

        $readFile->getFile($file);

        $this->sequence = $readFile->getFile($file);
        $resultado = $readFile->arrayInteger();
        $sumValues->sumInteger($resultado);
        $this->result = $sumValues->displaySum();
    }
}


?>