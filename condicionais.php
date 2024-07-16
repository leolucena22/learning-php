<?php

echo "<h3>Condicionais</h3>";

echo "<br>";

echo "<h4>if | else | elseif</h4>";

$userDaniel = "danielhe4rt";
$passDaniel = "secret123";

$userCaio = "caioarruda";
$passCaio = "caiozin123";

if ($userDaniel == "danielhe4rt" && $passDaniel == "secret123") {
    echo "Olá danielhe4rt, seja bem vindo";
} else if ($userCaio == "caiozin" && $passCaio == "321321") {
    echo "Olá caiozin, seja bem vindo";
} else {
    echo "Credenciais incorretas";
}

echo "<br><br>";

echo "<h4>Switch-Case</h4>";

echo "<br>";

$comando = "!he4rt";

switch($comando){
    case "!site":
        echo "Link: https://heartdevs.com";
        echo "Esse é o site oficial";
        break;
    case "!he4rt":
        echo "Entre no nosso discord: https://discord.com/he4rt";
        echo "Esse é o discord oficial";
        break;
    case "!comandos":
        echo "Segue a lista de comandos";
        echo "!he4rt !site";
        break;
    default:
        echo "nada acontece feijoada";
        break;
}
// return Entre no nosso discord: https://discord.com/he4rt Esse é o discord oficial

echo "<br><br>";

echo "<h4>Match</h4>";

echo "<br>";

$comando = "!he4rt";
echo match($comando) {
    "!site" => "Link: https://heartdevs.com",
    "!he4rt", "!discord" => "Entre no nosso discord: https://discord.com/he4rt",
    default => "nada acontece feijoada"
}; // "Entre no nosso discord: https://discord.com/he4rt"

echo "<br>";

echo match("heart devs") {
    "!site" => "Link: https://heartdevs.com",
    "!he4rt", "!discord" => "Entre no nosso discord: https://discord.com/he4rt",
    default => "nada acontece feijoada"
};

echo "<br>";

$idade = 21;
$result = match (true) {
    $idade >= 65 => 'Idoso',
    $idade >= 25 => 'Adulto',
    $idade >= 18 => 'Jovem adulto',
    default => 'Criança',
};

echo $result; // "Jovem Adulto"

echo "<br><br>";

echo "<h4>Ternário</h4>";

echo "<br>";

$nickname = 'danielhe4rt';

$who = $nickname == "jorge123" ? "é o jorge online" : "não é o jorge online";

echo $who; //  não é o jorge online

echo "<br><br>";

echo "<h4>Coalescência Nula</h4>";

echo "<br>";

$descricaoPorCodigo = array(
    1 => 'Este usuário já existe.',
    2 => 'Senha incorreta.',
    3 => 'Este usuário está bloqueado.',
);

// Exemplo utilizando operador ternário - Retorna 'Alguma coisa deu errado', pois a chave 5 não existe
return isset($descricaoPorCodigo[5]) ? $descricaoPorCodigo[5] : 'Alguma coisa deu errado.';

// A lógica acima pode ser simplicada utilizando o operador de coalescência nula
return $descricaoPorCodigo[5] ?? 'Alguma coisa deu errado.';