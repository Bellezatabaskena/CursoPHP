<?php // etiqueta de apertura php

/* Este es un comentario
    multilínea en PHP. */

// Declarar variables
$variable;
// Asiganando una variable
$variable = 1;

/*
Tipo de datos en las variables
*/

// String o cadenas de texto
$nombre = "Perla";
//$segundoNombre = '';

// Númerico entero
$edad = 42;

// Flotante o con punto decimal

$precio = 325;

// Booleanos

$activo = true;
$inactivo = false;

// Arreglo

$colores = array("Blanco", "Negro", "Azul");

// Objetos

class Persona
{
    public $nombre;
    public $edad;
}

$persona = new Persona;
$persona->nombre = "Perla";
$persona->edad = 42;

echo "Hola mi nombres es {$nombre}  
mi edad es de {$edad} años,
hoy entre al curso de php y me costo $$precio";

?>