<?php

require_once 'Pelicula.php';
require_once 'Cine.php';

function buscarPorDirector(array $cines, string $director): array
{
    $resultado = [];

    foreach($cines as $cine) { // Recorremos el cine
        foreach($cine->getPelicula() as $pelicula) { // Recorremos las peliculas por cine
            if ($pelicula->getDirector() === $director) {
                $resultado [] = [
                    "Cine" => $cine->getNombre(),
                    "Pelicula" => $pelicula->getNombre(),
                ];
            }
        }
    }
    return $resultado;
}

// Ejecución
$pelicula1 = new Pelicula("Inception", 148, "Christopher Nolan");
$pelicula2 = new Pelicula("The Godfather", 175, "Francis Ford Coppola");
$pelicula3 = new Pelicula("Parasite", 132, "Bong Joon-ho");
$pelicula4 = new Pelicula("The Matrix", 136, "Lana & Lilly Wachowski");

$cine1 = new Cine ("Cineplex Multisala", "Barcelona");
$cine2 = new Cine ("Hoytz de Valencia", "Valencia");
$cine3 = new Cine ("Cinesa Madrid", "Madrid");
$cine4 = new Cine ("Cinesa Diagonal", "Barcelona");

$cine1->agregarPelicula($pelicula1);
$cine1->agregarPelicula($pelicula2);

$cine2->agregarPelicula($pelicula2);
$cine2->agregarPelicula($pelicula3);

$cine3->agregarPelicula($pelicula3);
$cine3->agregarPelicula($pelicula4);

$cine4->agregarPelicula($pelicula1);
$cine4->agregarPelicula($pelicula4);

$cine1->mostrarPeliculas();
echo PHP_EOL;
$cine2->mostrarPeliculas();
echo PHP_EOL;
$cine3->mostrarPeliculas();
echo PHP_EOL;
$cine4 ->mostrarPeliculas();
echo PHP_EOL;