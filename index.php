<?php

require_once __DIR__ . "/src/Modelo/Genero.php";
require_once __DIR__ . "/src/Modelo/Serie.php";
require_once __DIR__ . "/src/Modelo/Filme.php";
require_once __DIR__ . "/src/Modelo/Titulo.php";
require_once __DIR__ . "/src/calculo/CalculadoraDeMaratona.php";

echo "\n Bem vindo(a) ao ScreenMatch \n \n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    400
);

$filme->avalia(7);
$filme->avalia(6);
$filme->avalia(6.4);
$filme->avalia(9);

var_dump($filme);

echo $filme->media() . "\n";

echo "\n" . $filme->anoLancamento . "\n";
$serie = new Serie('Lost', 2007, genero::Drama, 10, 20, 30);

echo $serie->anoLancamento . "\n";
$serie->avalia(8);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Pra essa maratona, voce precisa de $duracao minutos";
