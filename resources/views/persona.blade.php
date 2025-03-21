<?php

class Persona
{

    private $nombre;
    private $edad;
    private $rol;

    public function __construct($nombre, $edad, $rol)
    {

        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->rol = $rol;

    }

    public function retornarPersona(): string
    {
        return "Nombre: {$this->nombre}, Edad: {$this->edad}, Rol: {$this->rol}";

    }
}

//Arreglo datos
$datos = [
    ["Juan", 20, "Estudiante"],
    ["Ana", 25, "Docente"],
    ["Mario", 40, "Coordinador"]
];

//Crear objetos Persona
$personas = [];
foreach ($datos as $dato) {
    $personas[] = new Persona($dato[0], $dato[1], $dato[2]);
}

//Imprimir resultados
foreach ($personas as $persona) {
    echo $persona->retornarPersona() . "<br>";
}

?>