<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Celupaisa</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

    <!-- Latest compiled fontawesome -->
    <script src="https://kit.fontawesome.com/a74cd81b4d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center py-3">Celupaisa</h2>
    </div>

    <div class="container-fluid bg-light green">

        <div class="container">

            <ul class="nav nav-justified py2 nav-pills">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                </li>

                <li class="nav-item">
                    <a  class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                </li>
            </ul>

        </div>
    </div>

    <div class="container-fluid">

        <div class="container py-5">

            <?php

            if(isset($_GET["pagina"])){

                if($_GET["pagina"] == "registro" ||
                    $_GET["pagina"] == "ingreso"  ||
                    $_GET["pagina"] == "inicio"   ||
                    $_GET["pagina"] == "editar"   ||
                    $_GET["pagina"] == "salir"){

                    include "paginas/". $_GET["pagina"].".php";

            }else{
                include "paginas/error404.php";
            }

        }else{

            include "paginas/registro.php";

        }


        ?>
    </div>

</div>

</body>
</html>