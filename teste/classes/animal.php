<?php

class Animal {
    public $especie;
    public $peso;     
 
    function tipoEspecie()
    {
        $msg = "<p>Este animal da espécie {$this->especie}!</p>";
        return $msg;
    } 
}

$animal = new Animal();
$animal->especie = 'Mamíferos';

echo utf8_encode($animal->tipoespecie());

class Mamifero extends Animal
{
   public $quantidadePernas;
   public $temPelo;
   
   function temQuantasPerna(){
       $msg = "O animal é da especie {$this->especie} tem {$this->quantidadePernas} patas!";
       return utf8_encode($msg);
   }
      
}

$mamifero = new Mamifero();
$mamifero->especie = 'cavalo';
$mamifero->quantidadePernas = 4;

echo $mamifero->temQuantasPerna();