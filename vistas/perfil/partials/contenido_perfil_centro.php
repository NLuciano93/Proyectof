
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
                            <li class="list-group-item">Dirección: <?= $_SESSION["direccion"]?></li>
                            <li class="list-group-item">Localidad: <?= $_SESSION[ "localidad"]?></li>                          
                            <li class="list-group-item">Telefono:  <?= $_SESSION["tel"]?></li>
                            <li class="list-group-item">Mail contacto: <?= $_SESSION["mail"]?></li>
                            <li class="list-group-item">Horarios: <?= $_SESSION["horarios"]?></li>


                           
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
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Fotos</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Actividades</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Comentarios</a>
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

                       <form class="form-horizontal" action="index.php" method="POST">
                               <input type="hidden" name="m" value="perfil">
                               <input type="hidden" name="id" value="<?= $_SESSION['id_usuario'] ?>">        

                                        <fieldset>                                       

                                       <!-- Multiple Checkboxes (inline) -->
                                        <div class="form-group">
                                          <label class="col-md-10 control-label" for="especialidad">Agregar o quitar actividades</label>
                                          <div class="col-md-10">
                                            <label class="checkbox-inline" for="especialidad-0">
                                              <input type="checkbox" name="musculacion" id="especialidad-0" value="1">
                                              Musculación
                                            </label>
                                            <label class="checkbox-inline" for="especialidad-1">
                                              <input type="checkbox" name="crossfit" id="especialidad-1" value="2">
                                              Crossfit
                                            </label>
                                            <label class="checkbox-inline" for="especialidad-2">
                                              <input type="checkbox" name="funcional" id="especialidad-2" value="3">
                                              Funcional
                                            </label>
                                            <label class="checkbox-inline" for="especialidad-3">
                                              <input type="checkbox" name="yoga" id="especialidad-3" value="4">
                                              Yoga
                                            </label>
                                            <label class="checkbox-inline" for="especialidad-4">
                                              <input type="checkbox" name="zumba" id="especialidad-4" value="5">
                                              Zumba
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



                                include_once PATH_DAOS .'/actividadescentroDAO.php';
                                include_once PATH_HELPERS . "/html_helper.php";
                                
                                $actcentro = buscarActCen($_SESSION["id_usuario"]);



                                while( $actividadescentro = $actcentro->fetch_assoc() ){
                                    crearHTMLactividades( $actividadescentro["actividades"]);
                                }

                        ?>




                          </div>
                          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                          



                          <div class="tab-pane fade" id="actualizar" role="tabpanel" aria-labelledby="actualizar-tab">

                                <?php

                                  include_once PATH_DAOS . "/actualizacionperfilcentroDAO.php";
                                          

                                ?>




                                                <div class="tab-pane fade show active shadow-lg p-3 mb-5 bg-white rounded" id="nav-usuario" role="tabpanel" aria-labelledby="nav-usuario-tab">
                                                        <form class="form-horizontal border" enctype="multipart/form-data" action="index.php" method="POST">
                                                      <fieldset>
                                                            <input type="hidden" name="m" value="perfil">
                                                     
                                                     
                                                      <!-- Text input-->
                                                      <div class="form-group mt-2">
                                                        <label class="col-md-6 control-label" for="Nombre">Nombre completo</label>  
                                                        <div class="col-md-6">
                                                        <input id="Nombre" name="nombre" type="text" placeholder="<?= $_SESSION["usuario"] ?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <!-- Text input-->
                                                      <div class="form-group mt-2">
                                                        <label class="col-md-6 control-label" for="telefono">Teléfono/celular</label>  
                                                        <div class="col-md-6">
                                                        <input id="telefono" name="telefono" type="text" placeholder="<?= $_SESSION["tel"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                    

                                                      <!-- Select Basic -->
                                                      <div class="form-group mt-2">
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
                                                      <div class="form-group mt-2">
                                                        <label class="col-md-6 control-label" for="localidad">Localidad</label>
                                                        <div class="col-md-6">
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
                                                        <label class="col-md-6 control-label" for="facebook">Perfil de Facebook (ejemplo: https://www.facebook.com/...)</label>  
                                                        <div class="col-md-6">
                                                        <input id="facebook" name="facebook" type="text" placeholder="<?= $_SESSION["facebook"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <!-- Text input-->
                                                      <div class="form-group mt-2">
                                                        <label class="col-md-6 control-label" for="twitter">Twitter</label>  
                                                        <div class="col-md-6">
                                                        <input id="twitter" name="twitter" type="text" placeholder="<?= $_SESSION["twitter"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <!-- Text input-->
                                                      <div class="form-group mt-2">
                                                        <label class="col-md-6 control-label" for="instagram">Instagram</label>  
                                                        <div class="col-md-6">
                                                        <input id="instagram" name="instagram" type="text" placeholder="<?= $_SESSION["instagram"]?>" class="form-control input-md">
                                                          
                                                        </div>

                                                        <!-- Text input-->
                                                      <div class="form-group mt-2">
                                                        <label class="col-md-6 control-label" for="direccion">Dirección</label>  
                                                        <div class="col-md-6">
                                                        <input id="direccion" name="direccion" type="text" placeholder="<?= $_SESSION["direccion"]?>" class="form-control input-md">
                                                          
                                                        </div>


                                             <!-- Textarea -->
                                                  <div class="form-group mt-2">
                                                    <label class="col-md-4 control-label" for="descripcion">Descripción</label>
                                                    <div class="col-md-4">                     
                                                      <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                                                    </div>
                                                  </div>


                                                  <!-- Textarea -->
                                                  <div class="form-group mt-2">
                                                    <label class="col-md-4 control-label" for="horarios">Horarios</label>
                                                    <div class="col-md-4">                     
                                                      <textarea class="form-control" id="horarios" name="horarios"></textarea>
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

	




