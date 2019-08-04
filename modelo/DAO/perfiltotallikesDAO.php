   <?php                               


                                    include_once PATH_HELPERS .'/database_helper.php';

                                    $conexion = getConexion();

                                    $sqllike = "SELECT SUM(num_like) as TotalLikes FROM likes WHERE id_usuario_likeado = '" . $_SESSION["id_usuario"] ."'";

                                    $likes = $conexion->query($sqllike);

                                    $fila = $likes->fetch_assoc();

                                    $TotalLikes = $fila['TotalLikes'];
