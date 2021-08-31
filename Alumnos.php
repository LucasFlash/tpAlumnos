<?php


class Alumnos //Clase Madre
{
    protected $nombre;
    protected $apellido;
    protected $dni;
    protected $tipo;

    public function __construct($nombre, $apellido, $dni, $tipo="No especificado")
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
    }

    
    public function getNombreApellido() 
    {
        return $this->nombre . " " . $this->apellido;
    }

    public function getDNI()
    {
        return $this->dni;
    }
    

    public function setTipo($tipo) {
        $this->tipo = $tipoo;
    }
}


