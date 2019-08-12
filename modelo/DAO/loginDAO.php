<?php 
    include PATH_HELPERS . '/database_helper.php';


    if ( isset( $_POST["user_name"] ) && isset( $_POST["password"] ) && 
         $_POST["user_name"] != "" && $_POST["password"] != "" ){

        $conexion = getConexion();

        $consulta = "SELECT * " . 
                    "FROM usuarios " .
                    "WHERE usr_mail = '" . $_POST["user_name"] . "'" .
                    " AND usr_contrasena = '" . $_POST["password"] . "'";

        $resultado = $conexion->query( $consulta );


        if ( $resultado->num_rows == 1  ){

            //Obtengo el nombre del usuario

            $usuario = $resultado->fetch_assoc();

            $_SESSION["usuario"] = $usuario["usr_nombre"];
            $_SESSION["id_usuario"] = $usuario["usr_id"];
            $_SESSION["tel"] = $usuario["usr_tel"];
            $_SESSION["mail"] = $usuario["usr_mail"];
        
            $_SESSION["foto"] = $usuario["usr_foto"];
            $_SESSION["facebook"] = $usuario["usr_facebook"];
            $_SESSION["instagram"] = $usuario["usr_instagram"];
            $_SESSION["twitter"] = $usuario["usr_twitter"];
            $_SESSION["edad"] = $usuario["usr_edad"];
            $_SESSION["descripcion"] = $usuario["descripcion"];

           

            $consulta ="SELECT * " . 
                        "FROM usuario_centro " .
                        "WHERE usr_centro_id = '" . $usuario["usr_id"] . "'";

            $resultado = $conexion->query( $consulta );
            
            if ( $resultado->num_rows == 1) {
                        
                            $_SESSION["tipo_usuario"]= "centro";
                            $usuariocentro = $resultado->fetch_assoc();
                            $_SESSION["direccion"]= $usuariocentro["usr_centro_direccion"];
                            $_SESSION["horarios"]= $usuariocentro["usr_centro_horarios"];

                        }
                
                else {

            $consulta ="SELECT * " . 
                        "FROM usuario_profe " .
                        "WHERE usr_pf_id = '" . $usuario["usr_id"] . "'";

            $resultado = $conexion->query( $consulta ); 

                if ( $resultado->num_rows == 1) {
                     $_SESSION["tipo_usuario"]= "profe";

                     $usuarioprofe = $resultado->fetch_assoc();
                     $_SESSION["educacionfisica"]= $usuarioprofe["pf_educ_fisica"];
                    $_SESSION["cv"]= $usuarioprofe["pf_cv"];

                    if ($_SESSION["educacionfisica"] == 1 ) {

                        $_SESSION["educacionfisica"]="Profesorado de Educación Física";
                    }

                    else{

                        $_SESSION["educacionfisica"]="no";


                    }


                }
                else{
                        $_SESSION["tipo_usuario"]="comun";     

                }

                } 

             $consulta ="SELECT * " . 
                        "FROM localidad " .
                        "WHERE loca_id = '" . $usuario["usr_localidad"] . "'";

            $resultado = $conexion->query( $consulta );

            if ($resultado->num_rows == 1) {
                $nombrelocalidad = $resultado->fetch_assoc();

                $_SESSION["localidad"] = $nombrelocalidad["loca_nombre"]; 
               
            }
            else {

                 $_SESSION["localidad"]="";
            }


        }
        else{ ?>

           <div class="alert alert-danger d-flex justify-content-center" role="alert">
                                             <b>Usuario y/o contraseña no valida</b>
                            </div>
            
    <?php    }
    }
    else{ ?>
         <div class="alert alert-danger d-flex justify-content-center" role="alert">
                                             <b>Debe completar el usuario y la contraseña</b>
                            </div>
        
<?php    }