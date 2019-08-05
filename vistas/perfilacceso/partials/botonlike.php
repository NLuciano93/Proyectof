                            <?php
                                      include_once PATH_HELPERS . '/database_helper.php';

                                      $conexion =getConexion();

                                      $consulta = "SELECT * " . 
                                                  "FROM likes " .
                                                  "WHERE id_usuario_likeado = '" . $perfilaccesoid . "'" .
                                                  " AND id_usuario_likeante = '" . $_SESSION["id_usuario"] . "'";

                                    $resultado = $conexion->query( $consulta );

                                     if ( $resultado->num_rows >= 1  ){
                                      
                                    ?>
                                    <button type="sumbit" name="nomegusta" value="1" class="btn btn-danger"><i class="far fa-thumbs-down"></i> Dislike</button></div>

                                  <?php  } else {
                                    ?>
                                  

                                    <button type="sumbit" name="megusta" value="1" class="btn btn-primary "><i class="far fa-thumbs-up"></i> Like</button></div>
                                    
                                  <?php  } ?>