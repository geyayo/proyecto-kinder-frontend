<?php

//requerimos para poder traer clases instanciadas de otros archivos
require_once "controladores/plantilla.controlador.php";

//Creamos un objeto e instanciamos una clase que esta en el controlador
$plantilla = new ControladorPlantilla();
//Ejecutamos un metodo 
$plantilla -> plantilla(); 