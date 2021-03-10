<?php

class ControladorMenu{
    // Declaramos el metodo publico 
    public function ctrMostrarMenu(){
        // inciamos el parametro al modelo
        $tabla = "menu";
        // pedimos una respuesta al modelo, donde se instacia la clases
        $respuesta = ModeloMenu::mdlMostrarMenu($tabla);

        return $respuesta;
    }
}
