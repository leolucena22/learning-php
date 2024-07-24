$contador = 10;
echo "Script pra contar até" . $contador . PHP_EOL;
for($i = 1; $i <= $contador; $i++){
    echo $i . "... ";
}
echo PHP_EOL . "Script finalizado!";

// Resultado
// "Script pra contar até 10"
// "1... 2... 3... 4... 5... 6... 7... 8... 9... 10..."
// "Script Finalizado!"
