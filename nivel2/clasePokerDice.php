<?php

class PokerDice 
{
    private $caras = ['As', 'K', 'Q', 'J', '7', '8'];
    private $caraActual;
    private static $totalTiradas = 0;

    public function __construct()
    {
        $this->caraActual = null;
    }

    // $this->para acceder al atributo
    // self::permite acceder a todos los atributos
    public function tirar() {
        $indiceAleatorio = array_rand($this->caras);
        $this->caraActual = $this->caras[$indiceAleatorio];
        self::$totalTiradas++;
        return $this->caraActual;
    }

    public function verUltimoTiro() {
        if ($this->caraActual === null) {
            return "No tirado";
        }
        return $this->caraActual;
    }

    public static function verTotalTiradas() {
        return self::$totalTiradas;
    }
}

?>