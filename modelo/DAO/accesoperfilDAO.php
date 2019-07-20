<?php  
 include_once PATH_HELPERS . '/database_helper.php';

if (isset($_GET["tipo"])) {

	$conexion = getConexion();

 	 $consulta = "SELECT * " . 
                 "FROM usuarios " .
                 "WHERE usr_id = '" . $_GET["nombre"] . "'";

 	 $resultado = $conexion->query( $consulta ); 
	


	        if ( $resultado->num_rows == 1  ){

            //Obtengo el nombre del usuario

            $usuario = $resultado->fetch_assoc();

            $perfilaccesousuario = $usuario["usr_nombre"];
            $perfilaccesoid = $usuario["usr_id"];
            $perfilaccesotel = $usuario["usr_tel"];
            $perfilaccesomail = $usuario["usr_mail"];
        
            $perfilaccesofoto = $usuario["usr_foto"];
            $perfilaccesofacebook = $usuario["usr_facebook"];
            $perfilaccesoinstagram = $usuario["usr_instagram"];
            $perfilaccesotwitter = $usuario["usr_twitter"];
            $perfilaccesoedad = $usuario["usr_edad"];
            $perfilaccesodescripcion = $usuario["descripcion"];

           

            $consulta ="SELECT * " . 
                        "FROM usuario_centro " .
                        "WHERE usr_centro_id = '" . $usuario["usr_id"] . "'";

            $resultado = $conexion->query( $consulta );
            
            if ( $resultado->num_rows == 1) {
                        
                            $perfilaccesotipo = "centro";
                            $usuariocentro = $resultado->fetch_assoc();
                            $perfilaccesodireccion= $usuariocentro["usr_centro_direccion"];
                            $perfilaccesohorarios= $usuariocentro["usr_centro_horarios"];

                        }
                
                else {

            $consulta ="SELECT * " . 
                        "FROM usuario_profe " .
                        "WHERE usr_pf_id = '" . $usuario["usr_id"] . "'";

            $resultado = $conexion->query( $consulta ); 

                if ( $resultado->num_rows == 1) {
                     $perfilaccesotipo= "profe";

                     $usuarioprofe = $resultado->fetch_assoc();
                     $perfilaccesoeducacionfisica= $usuarioprofe["pf_educ_fisica"];
                    $perfilaccesocv= $usuarioprofe["pf_cv"];

                    if ($perfilaccesoeducacionfisica == 1 ) {

                        $perfilaccesoeducacionfisica="Profesorado de Educación Física";
                    }

                    else{

                        $perfilaccesoeducacionfisica ="no";


                    }


                }
                else{
                        $perfilaccesotipo="comun";     

                }

                } 

             $consulta ="SELECT * " . 
                        "FROM localidad " .
                        "WHERE loca_id = '" . $usuario["usr_localidad"] . "'";

            $resultado = $conexion->query( $consulta );

            if ($resultado->num_rows == 1) {
                $nombrelocalidad = $resultado->fetch_assoc();

                $perfilaccesolocalidad = $nombrelocalidad["loca_nombre"]; 
               
            }
            else {

                 $perfilaccesolocalidad="";
            }


        }

 	
 }

else{
	$incorrectoperfil= "el perfil es incorrecto";
}



function saberPerfil($id_usuario){

    $conexion = getConexion();

     $consulta = "SELECT * " . 
                 "FROM usuarios " .
                 "WHERE usr_id = '" . $id_usuario . "'";

     $resultado = $conexion->query( $consulta ); 
    


            if ( $resultado->num_rows == 1  ){

            //Obtengo el nombre del usuario

            $usuarioacc = $resultado->fetch_assoc();
           

            $consulta ="SELECT * " . 
                        "FROM usuario_centro " .
                        "WHERE usr_centro_id = '" . $usuarioacc["usr_id"] . "'";

            $resultado = $conexion->query( $consulta );
            
            if ( $resultado->num_rows == 1) {
                        
                            $perfilaccestipo = "centro";
                            
                        }
                
                else {

            $consulta ="SELECT * " . 
                        "FROM usuario_profe " .
                        "WHERE usr_pf_id = '" . $usuarioacc["usr_id"] . "'";

            $resultado = $conexion->query( $consulta ); 

                if ( $resultado->num_rows == 1) {
                     $perfilaccestipo= "profe";

 

                }
                else{
                        $perfilaccestipo="comun";     

                }

                } 

            

}
return $perfilaccestipo;
}





?>