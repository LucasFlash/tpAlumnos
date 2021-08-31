<?php
require_once 'Alumnos.php';


class AlumnoLibre extends Alumnos
{
 
    public $notaFinal;


    
    public function __construct($nombre, $apellido, $dni, $notaFinal){
     parent::__construct($nombre, $apellido, $dni, $notaFinal);
        $this->notaFinal = $notaFinal;
         }
     
    public function getNota(){
        return $this->notaFinal; //Es una unica Nota Final
         }

    public function __toString(){
        return  " {$this->dni} . {$this->apellido} . {$this->nombre} . {$this->notaFinal} " ; 
         }
          
      } 