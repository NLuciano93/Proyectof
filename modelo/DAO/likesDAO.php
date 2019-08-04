<?php

include_once PATH_HELPERS . '/database_helper.php';





                                      
                                      if (isset($_GET["megusta"])) {
                                        $megusta = $_GET["megusta"];
                                        $usuariolikeado = $perfilaccesoid;
                                        $usuariolikeante = $_SESSION["id_usuario"];
                                        $tipo = $_GET["tipo"];

                                        $conexion = getConexion();

                                        $sql ="INSERT INTO likes (id_usuario_likeado, id_usuario_likeante, num_like) VALUES ('$usuariolikeado', '$usuariolikeante', '$megusta')";

                                        $conexion->query($sql); 
                                       
                                      echo '<script> window.location="index.php"</script>';

                                        
                                      }

                                      if (isset($_GET["nomegusta"])) {

                                        $usuariolikeado = $perfilaccesoid;
                                        $usuariolikeante = $_SESSION["id_usuario"];
                                        $tipo = $_GET["tipo"];

                                        $conexion = getConexion();

                                        $sql ="DELETE FROM likes WHERE id_usuario_likeado = '$usuariolikeado' AND id_usuario_likeante = '$usuariolikeante'";

                                        $conexion->query($sql); 
                                       
                                      echo '<script> window.location="index.php"</script>';

                                        
                                      }