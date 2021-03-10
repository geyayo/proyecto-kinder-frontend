<?php

class ControladorMenu{
    // Declaramos el metodo publico 
    static public function ctrMostrarMenu($item, $valor){
        // inciamos el parametro al modelo
        $tabla = "menu";
        // pedimos una respuesta al modelo, donde se instacia la clases
        $respuesta = ModeloMenu::mdlMostrarMenu($tabla, $item, $valor);

        return $respuesta;
    }
}
