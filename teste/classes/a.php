<?php

class Humano
{
       
    function __construct($nome, $sobre_nome) {
        $this->nome = $nome;
        $this->sobre_nome = $sobre_nome;
    }

        public function nomeCompleto()
    {
        return $this->nome.' '.$this->sobre_nome;
    }
}

$homem = new Humano('<p>João', 'Ribeiro</p>');
echo utf8_encode($homem->nomeCompleto());
$mulher = new Humano('<p>Sofia','Correa<p>');
echo utf8_encode($mulher->nomeCompleto());

//Classe Anonima, não pode ser alterada

$msg = new class 
{
    function teste()
    {
        echo "teste - classe anonima";
    }
}; //ponto e virgula no 

$msg->teste();
