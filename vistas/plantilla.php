<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="title" content="Kinder">
    <meta name="description" content="Una descripción del sitio">
    <meta name="keyword" content="palabras, claves, del, sitio">
    <?php
      // Mantener la ruta fija del proyecto
      $url = Ruta::ctrRuta();
    ?>    
    <!--CSS-->
    <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plugins/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plantilla.css">
    <link rel="stylesheet" href="<?php echo $url;?>vistas/css/cabezote.css">
    
  </head>
  <body>
    
    <?php
        /* ========== CABEZOTE ========== */
        include "modulos/cabezote.php";

        /* ========== CONTENIDO DINAMICO ========== */
        $rutas = array();
        $ruta = null;
        // evaluamos se se envian variables get
        if(isset($_GET["ruta"])){
          $rutas = explode("/", $_GET["ruta"]);
          
          $item = "ruta";
          $valor = $rutas[0];

          /* ========== URL AMIGABLES DE CATEGORIAS ========== */
          $rutaCategorias = ControladorMenu::ctrMostrarMenu($item, $valor);

          if(is_array($rutaCategorias) && $rutas[0] == $rutaCategorias["ruta"]){
            $ruta = $rutas[0];
          }

          /* ========== LISTA BLANCA DE URL'S AMIGABLES ========== */
          if($ruta != null){
            include "modulos/destacado.php";
          }else{
            include "modulos/error404.php";
          }
        }
    ?>

    <script src="<?php echo $url;?>vistas/js/plugins/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $url;?>vistas/js/plugins/popper.min.js"></script>
    <script src="<?php echo $url;?>vistas/js/plugins/bootstrap.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </body>
</html>



