
   <div class="container">
        <div class="row">
            <div class="col-4 border bg-dark "> 
                        <div class="card w-100 alert-dark mt-2 mb-2">
                          <img src="<?= FILES . '/perfiles/'. $_SESSION["foto"] ?>" class="card-img-top border border-warning rounded-circle" style="max-width: 300px; max-height: 300px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title font-weight-bold"><?= $_SESSION["usuario"]?></h5>


                            <?php  include('barrasocial_perfil.php') ?>

                          </div>
                          <ul class="list-group list-group-flush font-weight-bold text-white">
                            <li class="list-group-item bg-secondary border border-warning">Dirección: <?= $_SESSION["direccion"]?></li>
                            <li class="list-group-item bg-secondary border border-warning">Localidad: <?= $_SESSION[ "localidad"]?></li>                          
                            <li class="list-group-item bg-secondary border border-warning">Telefono:  <?= $_SESSION["tel"]?></li>
                            <li class="list-group-item bg-secondary border border-warning">Mail contacto: <?= $_SESSION["mail"]?></li>
                            <li class="list-group-item bg-secondary border border-warning">Horarios: <?= $_SESSION["horarios"]?></li>
                            <li class="list-group-item bg-secondary border border-warning">Descripción: <?= $_SESSION["descripcion"]?></li>


                           
                          </ul>
                          <div class="card-body">
                            
                            <?php
                                    include_once PATH_DAOS . '/perfiltotallikesDAO.php';

                             ?>
                            <span class="btn btn-info border border-warning"><i class="far fa-thumbs-up"></i> <?= $TotalLikes?></span>

                            <?php

                                 include_once PATH_DAOS . '/perfiltotalstarDAO.php';

                                ?>



                             <span class="btn btn-info border border-warning"><i class="fas fa-star estrella"></i> <?= $totalstardeci?></span>
                          </div>
                        </div>
            </div>

            <div class="col-8 border shadow-lg p-3 mb-5 bg-light rounded "> 
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item shadow-lg">
                            <a class="nav-link active font-weight-bold text-dark btn btn-outline-info shadow-lg" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Fotos</a>
                          </li>
                          <li class="nav-item shadow-lg">
                            <a class="nav-link font-weight-bold text-dark btn btn-outline-info shadow-lg" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Actividades</a>
                          </li>
                          <li class="nav-item shadow-lg">
                            <a class="nav-link font-weight-bold text-dark btn btn-outline-info shadow-lg" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Comentarios</a>
                          </li>
                          <li class="nav-item shadow-lg">
                            <a class="nav-link font-weight-bold text-dark btn btn-outline-info shadow-lg" id="actualizar-tab" data-toggle="tab" href="#actualizar" role="tab" aria-controls="actualizar" aria-selected="false">Actualizar datos</a>
                          </li>
                        
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">



                           <div class="card text-white bg-secondary mb-3 mt-3 mr-3 ml-3 text-center border border-dark">
                                <form enctype="multipart/form-data" action="index.php" method="POST">
                                  <input type="hidden" name="m" value="perfil">
                                    <div class="form-group">
                                      <p class="font-weight-bold border-bottom border-dark"><label for="exampleFormControlFile1">AGREGA FOTO</label></p>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto" required>
                                    </div>
                                    <input type="submit" name="submit" value="PUBLICA TU FOTO" class="btn btn-success col-12">
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

                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <?php
                                include_once PATH_DAOS .'/actividadescentroDAO.php';

                            ?>
          <div class="card text-white bg-secondary mb-3 mt-3 mr-3 ml-3 text-center border border-dark font-weight-bold">
                       <form class="form-horizontal" action="index.php" method="POST">
                               <input type="hidden" name="m" value="perfil">
                               <input type="hidden" name="id" value="<?= $_SESSION['id_usuario'] ?>">        

                                        <fieldset>                                       

                                       <!-- Multiple Checkboxes (inline) -->
                                        <div class="form-group">
                                          <label class="col-md-10 control-label" for="especialidad">Agregar o quitar actividades</label>
                                          <div class="col-md-10">
                                            <label class="checkbox-inline" for="especialidad-0">
                                              <input type="checkbox" name="musculacion" id="especialidad-0" class="ml-2" value="1">
                                              Musculación
                                            </label>
                                            <label class="checkbox-inline" for="especialidad-1">
                                              <input type="checkbox" name="crossfit" id="especialidad-1"  class="ml-2" value="2">
                                              Crossfit
                                            </label>
                                            <label class="checkbox-inline" for="especialidad-2">
                                              <input type="checkbox" name="funcional" id="especialidad-2" class="ml-2" value="3">
                                              Funcional
                                            </label>
                                            <label class="checkbox-inline" for="especialidad-3">
                                              <input type="checkbox" name="yoga" id="especialidad-3" class="ml-2" value="4">
                                              Yoga
                                            </label>
                                            <label class="checkbox-inline" for="especialidad-4">
                                              <input type="checkbox" name="zumba" id="especialidad-4" class="ml-2" value="5">
                                              Zumba
                                            </label>
                                          </div>
                                        </div>
                                        <!-- Button -->
                                            
                                              <div class="col-12">
                                                <input type="submit" name="agregar" value="Agregar" class="btn btn-success col-3">
                                                <input type="submit" name="quitar" value="Quitar" class="btn btn-danger col-3">
                                              </div>
                                            

                                        </fieldset>
                             </form>

                           </div>


                    <div class="text-center">


                       <?php 



                                include_once PATH_DAOS .'/actividadescentroDAO.php';
                                include_once PATH_HELPERS . "/html_helper.php";
                                
                                $actcentro = buscarActCen($_SESSION["id_usuario"]);



                                while( $actividadescentro = $actcentro->fetch_assoc() ){
                                    crearHTMLactividades( $actividadescentro["actividades"]);
                                }

                        ?>

                    </div>


                          </div>
                          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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

                                  include_once PATH_DAOS . "/actualizacionperfilcentroDAO.php";
                                          

                                ?>




                                                <div class="tab-pane fade show active shadow-lg p-3 mb-5 bg-white rounded" id="nav-usuario" role="tabpanel" aria-labelledby="nav-usuario-tab">
                                                        <form class="form-horizontal" enctype="multipart/form-data" action="index.php" method="POST">
                                                      <fieldset>
                                                            <input type="hidden" name="m" value="perfil">
                                                     
                                                     
                                                      <!-- Text input-->
                                                      <div class="form-group mt-2">
                                                        <label class="col-12 control-label" for="Nombre">Nombre completo</label>  
                                                        <div class="col-12">
                                                        <input id="Nombre" name="nombre" type="text" placeholder="<?= $_SESSION["usuario"] ?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <!-- Text input-->
                                                      <div class="form-group mt-2">
                                                        <label class="col-12 control-label" for="telefono">Teléfono/celular</label>  
                                                        <div class="col-12">
                                                        <input id="telefono" name="telefono" type="text" placeholder="<?= $_SESSION["tel"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                    

                                                      <!-- Select Basic -->
                                                      <div class="form-group mt-2">
                                                        <label class="col-12 control-label" for="provincia">Provincia</label>
                                                        <div class="col-12">
                                                          <select name="provincia" class="form-control" id="provincia">
                                                             <?php
                                                                        include_once PATH_DAOS. '/busqueDAO.php';


                                                                             echo getComboProvincia();

                                                                       ?>
                                                         </select>
                                                        </div>
                                                      </div>

                                                      <!-- Select Basic -->
                                                      <div class="form-group mt-2">
                                                        <label class="col-12 control-label" for="localidad">Localidad</label>
                                                        <div class="col-12">
                                                            <select  name="localidad" id="localidad" class="form-control" >
                                                                 <option value="-1">Elegí primero Provincia </option>

                                                            </select>
                                                        </div>
                                                      </div>

                                                      <!-- foto -->

                                                      <div class="form-group mt-2">
                                                                        <label for="exampleFormControlFile1">Cambia foto perfil</label>
                                                                         <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto" >
                                                                  </div> 

                                                              



                                                      <!-- Text input-->
                                                      <div class="form-group mt-2">
                                                        <label class="col-12 control-label" for="facebook">Perfil de Facebook (ejemplo: https://www.facebook.com/...)</label>  
                                                        <div class="col-12">
                                                        <input id="facebook" name="facebook" type="text" placeholder="<?= $_SESSION["facebook"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <!-- Text input-->
                                                      <div class="form-group mt-2">
                                                        <label class="col-12 control-label" for="twitter">Twitter</label>  
                                                        <div class="col-12">
                                                        <input id="twitter" name="twitter" type="text" placeholder="<?= $_SESSION["twitter"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <!-- Text input-->
                                                      <div class="form-group mt-2">
                                                        <label class="col-12 control-label" for="instagram">Instagram</label>  
                                                        <div class="col-12">
                                                        <input id="instagram" name="instagram" type="text" placeholder="<?= $_SESSION["instagram"]?>" class="form-control input-md">
                                                          
                                                        </div>

                                                        <!-- Text input-->
                                                      <div class="form-group mt-2">
                                                        <label class="col-12 control-label" for="direccion">Dirección</label>  
                                                        <div class="col-12">
                                                        <input id="direccion" name="direccion" type="text" placeholder="<?= $_SESSION["direccion"]?>" class="form-control input-md">
                                                          
                                                        </div>


                                             <!-- Textarea -->
                                                  <div class="form-group mt-2">
                                                    <label class="col-12 control-label" for="descripcion">Descripción</label>
                                                    <div class="col-12">                     
                                                      <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                                                    </div>
                                                  </div>


                                                  <!-- Textarea -->
                                                  <div class="form-group mt-2">
                                                    <label class="col-12 control-label" for="horarios">Horarios</label>
                                                    <div class="col-12">                     
                                                      <textarea class="form-control" id="horarios" name="horarios"></textarea>
                                                    </div>
                                                  </div>

                                                      <input type="submit" name="actualizar" value="Actualizar" class="btn btn-primary col-12">

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

	




