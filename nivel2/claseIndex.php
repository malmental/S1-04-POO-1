<?php

include 'clasePokerDice.php';

echo "===PROGRAMA: PokerDice===" . PHP_EOL;
echo "" . PHP_EOL;

// Creamos un dado
$dado1 = new PokerDice();

echo "Ultimo tiro: " . $dado1->verUltimoTiro() . PHP_EOL;
echo "Tiramos el dado: " . $dado1->tirar() . PHP_EOL;
echo "Utimo tiro: " . $dado1->verUltimoTiro() . PHP_EOL;
echo "Tiramos el dado de nuevo: " . $dado1->tirar() . PHP_EOL;
echo "Ultimo tiro: " . $dado1->verUltimoTiro() . PHP_EOL;
echo "TOTAL DE TIRADAS: " . PokerDice::verTotalTiradas() . PHP_EOL;
echo "" . PHP_EOL;

echo "=== TIRANDO LOS DADOS ===" . PHP_EOL;
echo "" . PHP_EOL;

// Primero creamos los 5 dados
$dados = [];
for ($i = 0; $i < 5; $i++) {
    $dados[] = new PokerDice();
}

// Creamos la funcion para tirar TODOS los dados
function tirarTodosLosDatos (array $dados)
{
    $resultados = [];
    foreach ($dados as $indice => $dado) {
        $resultado = $dado->tirar();
        $resultados[] = $resultado;
        echo "Dado: " . ($indice + 1) . ": " . $resultado . PHP_EOL;
    }
    return $resultados;
}

// Jugando
echo "Primera tirada: " . PHP_EOL;
tirarTodosLosDatos($dados);
echo "Total de tiradas: " . PokerDice::verTotalTiradas() . PHP_EOL;
echo "" . PHP_EOL;

echo "Segunda tirada: " . PHP_EOL;
tirarTodosLosDatos($dados);
echo "Total de tiradas: " . PokerDice::verTotalTiradas() . PHP_EOL;
echo "" . PHP_EOL;

echo "Tercera Tirada: " . PHP_EOL;
tirarTodosLosDatos($dados);
echo "Total de tiradas: " . PokerDice::verTotalTiradas() . PHP_EOL;
echo "" . PHP_EOL;

?>