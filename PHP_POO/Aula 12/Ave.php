<?php

require_once 'Animal.php';

class Ave extends Animal
{
    private $corPena;


    function locomover()
    {
        echo "<p>Voando</p>";
    }

    function alimentar()
    {
        echo "<p>Comendo frutas</p>";
    }

    function emitirSom()
    {
        echo "<p>Som de Ave</p>";
    }


    public function getCorPena()
    {
        return $this->corPena;
    }


    public function setCorPena($corPena): void
    {
        $this->corPena = $corPena;
    }



}