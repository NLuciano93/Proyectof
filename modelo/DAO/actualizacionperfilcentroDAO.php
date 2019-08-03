<?php

                                


                              include_once PATH_HELPERS .'/database_helper.php';
                                   $conexion = getConexion();

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
                                                                      
                                                      $foto = $newFileName;
                                                                   
                                                                      
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
                                                    else
                                                      {
                                                        $foto = $_SESSION["foto"];

                                                      }


              if (isset($_POST["actualizar"])) {

              
                                    if ($_POST["localidad"] != $_SESSION["localidad"]) {
                                              
                                              $localidad = $_POST["localidad"];

                                            }
                                            else{
                                              $localidad = $_SESSION["localidad"];
                                           }

                                            

                                            if ($_POST["nombre"] != '') {
                                              $nombre = $_POST["nombre"];
                                             
                                            }else{
                                              $nombre = $_SESSION["usuario"];
                                            }
                                            if ($_POST["telefono"] != '') {
                                              $telefono = $_POST["telefono"];
                                             
                                            }else{
                                              $telefono = $_SESSION["tel"];
                                            }
                                            
                                                                                        
                                            
                                             if ($_POST["facebook"] != '') {
                                              $facebook = $_POST["facebook"];
                                             
                                            }else{
                                              $facebook = $_SESSION["facebook"];
                                            }
                                             if ($_POST["twitter"] != '') {
                                              $twitter = $_POST["twitter"];
                                             
                                            }else{
                                              $twitter = $_SESSION["twitter"];
                                            }
                                             if ($_POST["instagram"] != '') {
                                              $instagram = $_POST["instagram"];
                                             
                                            }else{
                                              $instagram = $_SESSION["instagram"];

                                            }
                                            if ($_POST["descripcion"] != '') {
                                              $descripcion = $_POST["descripcion"];
                                             
                                            }else{
                                              $descripcion = $_SESSION["descripcion"];

                                            }
                                            if ($_POST["direccion"] != '') {
                                              $direccion = $_POST["direccion"];
                                             
                                            }else{
                                              $direccion = $_SESSION["direccion"];

                                            }
                                            if ($_POST["horarios"] != '') {
                                              $horarios = $_POST["horarios"];
                                             
                                            }else{
                                              $horarios = $_SESSION["horarios"];

                                            }

                                                include_once PATH_HELPERS .'/database_helper.php';
                                                   $conexion = getConexion();


                                                      $sql = "UPDATE usuarios SET usr_nombre = '$nombre', usr_tel = '$telefono', usr_edad = '$edad', usr_foto = '$foto', usr_facebook = '$facebook', usr_twitter = '$twitter', usr_instagram = '$instagram', descripcion = '$descripcion'WHERE usr_id = " . $_SESSION["id_usuario"];
                                                      
                                                      $conexion->query($sql);

                                                      $sqlloca = "UPDATE usuarios SET usr_localidad = '$localidad' WHERE usr_id = " . $_SESSION["id_usuario"];

                                                       $conexion->query($sqlloca);

                                                       $sqlcentro = "UPDATE usuario_centro SET usr_centro_direccion = '$direccion', usr_centro_horarios = '$horarios' WHERE usr_centro_id = " . $_SESSION["id_usuario"];

                                                        $conexion->query($sqlcentro);


                                              
                                                  



                                         }