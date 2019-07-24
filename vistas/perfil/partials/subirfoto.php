<?php

   if (isset($_POST["submit"])) {
                                               
                                                                                                   
                                //Guardo la imagen de la publicacion
                                   if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
                                        

                                       $fileTmpPath = $_FILES['foto']['tmp_name'];
                                        $fileName = $_FILES['foto']['name'];

                                        $fileNameCmps = explode(".", $fileName);
                                        $fileExtension = strtolower(end($fileNameCmps));

                                         $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

                                         $allowedfileExtensions = array('jpg', 'gif', 'png', 'webp');

                                        if (in_array($fileExtension, $allowedfileExtensions)) {
                                                      
                                           $dest_path = UPLOAD_IMAGE_PATH . "/" . $newFileName;
                                           
                                           if(move_uploaded_file($fileTmpPath, $dest_path))
                                           {
                                            

                                            include_once PATH_DAOS . "/fotosDAO.php";


                                           subirfoto($newFileName);
                                                 
                                         
                                            
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
                                     }

                                     ?>