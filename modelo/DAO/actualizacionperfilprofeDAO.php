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
                                            
                                      $cv = $newFileNamecv;
                                         
                                            
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
                                       else{

                                          $cv = $_SESSION["cv"];

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
                                            
                                              if ($_POST["edad"] !='') {
                                              $edad = $_POST["edad"];
                                             
                                            }else{
                                              $edad = $_SESSION["edad"];
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

                                                include_once PATH_HELPERS .'/database_helper.php';
                                                   $conexion = getConexion();


                                                      $sql = "UPDATE usuarios SET usr_nombre = '$nombre', usr_tel = '$telefono', usr_edad = '$edad', usr_foto = '$foto', usr_facebook = '$facebook', usr_twitter = '$twitter', usr_instagram = '$instagram', descripcion = '$descripcion'WHERE usr_id = " . $_SESSION["id_usuario"];
                                                      
                                                      $conexion->query($sql);

                                                      $sqlloca = "UPDATE usuarios SET usr_localidad = '$localidad' WHERE usr_id = " . $_SESSION["id_usuario"];

                                                       $conexion->query($sqlloca);

                                                       $sqlprof = "UPDATE usuario_profe SET pf_cv = '$cv' WHERE usr_pf_id = " . $_SESSION["id_usuario"];

                                                        $conexion->query($sqlprof);


                                              if (isset($_POST["profed"])) {

                                                $soyprofe = $_POST["profed"];

                                                 $sqlsoyprof = "UPDATE usuario_profe SET pf_educ_fisica = '$soyprofe' WHERE usr_pf_id = " . $_SESSION["id_usuario"];

                                                        $conexion->query($sqlsoyprof);
                                                
                                              }
                                                  



                                         }              