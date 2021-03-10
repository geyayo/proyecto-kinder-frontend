<?php

// Requerimos conexcion a la base de datos
require_once "conexion.php";

// Creamos la clase
Class ModeloMenu{
    // Declaramos el metodo statico por que treamos parametros
    static public function mdlMostrarMenu($tabla, $item, $valor){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            // retornamos varias filas
            return $stmt -> fetchAll();
        }
        // Cerramos la coexcion SQL
        $stmt -> close();
        // Cierre de conexion mas seguro anulamos el objeto $stmt
        $stmt = null;

    }
}
