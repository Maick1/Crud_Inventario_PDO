<?php
require "./inc/session_start.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include "./inc/head.php";
    ?>
</head>

<body>

    <?php
    //Comprobacion para cargar vistas
    if (!isset($_GET['vista']) || $_GET['vista'] == "") {
        //asigno valor por defecto
        //Se carga dinamicamente
        $_GET['vista'] = "login";
    }

    //si el valor de get coincide con una vista
    if (
        is_file("./vistas/" .$_GET['vista'] . ".php") &&  $_GET['vista'] != "login"
        && $_GET['vista'] != "404"
    ) {
        include "./Inc/navbar.php";

        include "./vistas/" . $_GET['vista'] . ".php";

        include "./Inc/script.php";
    } else {
        if($_GET['vista']=="login"){

            include "./vistas/login.php";
        }else{
            include "./vistas/404.php";
        }

    }
?>

</body>

</html>