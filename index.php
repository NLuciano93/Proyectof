<?php
    session_start();

    include('config/config.php');

    $modulo = "index";

    if ( isset($_REQUEST["m"]))
    {
        if ($_REQUEST["m"] == "registro" || $_REQUEST["m"] == "login") {

             switch( $_REQUEST["m"] ){
           
                       case "registro":
                             $modulo = "registro";
                             break;


                         case "login":
                            $modulo = "login";
                            break;

                            case "default":
                         echo "error404";


                         } 


                }   

                else{ 

                    
                    if (isset($_SESSION["usuario"])) {
                                
                            

                                 
                                    switch( $_REQUEST["m"] ){
                                       
                                       case "registro":
                                             $modulo = "registro";
                                             break;


                                         case "login":
                                            $modulo = "login";
                                            break;

                                        
                                        case "busqueda":
                                            $modulo = "busqueda";
                                            break;

                                        case "perfil":
                                            $modulo = "perfil";
                                            break;

                                        case "perfilacceso":
                                            $modulo = "perfilacceso";
                                            break;


                                        case "reco":
                                            $modulo = "recomendaciones";
                                            break;
                                        
                                        case "logout":
                                            $modulo = "logout";
                                            break;
                                     
                                     
                                        case "default":
                                            echo "error404";

        
                                 }


                        } else { ?>

                            <div class="alert alert-danger d-flex justify-content-center" role="alert">
                                             <b>DEBE INICIAR SESIÓN PARA ACCEDER AL CONTENIDO</b>
                            </div>




                     <?php   }

            }

        } 
 


    include('vistas/' . $modulo . '/index.php'); 

?>