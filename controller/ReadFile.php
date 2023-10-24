<?php 
namespace controller;

class ReadFile
{
    protected $content;
    protected $array;
    protected $extension;
    public $response;

    public function getFile($file)
    {
        return $this->content = file_get_contents($file);
    }

    public function arrayInteger()
    {
    $caracteres_a_serem_removidos = ["[" => "", "]" => "", "," => ""];
    $string_e_inteiros = strtr($this->content, $caracteres_a_serem_removidos);
    $array = explode(" ", $string_e_inteiros);
       return $this->array =  $array;
    }
}
?>