<?php

class Pelicula
{
    private string $titulo;
    private int $duracion;
    private string $director;

    public function __construct(string $titulo, int $duracion, string $director)
    {
        $this->titulo = $titulo;
        $this->duracion = $duracion;
        $this->director = $director;
    }

    public function getNombre(): string
    {
        return $this->titulo;
    }

    public function getDuracion(): int
    {
        return $this->duracion;
    }

    public function getDirector(): string
    {
        return $this->director;
    }
}