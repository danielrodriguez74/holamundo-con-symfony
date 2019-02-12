<?php

namespace AppBundle\Modelos\Entity;

class Saludo{
    
    public $nombre;
    public $apellido;
    public $saludo;

    function __construct($nombre, $apellido, $saludo)
 	{
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->saludo=$saludo;
    }

}