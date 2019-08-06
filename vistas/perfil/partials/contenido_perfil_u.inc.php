 <div class="container">
        <div class="row">
            <div class="col-4 border"> 
                        <div class="card w-100 ">
                          <img src="<?= FILES . '/perfiles/'. $_SESSION["foto"] ?>" class="card-img-top border rounded-circle" style="max-width: 300px; max-height: 300px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?= $_SESSION["usuario"] ?></h5>


 


                           <?php  include('barrasocial_perfil.php') ?>
                            
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Edad: <?= $_SESSION["edad"]?></li>
                            <li class="list-group-item">Localidad: <?= $_SESSION["localidad"]?></li>
                            <li class="list-group-item">Mail de contacto: <?= $_SESSION["mail"]?></li>
                            
                          </ul>
                          <div class="card-body">
                                  <?php
                                    include_once PATH_DAOS . '/perfiltotallikesDAO.php';

                                    ?>
                            <span class="btn btn-info btn-lg "><i class="far fa-thumbs-up"></i> <?= $TotalLikes?></span>
                          </div>
                        </div>
            </div>

            <div class="col-8 border shadow-lg p-3 mb-5 bg-white rounded"> 
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Foto mes a mes</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Progreso</a>
                          </li>
                          
                          <li class="nav-item">
                            <a class="nav-link" id="comentario-tab" data-toggle="tab" href="#comentarios" role="tab" aria-controls="comentarios" aria-selected="false">Comentarios</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="actualizar-tab" data-toggle="tab" href="#actualizar" role="tab" aria-controls="actualizar" aria-selected="false">Actualizar datos</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            
                            <div>
                                <form enctype="multipart/form-data" action="index.php" method="POST">
                                  <input type="hidden" name="m" value="perfil">
                                    <div class="form-group">
                                      <label for="exampleFormControlFile1">Agrega foto</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto" required>
                                    </div>
                                    <input type="submit" name="submit" value="PUBLICA TU FOTO" class="btn btn-primary">
                                  </form>

                              </div>

                            <?php 

                              include_once PATH_VIEWS .'/perfil/partials/subirfoto.php';


                                        ?>


                   <div class="container-fluid mt-3">
                            <div class="row">
                                <?php
                                include_once PATH_DAOS . "/fotosDAO.php";
                                include_once PATH_HELPERS . "/html_helper.php";

                                $resultado= mostrarfotos($_SESSION["id_usuario"]);

                                while ($fotosalbum = $resultado->fetch_assoc()) {
                                    crearHTMLfotosalbum($fotosalbum["nombrefoto"], $fotosalbum["fecha_foto"]);
                                  }  




                                ?>



                                </div>

                    </div>



             </div>
                          

                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                      

                          

                          <div class="tab-pane fade" id="comentarios" role="tabpanel" aria-labelledby="comentario-tab">                                   

                            <?php
                                          include_once PATH_DAOS . '/postcomentarioDAO.php';
                                          include_once PATH_HELPERS . '/html_helper.php';

                                          $resultadocoment= mostrarcomentarios($_SESSION["id_usuario"]);

                                          while ($cardcoment = $resultadocoment->fetch_assoc()) {
                                              crearHTMLComent($cardcoment["id_usr_comentante"], $cardcoment["calificacion"], $cardcoment["cont_comentario"]);
                                            }  


                                 ?>
                                   
                                 </div>

                          




                           <div class="tab-pane fade" id="actualizar" role="tabpanel" aria-labelledby="actualizar-tab">

                                <?php

                                  include_once PATH_DAOS . "/actualizacionperfilDAO.php";
                                          

                                ?>




                                                <div class="tab-pane fade show active shadow-lg p-3 mb-5 bg-white rounded" id="nav-usuario" role="tabpanel" aria-labelledby="nav-usuario-tab">
                                                        <form class="form-horizontal border" enctype="multipart/form-data" action="index.php" method="POST">
                                                      <fieldset>
                                                            <input type="hidden" name="m" value="perfil">
                                                     
                                                     
                                                      <!-- Text input-->
                                                      <div class="form-group">
                                                        <label class="col-md-6 control-label" for="Nombre">Nombre completo</label>  
                                                        <div class="col-md-6">
                                                        <input id="Nombre" name="nombre" type="text" placeholder="<?= $_SESSION["usuario"] ?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <!-- Text input-->
                                                      <div class="form-group">
                                                        <label class="col-md-6 control-label" for="telefono">Teléfono/celular</label>  
                                                        <div class="col-md-6">
                                                        <input id="telefono" name="telefono" type="text" placeholder="<?= $_SESSION["tel"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                     
                                                      <!-- Text input-->
                                                      <div class="form-group">
                                                        <label class="col-md-6 control-label" for="edad">Edad</label>  
                                                        <div class="col-md-6">
                                                        <input id="edad" name="edad" type="number" placeholder="<?= $_SESSION["edad"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <!-- Select Basic -->
                                                      <div class="form-group">
                                                        <label class="col-md-6 control-label" for="provincia">Provincia</label>
                                                        <div class="col-md-6">
                                                          <select name="provincia" class="form-control" id="provincia">
                                                             <?php
                                                                        include_once PATH_DAOS. '/busqueDAO.php';


                                                                             echo getComboProvincia();

                                                                       ?>
                                                         </select>
                                                        </div>
                                                      </div>

                                                      <!-- Select Basic -->
                                                      <div class="form-group">
                                                        <label class="col-md-6 control-label" for="localidad">Localidad</label>
                                                        <div class="col-md-6">
                                                            <select  name="localidad" id="localidad" class="form-control" >
                                                                 <option value="-1">Elegí primero Provincia </option>

                                                            </select>
                                                        </div>
                                                      </div>

                                                      <!-- foto -->

                                                      <div class="form-group">
                                                                        <label for="exampleFormControlFile1">Cambia foto perfil</label>
                                                                         <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto" >
                                                                  </div>              



                                                      <!-- Text input-->
                                                      <div class="form-group">
                                                        <label class="col-md-6 control-label" for="facebook">Perfil de Facebook (ejemplo: https://www.facebook.com/...)</label>  
                                                        <div class="col-md-6">
                                                        <input id="facebook" name="facebook" type="text" placeholder="<?= $_SESSION["facebook"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <!-- Text input-->
                                                      <div class="form-group">
                                                        <label class="col-md-6 control-label" for="twitter">Twitter</label>  
                                                        <div class="col-md-6">
                                                        <input id="twitter" name="twitter" type="text" placeholder="<?= $_SESSION["twitter"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <!-- Text input-->
                                                      <div class="form-group">
                                                        <label class="col-md-6 control-label" for="instagram">Instagram</label>  
                                                        <div class="col-md-6">
                                                        <input id="instagram" name="instagram" type="text" placeholder="<?= $_SESSION["instagram"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <input type="submit" name="actualizar" value="Actualizar" class="btn btn-primary">

                                                      </fieldset>
                                                    </form>

                                                     <h5>Nota: Al finalizar la actualización deberá volver a iniciar sesión para que se aplique los cambios.</h5> 

                                                      </div>







                           </div>

                        


                        </div>

                
            </div>








        </div>






    </div>
	
  <script src="<?= PATH_VENDOR ?>/jquery/jquery-3.4.1.min.js"></script>




        <script>
          

          $("#provincia").change( 

            function(){
              pedirDatos( $( "#provincia")[0].value );  
            }
             
          );

          function pedirDatos( id_provincia_seleccionada ){
          

            parametros = { id_provincia: id_provincia_seleccionada };

            $.get( "example.php", parametros )
              
              .done(function( data ) {

                $( "#localidad" ).html(data);
              })

              .fail(function() {
                alert( "Error al obtener las localidades" );
              })
             
          }
        </script>

