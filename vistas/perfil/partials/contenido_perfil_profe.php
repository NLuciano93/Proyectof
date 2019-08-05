    <div class="container">
        <div class="row">
            <div class="col-4 border"> 
                        <div class="card w-100 ">
                          <img src="<?= FILES . '/perfiles/'. $_SESSION["foto"] ?>" class="card-img-top border rounded-circle" style="max-width: 300px; max-height: 300px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?= $_SESSION["usuario"]?></h5>

                            <?php  include('barrasocial_perfil.php') ?>
                            
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Edad: <?= $_SESSION["edad"]?></li>
                            <li class="list-group-item">Localidad: <?= $_SESSION["localidad"]?></li>
                            <li class="list-group-item">Telefono: <?= $_SESSION["tel"]?></li>
                            <?php if ($_SESSION["educacionfisica"] == "Profesorado de Educación Física") { ?>
                              
                            
                            <li class="list-group-item">Estudio: <?= $_SESSION["educacionfisica"]?></li>

                            <?php } ?>

                            <li class="list-group-item">Mail de contacto: <?= $_SESSION["mail"]?></li>

                           
                          </ul>
                          <div class="card-body">
                               <?php
                                    include_once PATH_DAOS . '/perfiltotallikesDAO.php';

                                    ?>
                            <span class="btn btn-info btn-lg "><i class="far fa-thumbs-up"></i> x<?= $TotalLikes?></span>
                          



                             <div><span class="btn btn-info btn-lg"><i class="fas fa-star estrella"></i>x100</span></div>
                          </div>
                        </div>
            </div>

            <div class="col-8 border shadow-lg p-3 mb-5 bg-white rounded"> 
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="fotosprofe-tab" data-toggle="tab" href="#fotosprofe" role="tab" aria-controls="fotosprofe" aria-selected="true">Fotos</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="cvprofe-tab" data-toggle="tab" href="#cvprofe" role="tab" aria-controls="cvprofeprofile" aria-selected="false">CV</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="especialidadprofe-tab" data-toggle="tab" href="#especialidadprofe" role="tab" aria-controls="especialidadprofe" aria-selected="false">Especialidades</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" id="comentario-tab" data-toggle="tab" href="#comentarios" role="tab" aria-controls="comentarios" aria-selected="false">Comentarios</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="actualizar-tab" data-toggle="tab" href="#actualizar" role="tab" aria-controls="actualizar" aria-selected="false">Actualizar datos</a>
                          </li>
                          
                        </ul>
                       
                        <div class="tab-content" id="myTabContent">


                          <div class="tab-pane fade show active" id="fotosprofe" role="tabpanel" aria-labelledby="fotosprofe-tab">


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
                                    crearHTMLfotosalbumpyc($fotosalbum["nombrefoto"]);
                                  }  




                                ?>



                                </div>

                       </div>



                          </div>


                          <div class="tab-pane fade" id="cvprofe" role="tabpanel" aria-labelledby="cvprofe-tab">
                          <div class="container mt-3"> 
                            <table class="table table-bordered">
                                <tr>
                                  <td> <p>CV_<?= $_SESSION["usuario"]?></p></td>
                                  <td class="text-center"><a href="download.php?cv=<?= $_SESSION["cv"] ?>" class="btn btn-primary">Descargar</a></td>

                                </tr>

                            </table>
                            </div>


                            <?php

                            include_once PATH_DAOS . "/cvDAO.php";

                            $nomcv = obtenerCV($_SESSION["id_usuario"]);
                            
                            

                            ?>
                         
                           

                           


                          </div>
                          <div class="tab-pane fade" id="especialidadprofe" role="tabpanel" aria-labelledby="especialidadprofe-tab">
        
                             <?php
                                include_once PATH_DAOS .'/especialidadesprofeDAO.php';

                            ?>

                       <form class="form-horizontal" action="index.php" method="POST">
                               <input type="hidden" name="m" value="perfil">
                               <input type="hidden" name="id" value="<?= $_SESSION['id_usuario'] ?>">        

                                        <fieldset>                                       

                                       <!-- Multiple Checkboxes (inline) -->
                                        <div class="form-group">
                                          <label class="col-md-12 control-label" for="especialidad">Agregar o quitar actividades</label>
                                          <div class="col-md-12">
                                            <label class="checkbox-inline" for="especialidad-0">
                                              <input type="checkbox" name="personaltrainer" id="especialidad-0" value="1">
                                              Personal Trainer
                                            </label>
                                            <label class="checkbox-inline " for="especialidad-1">
                                              <input class="ml-2" type="checkbox" name="deporte" id="especialidad-1" value="2">
                                              Deporte
                                            </label>
                                            <label class="checkbox-inline" for="especialidad-2">
                                              <input class="ml-2" type="checkbox" name="funcional" id="especialidad-2" value="3">
                                              Funcional
                                            </label>
                                            <label class="checkbox-inline" for="especialidad-3">
                                              <input class="ml-2" type="checkbox" name="crossfit" id="especialidad-3" value="4">
                                              Crossfit
                                            </label>
                                            <label class="checkbox-inline" for="especialidad-4">
                                              <input class="ml-2" type="checkbox" name="yoga" id="especialidad-4" value="5">
                                              Yoga
                                            </label>
                                          </div>
                                        </div>
                                        <!-- Button -->
                                            
                                              <div class="col-md-4">
                                                <input type="submit" name="agregar" value="Agregar" class="btn btn-primary">
                                                 <input type="submit" name="quitar" value="Quitar" class="btn btn-danger">
                                              </div>
                                            
                                            

                                        </fieldset>
                             </form>




                       <?php 



                                include_once PATH_DAOS .'/especialidadesprofeDAO.php';
                                include_once PATH_HELPERS . "/html_helper.php";
                                
                                $espprofe = buscarEspProf($_SESSION["id_usuario"]);



                                while( $especialidadesprofe = $espprofe->fetch_assoc() ){
                                    crearHTMLespecialidades( $especialidadesprofe["esp_prof_descripcion"]);
                                }

                        ?>

                            
                            

                            





                          </div>

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

                                  include_once PATH_DAOS . "/actualizacionperfilprofeDAO.php";
                                          

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

                                                      <!-- File Button --> 
                                                          <div class="form-group">
                                                            <label class="col-md-4 control-label" for="cv">Actualiza tu CV</label>
                                                            <div class="col-md-4">
                                                              <input id="cv" name="cv" class="input-file" type="file">
                                                            </div>
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
                                                      <!-- Soy profe -->
                                                      <div class="checkbox">
                                                                <label for="profed-0">
                                                                  <input type="checkbox" name="profed" id="profed-0" value="1">
                                                                  Soy Profesor/a de Educación Física                         
                                                              </label>
                                                              </div>

                                             <!-- Textarea -->
                                                  <div class="form-group">
                                                    <label class="col-md-4 control-label" for="descripcion">Descripción</label>
                                                    <div class="col-md-4">                     
                                                      <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
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






 