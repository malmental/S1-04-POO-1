<?php

class Cine
{
    private string $nombre;
    private string $poblacion;
    private array $peliculas = [];

    public function __construct(string $nombre, string $poblacion, array $peliculas = [])
    {
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->peliculas = $peliculas;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function agregarPelicula(Pelicula $pelicula): void
    {
        $this->peliculas[] = $pelicula;
    }

    public function getPelicula(): array
    {
        return $this->peliculas;
    }

    public function mostrarPeliculas(): void
    {
        echo "El cine: {$this->nombre} en {$this->poblacion}" . PHP_EOL;
        foreach($this->peliculas as $pelicula) {
            echo ".- " . $pelicula->getNombre() . " (" . $pelicula->getDuracion() . " min) - " . $pelicula->getDirector() . PHP_EOL;
        }
        echo PHP_EOL;
    }

    public function getPeliculaMasLarga(): Pelicula
    {
        $masLarga = $this->peliculas[0];
        foreach($this->peliculas as $pelicula){
            if ($pelicula->getDuracion() > $masLarga->getDuracion()){
                $masLarga = $pelicula;
            }
        }
        return $masLarga;
    }
}

?>