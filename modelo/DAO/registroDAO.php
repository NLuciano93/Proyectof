<?php

// subir foto                             

                  if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
                                        

                        $fileTmpPath = $_FILES['foto']['tmp_name'];
                        $fileName = $_FILES['foto']['name'];

                        $fileNameCmps = explode(".", $fileName);
                        $fileExtension = strtolower(end($fileNameCmps));

                        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

                        $allowedfileExtensions = array('jpg', 'gif', 'png', 'webp');

                        if (in_array($fileExtension, $allowedfileExtensions)) {
                                                      
                        $dest_path = UPLOAD_PERFIL_PATH . "/" . $newFileName;
                                           
                      		if(move_uploaded_file($fileTmpPath, $dest_path))
                                           {
                                            
											$mensaje_form ="Se subio exitosamente el archivo";
                                         
                                            
                                           }
                                           else
                                           {

                                             $mensaje_form = "ERROR AL SUBIR EL ARCHIVO";
                                             echo $mensaje_form;
                               
                                           }
                                         }
                                         else{
                                             $mensaje_form = "El archivo de imagen no es valido.";
                                              echo $mensaje_form;

                                            
                                         }
                                       }

        //SuBIR CV
                                       
        if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
                                        

                        $fileTmpPathcv = $_FILES['cv']['tmp_name'];
                        $fileNamecv = $_FILES['cv']['name'];

                        $fileNameCmpscv = explode(".", $fileNamecv);
                        $fileExtensioncv = strtolower(end($fileNameCmpscv));

                        $newFileNamecv = md5(time() . $fileNamecv) . '.' . $fileExtensioncv;

                        $allowedfileExtensionscv = array('doc', 'docx', 'pdf');

                        if (in_array($fileExtensioncv, $allowedfileExtensionscv)) {
                                                      
                        $dest_pathcv = UPLOAD_CV_PATH . "/" . $newFileNamecv;
                                           
                      		if(move_uploaded_file($fileTmpPathcv, $dest_pathcv))
                                           {
                                            
											$mensaje_form ="Se subio exitosamente el archivo";
                                         
                                            
                                           }
                                           else
                                           {

                                             $mensaje_form = "ERROR AL SUBIR EL ARCHIVO";
                                             echo $mensaje_form;
                               
                                           }
                                         }
                                         else{
                                             $mensaje_form = "El archivo de imagen no es valido.";
                                              echo $mensaje_form;

                                            
                                         }
                                       }     
    
  if (isset ($_POST["registrar"])) {
    

    $nombre= $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $mail = $_POST["mail"];
    if (isset($_POST["edad"])) {
    	$edad = $_POST["edad"];
    }
     else{
     	$edad = '';
    }
    $localidad = $_POST["localidad"];
    $contrasena = $_POST["contrasena"];

    if (isset($_POST["facebook"])) {
    	$facebook = $_POST["facebook"];
    }
    else{
    	$facebook = '';
    }
    if (isset($_POST["twitter"])) {
    	$twitter = $_POST["twitter"];
    }
    else{
    	$twitter = '';
    }
        if (isset($_POST["instagram"])) {
    	$instagram = $_POST["instagram"];
    }
    else{
    	$instagram = '';
    }   

     if (isset($_POST["descripcion"])) {
    	$descripcion = $_POST["descripcion"];
    }
    else{
    	$descripcion = '';
    }


    



include_once PATH_HELPERS ."/database_helper.php";
    
    $conexion = getConexion();

    $sql= "SELECT * FROM usuarios WHERE usr_mail = '$mail'";

    $resultado = $conexion->query( $sql );


        if ( $resultado->num_rows == 1  ){

            echo "Ese mail esta en uso";

        }
        else{
            $sql = " INSERT INTO `usuarios` (`usr_id`, `usr_nombre`, `usr_tel`, `usr_mail`, `usr_localidad`, `usr_contrasena`, `usr_foto`, `usr_facebook`, `usr_instagram`, `usr_twitter`, `usr_edad`, `descripcion`, `usr_registro`) VALUES (NULL,".
                " '$nombre', '$telefono', '$mail', '$localidad', '$contrasena', '$newFileName', '$facebook', '$instagram', '$twitter', '$edad', '$descripcion', now())";

                $conexion->query($sql); 

                  if ($_POST["tipo"]=="centro") {
                    $ultimo_id = $conexion->insert_id;
                    $direccion = $_POST["direccion"];
                    $horarios = $_POST["horarios"];

                    $sql = "INSERT INTO usuario_centro (usr_centro_id, usr_centro_direccion, usr_centro_horarios) VALUES ('$ultimo_id','$direccion', '$horarios')";                

                    $conexion->query($sql);

                    if (isset($_POST["musculacion"])) {
                    	$musculacion = $_POST["musculacion"];
                    	 $sql = "INSERT INTO actividades_usario_centro (id_centro, id_act_centro) VALUES ('$ultimo_id','$musculacion')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["crossfit"])) {
                    	$crossfit = $_POST["crossfit"];
                    	 $sql = "INSERT INTO actividades_usario_centro (id_centro, id_act_centro) VALUES ('$ultimo_id','$crossfit')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["funcional"])) {
                    	$funcional = $_POST["funcional"];
                    	 $sql = "INSERT INTO actividades_usario_centro (id_centro, id_act_centro) VALUES ('$ultimo_id','$funcional')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["yoga"])) {
                    	$yoga = $_POST["yoga"];
                    	 $sql = "INSERT INTO actividades_usario_centro (id_centro, id_act_centro) VALUES ('$ultimo_id','$yoga')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["zumba"])) {
                    	$zumba = $_POST["zumba"];
                    	 $sql = "INSERT INTO actividades_usario_centro (id_centro, id_act_centro) VALUES ('$ultimo_id','$zumba')";                

                    	$conexion->query($sql);
                    	
                    }
                     

                  }

                  if ($_POST["tipo"]=="profe") {
                  	$ultimo_id = $conexion->insert_id;
                  	if (isset($_POST["profeED"])) {
                  		$profe = $_POST["profeED"];
                  	}
                  	else{
                  		$profe = 0;

                  	}
                  	$sql = "INSERT INTO usuario_profe (usr_pf_id, pf_educ_fisica, pf_cv) VALUES ('$ultimo_id','$profe', '$newFileNamecv')";                

                    $conexion->query($sql);

                    if (isset($_POST["personaltrainer"])) {
                    	$personaltrainer = $_POST["personaltrainer"];
                    	 $sql = "INSERT INTO especialidades_usuarios_profesores (id_profesor, id_esp_prof) VALUES ('$ultimo_id','$personaltrainer')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["deportes"])) {
                    	$deportes = $_POST["deportes"];
                    	 $sql = "INSERT INTO especialidades_usuarios_profesores (id_profesor, id_esp_prof) VALUES ('$ultimo_id','$deportes')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["funcional"])) {
                    	$funcional = $_POST["funcional"];
                    	 $sql = "INSERT INTO especialidades_usuarios_profesores (id_profesor, id_esp_prof) VALUES ('$ultimo_id','$funcional')";                

                    	$conexion->query($sql);
                    	
                    }

                    if (isset($_POST["crossfit"])) {
                    	$crossfit = $_POST["crossfit"];
                    	 $sql = "INSERT INTO especialidades_usuarios_profesores (id_profesor, id_esp_prof) VALUES ('$ultimo_id','$crossfit')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["yoga"])) {
                    	$yoga = $_POST["yoga"];
                    	 $sql = "INSERT INTO especialidades_usuarios_profesores (id_profesor, id_esp_prof) VALUES ('$ultimo_id','$yoga')";                

                    	$conexion->query($sql);
                    	
                    }
                     

                  	
                  }

             header("Location: index.php");

        }


 

    


  }

