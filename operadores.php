<?php

echo "<h3>Operadores Aritméticos</h3>";

$num1 = 3;
$num2 = 2;

echo "Adição <br>";
echo $num1 + $num2;
echo "<br><br>";
echo "Subtração <br>";
echo $num1 - $num2;
echo "<br><br>";
echo "Multiplicação <br>";
echo $num1 * $num2;
echo "<br><br>";
echo "Divisão <br>";
echo $num1 / $num2;
echo "<br><br>";
echo "Potenciação <br>";
echo $num1 ** $num2;
echo "<br><br>";
echo "Resto <br>";
echo $num1 % $num2;

echo "<h3>Operadores de Comparação</h3>";

echo "Igualdade == <br><br>";

echo (0 == false) . PHP_EOL; //true
echo ('123' == 123) . PHP_EOL; //true
echo ('um' == 1) . PHP_EOL; //false
echo (123.0 == 123) . PHP_EOL; //true
/**
retorna: 1
1

1
 **/

echo "<br><br>";
echo "Diferença != <br><br>";

echo (0 != false) . PHP_EOL; //false
echo ('123' != 123) . PHP_EOL; //false
echo ('um' != 1) . PHP_EOL; //true
echo (123.0 != 123) . PHP_EOL; //false

/**
retorna:

1

 **/

echo "<br><br>";

echo "Idêntico === <br><br>";
echo (0 === false) . PHP_EOL; //false
echo ('123' === 123) . PHP_EOL; //false
echo ('um' === 1) . PHP_EOL; //false
echo (123.0 === 123) . PHP_EOL; //false

//É tudo falso :(, por isso não retorna nada

echo "<br><br>";

echo "Não Idêntico !== <br><br>";
echo (0 !== false) . PHP_EOL; //true
echo ('123' !== 123) . PHP_EOL; //true
echo ('um' !== 1) . PHP_EOL; //true
echo (123.0 !== 123) . PHP_EOL; //true

/**
retorna: 1
1
1
1
 **/

echo "<h3>Maior/menor que</h3>";

echo (2 < 3) . PHP_EOL; //true
echo (2 > 3) . PHP_EOL; //false
echo (2 <= 3) . PHP_EOL; //true
echo (2 >= 3) . PHP_EOL; //false

/**
retorna: 1

1

 **/

echo "<br><br>";

echo "<h3>Operadores de Arrays</h3>";

echo "<h4>União +<h4> </h4>";

$array1 = [0 => 'PHPBA', '1' => 'PHPSP', 2 => 'PHPSE'];
$array2 = [3 => 'he4rtdevs'];

print_r($array1 + $array2);

/**
Retorna:

Array
(
[0] => PHPBA
[1] => PHPSP
[2] => PHPSE
[3] => he4rtdevs
)
 **/

echo "<h4>Igualdade ==<h4> </h4>";


$array1 = [0 => 1];
$array2 = [0 => 1];

echo $array1 == $array2;

//Retorna: 1, significa que os valores dos arrays são iguais

echo "<br><br>";

echo "<h4>Diferença != ou <></h4>";

$array1 = [0 => 1];
$array2 = [0 => 2];

echo $array1 != $array2;

//Retorna: 1, significa que os valores dos arrays são diferentes

echo "<br><br>";

echo "<h4>Idêntico ===</h4>";

$array1 = [0 => 1];
$array2 = [0 => 1];

echo $array1 === $array2;

//Retorna: 1, significa que os valores dos arrays são iguais e do mesmo tipo (número inteiro)

echo "<br><br>";

echo "<h4>Não Idêntico !==</h4>";

$array1 = [0 => 1];
$array2 = [0 => '1'];

echo $array1 !== $array2;

//Retorna: 1, significa que os valores dos arrays não são iguais e/ou não são do mesmo tipo (número inteiro)

echo "<br><br>";

echo "<h3>Operadores Lógicos</h3>";

