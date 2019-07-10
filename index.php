<?php
    session_start();

    include('config/config.php');

    $modulo = "index";

    if ( isset($_REQUEST["m"]) )
    {
        switch( $_REQUEST["m"] ){

            case "bus_centro":
                $modulo = "busqueda_centro";
                break;

            case "bus_profe":
                $modulo = "busqueda_profe";
                break;

            case "perfil_centro":
                $modulo = "perfil_centro";
                break;

            case "perfil_profe":
                $modulo = "perfil_profe";
                break;

            case "perfil_u":
                $modulo = "perfil_u";
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