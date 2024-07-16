<?php
var_dump("Leonardo");
var_dump(10);
var_dump(1.5);
var_dump(true);

echo "<br><br><br>";

// Forma explícita de declarar um array
$frutas = array("Banana", "Uva", "Manga", "Maçã");

// Forma resumida de declarar um array

$nomes = ["Leonardo", "Samara", "Eliano", "Lucimar"];

// Usando chave-valor
$cadastro = ["nome" => "Leonardo",
    "sobrenome" => "Lucena",
    "idade" => 24];

echo "<b>Imprindo usando chave</b> <br><br>";
echo $cadastro["sobrenome"];
echo "<br><br>";
echo "<br><br>";

echo "<b>Imprimindo usando posição</b> <br><br>";
echo $nomes[0];
echo "<br><br>";
echo $nomes[1];
echo "<br><br>";
echo $nomes[2];
echo "<br><br>";
echo $nomes[3];