<?php 
namespace controller;

class AddInteger
{
    public int $total = 0;

    public function sumInteger($values)
    {
        for($i=0; $i < count($values); $i++){
            // if(!is_int($values[$i])){
            //     die(var_dump("Foi indentificado um elemento que não se trata de um número inteiro."));
            // } else 
            // {
            //     $this->total = $this->total + $values[$i];
            // }

                $this->total = $this->total + $values[$i];
        }
        return $this->total;
    }

    public function displaySum()
    {
        return $this->total;
    }
}

/* $z = new AddInteger();
$z->sumInteger([3, 3, 3, 5]);
$z->displaySum(); */
?>