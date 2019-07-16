<?php
    session_start();

    include('config/config.php');

    $modulo = "index";

    if ( isset($_REQUEST["m"]) )
    {
        switch( $_REQUEST["m"] ){

            case "busqueda":
                $modulo = "busqueda";
                break;

            case "perfil":
                $modulo = "perfil";
                break;

            case "reco":
                $modulo = "recomendaciones";
                break;
            
            case "registro":
                $modulo = "registro";
                break;

            case "logout":
                $modulo = "logout";
                break;

            case "login":
                $modulo = "login";
                break;
                    
            case "default":
                echo "error404";

        }
    }

    include('vistas/' . $modulo . '/index.php'); 

?>