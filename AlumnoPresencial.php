<?php
require_once 'Alumnos.php';



class AlumnoPresencial extends Alumnos
{
	public static $diasHabiles = 0; // Para Determinar el nivel de asistencias
    CONST ASISTENCIA = 75; //Indica el minimo de asistencias
    public $inasistencias;
    protected $notas;
    



    
    public function __construct($nombre, $apellido, $dni, $inasistencias, $notas){
     parent::__construct($nombre, $apellido, $dni, $inasistencias, $notas);
        
             
                $this->inasistencias = $inasistencias;
                $this->notas = $notas;
                self::setDiasHabiles(); //Invoco Metodo Static
           }
  
    public static function setDiasHabiles($n=0){
          
          self::$diasHabiles += $n; 
           }



    public function getNota(){

          
                     $suma=0;
             	      foreach ($this->notas as $num) 
             	      {
                      if ($num < 4) {$suma=$suma + 1;} //Esta variable auxiliar me indicara cuantas notas menores a "4" tiene el alumno
                       }

                     $average = array_sum($this->notas) / count($this->notas); //Calculo del Promedio de las notas de los TP
                     $this->nota=$average;

          if ((($this->inasistencias / self::$diasHabiles) * 100 ) > SELF::ASISTENCIA) {return "1";}
             else { if ($suma > 0) {return  "1";} // Si almenos la nota de un TP es menor a "4", la nota final sera "1"
                   else { return $this->nota ;} // Si todas las notas son mayores a "4". la nota final sera el promedio.
              }                    
              }
       
    public function __toString(){
          return " {$this->dni} . {$this->apellido} . {$this->nombre} . {$this->nota} ";
          }
 
 }