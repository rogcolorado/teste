<?php


#Funcoes
//sem parametro

echo ('<h1>Início da aplicação</h1>');


function executar()
{
   $nome = "Rogério";
   print('<h2>A função foi executada</h2>');
   print("<h3>$nome</h3>") ;
}

executar();

#Função com Parametros

 function adicionar($a, $b)
 {
     $res = $a + $b;
     return"$a + $b = " .$res; 
 }
 
echo adicionar(10, 20);

$a = 10; 
function fun()
{
    global $a; # para trazer o valor 10 para dentro da fução é necessário usar GLOBAL
    $a = 20; #O VALOR 10 AGORA É TRAZIDO PARA FUNÇÃO E SUBSTITUÍDO POR 20
}

 
fun();
echo "<pre>$a</pre>"; #Valor 20 será impresso


$a = function($mensagem)
{
    echo "<p>Olá: $mensagem</p>";
};

$a('Aqui estou!');

$andar = function($metros)
{
    return "Andei $metros";
};
                                                                               echo $andar(200);                                                                              
                                                                              # FUNÇÃO CLOSURE   
$x = 20;
$y = 30;

$minhaFun = function($z) use($x, $y)
{
    echo "<pre>$z - $x - $y</pre>";
};

$minhaFun(10);
echo "<p>y = $y</p>";

#Arrow Functions
$x = 20;
$y = 30;
$minhaFun1 = fn($z) => "$x - $y - $z fui";
echo $minhaFun1(50);

