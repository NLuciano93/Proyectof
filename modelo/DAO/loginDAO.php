<?php 
    include_once PATH_HELPERS . '/database_helper.php';


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

             $consulta ="SELECT * " . 
                        "FROM usuario_centro " .
                        "WHERE usr_centro_id = '" . $usuario["usr_id"] . "'";

            $resultado = $conexion->query( $consulta );
            if ( $resultado->num_rows == 1) {
                            $_SESSION["tipo_usuario"]= "centro";
                        }
                
                else {

            $consulta ="SELECT * " . 
                        "FROM usuario_profe " .
                        "WHERE usr_pf_id = '" . $usuario["usr_id"] . "'";

            $resultado = $conexion->query( $consulta ); 

                if ( $resultado->num_rows == 1) {
                     $_SESSION["tipo_usuario"]= "profe";

                }
                else{
                        $_SESSION["tipo_usuario"]="comun";     

                }

                }           

        }
        else{
            $mensaje_alerta = "Usuario y/o contraseña no valida";
        }
    }
    else{
        $mensaje_alerta = "Debe completar el usuario y la contraseña";
    }