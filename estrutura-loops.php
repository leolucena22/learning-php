<?php

echo "<h3>Estruturas de Controle: Loops</h3>";


echo "<h4>Repetição: for</h4>";

$contador = 10;
echo "Script pra contar até " . $contador . PHP_EOL;
for($i = 1; $i <= $contador; $i++){
    echo $i . "... ";
}
echo PHP_EOL . "Script finalizado!";

// Resultado
// "Script pra contar até 10"
// "1... 2... 3... 4... 5... 6... 7... 8... 9... 10..."
// "Script Finalizado!"

echo "<br><br>";

$multiplicador = 5;
echo "Script pra imprimir a tabuada do $multiplicador" . PHP_EOL;
for($i = 1; $i <= 10; $i++){
    echo $multiplicador . " x " . $i  . " = " . ($multiplicador * $i) . PHP_EOL;
}
echo "Script finalizado!";

// Resultado
// "Script pra imprimir a tabuada do 5"
// "5 x 1 = 5"
// "5 x 2 = 10"
// "5 x 3 = 15"
// "5 x 4 = 20"
// "5 x 5 = 25"
// "5 x 6 = 30"
// "5 x 7 = 35"
// "5 x 8 = 40"
// "5 x 9 = 45"
// "5 x 10 = 50"
// "Script Finalizado!"

echo "<h4>Repetição: while</h4>";

$continuaLoop = true;
$i = 1;
echo "Script pra contar até 10" . PHP_EOL;
while ($continuaLoop){
    echo $i . "... ";
    if ($i == 10){
        $continuaLoop = false;
    }
    $i++;
}
echo PHP_EOL . "Script finalizado!";

// Resultado
// "Script pra contar até 10"
// "1... 2... 3... 4... 5... 6... 7... 8... 9... 10..."
// "Script Finalizado!"

echo "<h4>Repetição: foreach
</h4>";

$names = ["waasleey", "leozin044", "rychillie", "jpbrabo"];
// Iteração sem a indíce
foreach($names as $name){
    echo $name . " ";
}
// Retorno: waasley leozin044 rychillie jpbrabo

// Iteração com a indíce
foreach($names as $key => $name){
    echo $key . "." . $name . " ";
}
// Retorno: 0.waasley 1.leozin044 2.rychillie 3.jpbrabo

echo "<br><br>";

$pessoa = new StdClass;
$pessoa->nome = "danielhe4rt";
$pessoa->idade = 21;
$pessoa->trabalho = "Fullstack Developer";

foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}
// Resultado:
// nome: danielhe4rt
// idade: 21
// trabalho: Fullstack Developer

echo "<br><br>";

$pessoa = [
    "nome" => "danielhe4rt",
    "idade" => 21,
    "trabalho" => "Fullstack Developer"
];
foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}

// Resultado:
// nome: danielhe4rt
// idade: 21
// trabalho: Fullstack Developer

echo "<br><br>";

$pessoa = [
    "danielhe4rt",
    21,
    "Fullstack Developer"
];
foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}

// Resultado:
// 0: danielhe4rt
// 1: 21
// 2: Fullstack Developer

echo "<br><br>";

$pessoa = [
    "danielhe4rt",
    21,
    "Fullstack Developer"
];
foreach ($pessoa as $valor) {
    echo "$valor" . PHP_EOL;
}

// Resultado:
// danielhe4rt
// 21
// Fullstack Developer

echo "<br><br>";

echo "<h4>Continue</h4>";

for ($numero = 0; $numero < 5; $numero++) {
    if($numero % 2 === 1){
        continue;
    }

    echo $numero . " é par.";
    // Resultado:
    // 0: 0 é par
    // 2: 2 é par
    // 4: 4 é par
}

echo "<br><br>";

echo "<h4>Break</h4>";

while(true){
    echo "Olá seja bem vindo, qual mensagem deseja enviar?"  . PHP_EOL;
    echo "1. Bom dia" . PHP_EOL;
    echo "2. Boa tarde". PHP_EOL;
    echo "3. Boa noite" . PHP_EOL;
    echo "0. SAIR" . PHP_EOL;

    // Nota: a função readline, é apenas uma maneira de coletar a informação vinda de um usuario.
    $resposta = readline ('Digite uma opção: '); // digitei: 1

    if($resposta == '1') {
        echo 'Bom dia' . PHP_EOL;
    } else if($resposta == '2') {
        echo 'Boa tarde' . PHP_EOL;
    } else if ($resposta == '3') {
        echo 'Boa noite' . PHP_EOL;;
    }else if($resposta == '0') {
        echo 'Bye!' . PHP_EOL;
        break;
    }
}