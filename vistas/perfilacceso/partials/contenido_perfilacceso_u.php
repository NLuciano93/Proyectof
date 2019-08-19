<div class="container">
        <div class="row">
            <div class="col-4 border bg-dark"> 
                        <div class="card w-100 alert-dark mt-2 mb-2">
                          <img src="<?= FILES . '/perfiles/'.  $perfilaccesofoto ?>" class="card-img-top border border-warning rounded-circle" style="max-width: 300px; max-height: 300px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title font-weight-bold"><?= $perfilaccesousuario ?></h5>


 


                           <?php  include('barrasocial_perfilacceso.php') ?>
                            
                          </div>
                          <ul class="list-group list-group-flush font-weight-bold text-white">
                            <li class="list-group-item bg-secondary border border-warning">Edad: <?= $perfilaccesoedad?></li>
                            <li class="list-group-item bg-secondary border border-warning">Localidad: <?= $perfilaccesolocalidad?></li>
                           
                          </ul>
                          <div class="card-body">
                             <div class="container-fluid">
                              
                              <div class="row">
                                

                                  <div class="col-md-6">
                                    <form action="index.php" method="GET">
                                      <input type="hidden" name="m" value="perfilacceso">
                                      <input type="hidden" name="tipo" value="comun">
                                      <input type="hidden" name="nombre" value="<?= $perfilaccesoid ?>">

                                    <?php
                                      include_once PATH_VIEWS .'/perfilacceso/partials/botonlike.php';

                                      ?>
                                    </form>
                                    <?php 
                                    include_once PATH_DAOS . '/likesDAO.php';


                                    ?>
                                    <?php
                                    include_once PATH_DAOS . '/totallikesDAO.php';




                                    ?>
                                 

                                  <?php

                                 include_once PATH_DAOS . '/totalestrellasDAO.php';

                                ?>

                             <div class="card-body">
                             <span class="btn btn-info border border-warning"><i class="far fa-thumbs-up"></i> <?= $TotalLikes?></span> 
                             <span class="btn btn-info border border-warning"><i class="fas fa-star estrella"></i> <?= $totalstardeci?></span>
                              
                            </div>
                            
                               </div>

                             </div>


                               
                            </div>

                          
                          
                        </div>
            </div>

            <div class="col-8 border shadow-lg p-3 mb-5 bg-light rounded"> 
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item shadow-lg">
                            <a class="nav-link active font-weight-bold text-dark btn btn-outline-info shadow-lg" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Foto mes a mes</a>
                          </li>
                          <li class="nav-item shadow-lg">
                            <a class="nav-link font-weight-bold text-dark btn btn-outline-info shadow-lg" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Progreso</a>
                          </li>
                          <li class="nav-item shadow-lg">
                            <a class="nav-link font-weight-bold text-dark btn btn-outline-info shadow-lg" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Comentarios</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                             

                             <div class="container-fluid mt-3">
                                      <div class="row">
                                          <?php
                                          include_once PATH_DAOS . "/fotosDAO.php";
                                          include_once PATH_HELPERS . "/html_helper.php";

                                          $resultado= mostrarfotos($perfilaccesoid);

                                          while ($fotosalbum = $resultado->fetch_assoc()) {
                                              crearHTMLfotosalbum($fotosalbum["nombrefoto"], $fotosalbum["fecha_foto"]);
                                            }  


                                          ?>

                                          </div>

                                 </div>


                          </div>
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            
                            


                             <canvas id="badCanvas1" width="200" height="50"></canvas>
                             
                             <br>
                             <br>

                             <canvas id="badCanvas2" width="200" height="50"></canvas>

                             <br>
                             <br>

                             <canvas id="badCanvas3" width="200" height="50"></canvas>









                          </div>
                         





                         <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                        <?php
                         include_once PATH_DAOS .'/comentarioDAO.php';

                        ?>



                            <div class="ingresoposteo">
                                  <div class="card">
                                    <h5 class="card-header">Comentar</h5>
                                    <div class="card-body">
                                      <form action="index.php" method="GET">

                                        <input type="hidden" name="m" value="perfilacceso">

                                          <input type="hidden" name="tipo" value="comun">

                                            <input type="hidden" name="nombre" value="<?= $perfilaccesoid ?>">

                                                  <div class="form-group" id="rating-ability-wrapper">
                                                       
                                                        <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
                                                        </label>
                                                        <h2 class="bold rating-header" style="">
                                                        <span class="selected-rating">0</span><small> / 5</small>
                                                        </h2>
                                                        <button type="button" class="btnrating btn btn-default" data-attr="1" id="rating-star-1">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="button" class="btnrating btn btn-default" data-attr="2" id="rating-star-2">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="button" class="btnrating btn btn-default" data-attr="3" id="rating-star-3">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="button" class="btnrating btn btn-default" data-attr="4" id="rating-star-4">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="button" class="btnrating btn btn-default" data-attr="5" id="rating-star-5">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                            
                                            <textarea name="comentario" class="form-control" id="exampleFormControlTextarea1" placeholder="¿Qué estas pensando?" rows="3" required="required"></textarea>
                                            </div>
                                      
                                      
                                            <input type="submit" name="comentar" value="Comentar" class="btn btn-primary">
                                      </form>
                                    </div>
                                  </div>
                                   <?php
                                          include_once PATH_DAOS . '/postcomentarioDAO.php';
                                          include_once PATH_HELPERS . '/html_helper.php';

                                          $resultadocoment= mostrarcomentarios($perfilaccesoid);

                                          while ($cardcoment = $resultadocoment->fetch_assoc()) {
                                              crearHTMLComent($cardcoment["id_usr_comentante"], $cardcoment["calificacion"], $cardcoment["cont_comentario"]);
                                            }  


                                 ?>
                                




                                </div>



                            




                          </div>
                  
                          </div>







                        </div>

                
            </div>








        </div>






    </div>

    <script src="vendor/jquery/jquery-3.4.1.min.js"></script> 

    <script>

    jQuery(document).ready(function($){
      
  $(".btnrating").on('click',(function(e) {
  
  var previous_value = $("#selected_rating").val();
  
  var selected_value = $(this).attr("data-attr");
  $("#selected_rating").val(selected_value);
  
  $(".selected-rating").empty();
  $(".selected-rating").html(selected_value);
  
  for (i = 1; i <= selected_value; ++i) {
  $("#rating-star-"+i).toggleClass('btn-warning');
  $("#rating-star-"+i).toggleClass('btn-default');
  }
  
  for (ix = 1; ix <= previous_value; ++ix) {
  $("#rating-star-"+ix).toggleClass('btn-warning');
  $("#rating-star-"+ix).toggleClass('btn-default');
  }
  
  }));
  
    
});
</script>

<?php
         include_once PATH_DAOS . '/ingresokmDAO.php';

         $insertartabla1k = buscartabla1k($perfilaccesoid);
         $insertartabla3k = buscartabla3k($perfilaccesoid);
         $insertartabla10k = buscartabla10k($perfilaccesoid);

         

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