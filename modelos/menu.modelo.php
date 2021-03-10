<?php

// Requerimos conexcion a la base de datos
require_once "conexion.php";

// Creamos la clase
Class ModeloMenu{
    // Declaramos el metodo statico por que treamos parametros
    static public function mdlMostrarMenu($tabla){
        // Hacemos una conexcion con las propiedades PDO y realizamos la sentencia SQL
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt -> execute();
        // retornamos varias filas
        return $stmt -> fetchAll();
        // Cerramos la coexcion SQL
        $stmt -> close();
        // Cierre de conexion mas seguro anulamos el objeto $stmt
        $stmt = null;

    }
}
