 <div class="container">
        <div class="row">
            <div class="col-4 border bg-dark"> 
                        <div class="card w-100 alert-dark mt-2 mb-2">
                          <img src="<?= FILES . '/perfiles/'. $_SESSION["foto"] ?>" class="card-img-top border border-warning rounded-circle" style="max-width: 300px; max-height: 300px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title font-weight-bold"><?= $_SESSION["usuario"] ?></h5>


 


                           <?php  include('barrasocial_perfil.php') ?>
                            
                          </div>
                          <ul class="list-group list-group-flush font-weight-bold text-white">
                            <li class="list-group-item bg-secondary border border-warning">Edad: <?= $_SESSION["edad"]?></li>
                            <li class="list-group-item bg-secondary border border-warning">Localidad: <?= $_SESSION["localidad"]?></li>
                            <li class="list-group-item bg-secondary border border-warning">Mail de contacto: <?= $_SESSION["mail"]?></li>
                            
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

            <div class="col-8 border shadow-lg p-3 mb-5 bg-light rounded"> 
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item shadow-lg">
                            <a class="nav-link active font-weight-bold text-dark btn btn-outline-info shadow-lg " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Foto mes a mes</a>
                          </li>
                          <li class="nav-item shadow-lg">
                            <a class="nav-link font-weight-bold text-dark btn btn-outline-info shadow-lg" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Progreso</a>
                          </li>
                          
                          <li class="nav-item shadow-lg">
                            <a class="nav-link font-weight-bold text-dark btn btn-outline-info shadow-lg" id="comentario-tab" data-toggle="tab" href="#comentarios" role="tab" aria-controls="comentarios" aria-selected="false">Comentarios</a>
                          </li>
                          <li class="nav-item shadow-lg">
                            <a class="nav-link font-weight-bold text-dark btn btn-outline-info shadow-lg" id="actualizar-tab" data-toggle="tab" href="#actualizar" role="tab" aria-controls="actualizar" aria-selected="false">Actualizar datos</a>
                          </li>
                        </ul>
                        <div class="tab-content border" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            
                            <div class="card text-white bg-secondary mb-3 mt-3 mr-3 ml-3 text-center border border-dark">
                                <form enctype="multipart/form-data" action="index.php" method="POST">
                                  <input type="hidden" name="m" value="perfil">
                                    <div class="form-group ">
                                      <p class="font-weight-bold border-bottom border-dark"><label for="exampleFormControlFile2">AGREGA FOTO</label></p>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile2" name="foto" required>
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
                                    crearHTMLfotosalbum($fotosalbum["nombrefoto"], $fotosalbum["fecha_foto"]);
                                  }  




                                ?>



                                </div>

                    </div>



             </div>
                          

                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


 

  <?php 
      include_once PATH_DAOS . '/ingresokmDAO.php';

  ?>

                       <div class="card text-white bg-secondary mb-3 mt-3 mr-3 ml-3">
                        <div class="text-center"><p class="font-weight-bold border-bottom border-white"><legend>Running 1KM</legend></p></div>
                        <form class="form-inline ml-3" method="GET">
                          
                          <p><h5>Ingresa tus minutos</h5></p>


                        
                          <div class="form-group mx-sm-3 mb-2">
                            <label for="minutos1k" class="sr-only">Minutos1k</label>
                            <input type="hidden" name="m" value="perfil">
                            <input type="number" name="numero1k" min="0" id="minutos1k" step=".01">
                          </div>
                          <input type="submit" name="submit1k" value="Insertar" class="btn btn-primary" required="">
                           <p>Nota: los segundos se ingresan en decimal (30segundos = 0.5)</p>
                           
                        </form>
                       </div>
      

      <canvas id="badCanvas1" width="200" height="50"></canvas>

                  <div class="card text-white bg-secondary mb-3 mt-3 mr-3 ml-3">
                     <div class="text-center"><p class="font-weight-bold border-bottom border-white"><legend>Running 3KM</legend></p></div>
                        
                        <form class="form-inline ml-3" method="GET">
                         
                          <p><h5>Ingresa tus minutos</h5></p>


                        
                          <div class="form-group mx-sm-3 mb-2">
                            <label for="minutos1k" class="sr-only">Minutos3k</label>
                            <input type="hidden" name="m" value="perfil">
                            <input type="number" name="numero3k" min="0" id="minutos3k" step=".01" required="">
                          </div>
                          <input type="submit" name="submit3k" value="Insertar" class="btn btn-primary">
                           <p>Nota: los segundos se ingresan en decimal (30segundos = 0.5)</p>
                        </form>
                      </div>
      

      <canvas id="badCanvas2" width="200" height="50"></canvas>

      <div class="card text-white bg-secondary mb-3 mt-3 mr-3 ml-3">
                     <div class="text-center"><p class="font-weight-bold border-bottom border-white"><legend>Running 10KM</legend></p></div>

                        <form class="form-inline ml-3" method="GET">
                          
                          <p><h5>Ingresa tus minutos</h5></p>


                        
                          <div class="form-group mx-sm-3 mb-2">
                            <label for="minutos1k" class="sr-only">Minutos10k</label>
                            <input type="hidden" name="m" value="perfil">
                            <input type="number" name="numero10k" min="0" id="minutos10k" step=".01" required="">
                          </div>
                          <input type="submit" name="submit10k" value="Insertar" class="btn btn-primary">
                           <p>Nota: los segundos se ingresan en decimal (30segundos = 0.5)</p>
                        </form>
                      </div>
      

      <canvas id="badCanvas3" width="200" height="50"></canvas>

  



  




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

                                  include_once PATH_DAOS . "/actualizacionperfilDAO.php";
                                          

                                ?>




                                                <div class="tab-pane fade show active shadow-lg p-3 mb-5 bg-white rounded" id="nav-usuario" role="tabpanel" aria-labelledby="nav-usuario-tab">
                                                        <form class="form-horizontal " enctype="multipart/form-data" action="index.php" method="POST">
                                                      <fieldset>
                                                            <input type="hidden" name="m" value="perfil">
                                                     
                                                     
                                                      <!-- Text input-->
                                                      <div class="form-group">
                                                        <label class="col-12 control-label" for="Nombre">Nombre completo</label>  
                                                        <div class="col-12">
                                                        <input id="Nombre" name="nombre" type="text" placeholder="<?= $_SESSION["usuario"] ?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <!-- Text input-->
                                                      <div class="form-group">
                                                        <label class="col-12 control-label" for="telefono">Teléfono/celular</label>  
                                                        <div class="col-12">
                                                        <input id="telefono" name="telefono" type="text" placeholder="<?= $_SESSION["tel"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                     
                                                      <!-- Text input-->
                                                      <div class="form-group">
                                                        <label class="col-12 control-label" for="edad">Edad</label>  
                                                        <div class="col-12">
                                                        <input id="edad" name="edad" type="number" placeholder="<?= $_SESSION["edad"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <!-- Select Basic -->
                                                      <div class="form-group">
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
                                                      <div class="form-group">
                                                        <label class="col-12 control-label" for="localidad">Localidad</label>
                                                        <div class="col-12">
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
                                                        <label class="col-12 control-label" for="facebook">Perfil de Facebook (ejemplo: https://www.facebook.com/...)</label>  
                                                        <div class="col-12">
                                                        <input id="facebook" name="facebook" type="text" placeholder="<?= $_SESSION["facebook"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <!-- Text input-->
                                                      <div class="form-group">
                                                        <label class="col-12 control-label" for="twitter">Twitter</label>  
                                                        <div class="col-12">
                                                        <input id="twitter" name="twitter" type="text" placeholder="<?= $_SESSION["twitter"]?>" class="form-control input-md">
                                                          
                                                        </div>
                                                      </div>

                                                      <!-- Text input-->
                                                      <div class="form-group">
                                                        <label class="col-12 control-label" for="instagram">Instagram</label>  
                                                        <div class="col-12">
                                                        <input id="instagram" name="instagram" type="text" placeholder="<?= $_SESSION["instagram"]?>" class="form-control input-md">
                                                          
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
              });
             
          }

        </script>

        <?php
         include_once PATH_DAOS . '/ingresokmDAO.php';

         $insertartabla1k = buscartabla1k($_SESSION["id_usuario"]);
         $insertartabla3k = buscartabla3k($_SESSION["id_usuario"]);
         $insertartabla10k = buscartabla10k($_SESSION["id_usuario"]);

         

         $minutos1k=[];

         $dia1k=[];

          $minutos3k=[];

         $dia3k=[];

          $minutos10k=[];

         $dia10k=[];

         while ($t1k = $insertartabla1k->fetch_assoc()) {
              $minutos1k[] = (float)$t1k["minutos_1k"];
              $dia1k[] = $t1k["dia_1k"];
           
         }
          while ($t3k = $insertartabla3k->fetch_assoc()) {
              $minutos3k[] = (float)$t3k["minutos_3k"];
              $dia3k[] = $t3k["dia_3k"];
           
         }
          while ($t10k = $insertartabla10k->fetch_assoc()) {
              $minutos10k[] = (float)$t10k["minutos_10k"];
              $dia10k[] = $t10k["dia_10k"];
           
         }

        ?>
        <script>
            var ctx = document.getElementById('badCanvas1').getContext('2d');
              var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
               data: {
                    labels: <?= json_encode($dia1k); ?>,
                    datasets: [{
                        label: 'Progreso 1km',
                        backgroundColor: 'rgb(255, 255, 255)',
                        
                        borderColor: 'rgb(255, 99, 132)',
                        data: <?= json_encode($minutos1k); ?>,
                    }]
                },

                // Configuration options go here
                options: {
                  scales:{
                    yAxes:[{

                      ticks:{
                        beginAtZero: true,
                      }
                    }]
                  }

                }
            });

              var ctx = document.getElementById('badCanvas2').getContext('2d');
              var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
               data: {
                    labels: <?= json_encode($dia3k); ?>,
                    datasets: [{
                        label: 'Progreso 3km',
                        backgroundColor: 'rgb(255, 255, 255)',
                        
                        borderColor: 'rgb(255, 99, 132)',
                        data: <?= json_encode($minutos3k); ?>,
                    }]
                },

                // Configuration options go here
                options: {
                  scales:{
                    yAxes:[{

                      ticks:{
                        beginAtZero: true,
                      }
                    }]
                  }

                }
            });

              var ctx= document.getElementById('badCanvas3').getContext('2d');
              var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
               data: {
                    labels: <?= json_encode($dia10k); ?>,
                    datasets: [{
                        label: 'Progreso 10km',
                        backgroundColor: 'rgb(255, 255, 255)',
                        
                        borderColor: 'rgb(255, 99, 132)',
                        data: <?= json_encode($minutos10k); ?>,
                    }]
                },

                // Configuration options go here
                options: {
                  scales:{
                    yAxes:[{

                      ticks:{
                        beginAtZero: true,
                      }
                    }]
                  }

                }
            });
  
        </script>

