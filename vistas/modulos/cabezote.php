<!-- ========== MENU ========== -->
<header class="container-fluid navbar-dark bg-primary menu">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
                <img src="http://localhost/proyecto-kinder/backend/vistas/img/plantilla/logo.png" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon colorIcon"></span> -->
                <span class="navbar-toggler-icon">   
                    <i class="fa fa-bars" style="color:#fff; font-size:28px;"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav ml-auto">
                    <?php
                        $item = null;
                        $valor = null;
                        // Mando a llamar con un objeto información del menu de la base de datos
                        $categorias = ControladorMenu::ctrMostrarMenu($item, $valor);

                        // Utilizamos un foreach para hacer un recorrido sobre el arreglo que viene de la variable $categorias
                        foreach ($categorias as $key => $value) {
                            echo '<li class="nav-item active">
                                    <a class="nav-link" href="'.$value["ruta"].'">'.$value["categoria"].'</a>
                                </li>';
                        }
                        
                    ?>
                </ul>
            </div>
        </nav>
    </div>
</header>