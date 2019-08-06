 <?php
            include_once PATH_HELPERS . '/database_helper.php';

                         if (isset($_GET["comentar"])) {

                            $usuariocomentado = $perfilaccesoid;
                            $usuariocomentante = $_SESSION["id_usuario"];
                            $comentario = $_GET["comentario"];
                            $calificacion = $_GET["selected_rating"];
                            $numero_cal = 1;
                            $tipo = $_GET["tipo"];

                             $conexion = getConexion();

                             $sqlcoment ="INSERT INTO comentarios (id_usr_comentado, id_usr_comentante, calificacion, cont_comentario, cont_numero) VALUES ('$usuariocomentado', '$usuariocomentante', '$calificacion', '$comentario', '$numero_cal')";

                              $conexion->query($sqlcoment); 
                                       
                               echo '<script> window.location="index.php?m=perfilacceso&tipo=' . $tipo . '&nombre=' . $usuariocomentado .'"</script>';

                           
                         }



                        ?>