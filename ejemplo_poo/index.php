<?php
//Clase Persona
class Persona
{
    private $nombre;
    private $edad;

    // Constructor
    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    //Metodo
    public function obtenerInfo()
    {
        return "Nombre: {$this->nombre}, Edad: {$this->edad}";
    }
}

//Crear objeto de clase Persona
$persona1 = new Persona("Juan", 20);

//Imprimir persona1
echo $persona1->obtenerInfo();
?>