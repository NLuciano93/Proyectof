<?php


    function  crearHTMLCardProfe($usr_id,$nombreProfe,$edadProfe, $fotoProfe, $esProfe, $id_localidad){
       include_once PATH_DAOS . '/localidadDAO.php';
      $nomlocalidad = busquedalocalidad($id_localidad);

?>
    
          <div class="card mb-3 shadow-lg tarjeta_posteo font-weight-bold">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="<?= FILES . '/perfiles/'. $fotoProfe ?>" class="card-img border border-dark rounded-circle "  style="max-width: 200px; max-height: 200px; " alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                       <a href="index.php?m=perfilacceso&tipo=profe&nombre=<?=$usr_id?>"> <h5 class="card-title mt-2"><?= $nombreProfe ?></h5></a>
                        <br>
                        <div>
                        <span class="card-text mt-2">Edad: <?= $edadProfe ?></span>
                        </div>
                         <div>
                        <span class="card-text mt-2">Localidad: <?= $nomlocalidad["loca_nombre"] ?></span>
                        </div>
                        <div>
                        <span class="card-text mt-2"><?php
                          if ( $esProfe== 1) {
                           echo "PROFESOR/A EDUCACIÓN FÍSICA";
                          }

                         ?></span>
                        </div>
                        
                        <br>

                  

                      </div>

                    </div>
                  </div>
                </div>










         





<?php }

?>









<?php

function crearHTMLCardCentro($usr_id, $nombre_centro, $fotoCentro, $direccionCentro, $id_localidad ){
      include_once PATH_DAOS . '/localidadDAO.php';
      $nomlocalidad = busquedalocalidad($id_localidad);

?>

    <div class="card mb-3 shadow-lg tarjeta_posteo font-weight-bold">
        <div class="row no-gutters">

            <div class="col-md-4">
              <img src="<?= FILES . '/perfiles/'. $fotoCentro ?>" class="card-img border border-dark rounded-circle" style="max-width: 200px; max-height: 200px;" alt="...">
            </div>

            <div class="col-md-8">
              <div class="card-body">
                <a href="index.php?m=perfilacceso&tipo=centro&nombre=<?=$usr_id?>"><h5 class="card-title mt-2"><?= $nombre_centro ?></h5></a>
                
                <div>
                <span class="card-text mt-2">Direccion:<?= " ". $direccionCentro?></span>
                </div>
               
                 <div>
                 <span class="card-text mt-2">Localidad: <?= $nomlocalidad["loca_nombre"] ?></span>
                 </div>
                <div>
                <span class="card-text mt-2">Actividades:</span>
                </div>
                

               


              </div>

            </div>
          </div>
            </div>


<?php } 

?>

          <?php
     
            function getComboProvincia1 (){



                  include_once PATH_DAOS .'/busqueDAO.php';
                  buscarProvincia(); 

                  $listaprov = '<option value="0">Elegi una provincia</option>';

                           while ($rowprov = $resultadoprovincia->fetch_assoc()) {
                                        
                         $listaprov .= "<option value ='$rowprov[prov_id]'> $rowprov[prov_nombre]</option>";
                             


                          }

                  return $listaprov;

                    }

              ?>

<?php

      function crearHTMLpublicacion($id_usuario, $texto, $fotopubli, $nombrepubli, $fecha){
        include_once PATH_DAOS . '/accesoperfilDAO.php';
        
      $perfilacceso = saberPerfil($id_usuario);
       

?>    
              <div class="posteo mt-5 border border-dark rounded tarjeta_posteo shadow-lg">
                    <div class="card border border-dark rounded tarjeta_posteo">
                          <div class="row no-gutters border border-dark rounded tarjeta_posteo">
                              <div class="col-md-2 text-center">
                              <img src="<?= FILES . '/perfiles/'. $fotopubli ?>" class="card-img border text-center border-dark rounded-circle mt-1 shadow-lg" alt="..." style="max-width: 130px; max-height: 130px;">
                              </div>
                              <div class="col-md-6">
                                <div class="card-body">
                                  <a href="index.php?m=perfilacceso&tipo=<?= $perfilacceso ?>&nombre=<?= $id_usuario ?>"><h5 class="card-title font-weight-bold"><?= $nombrepubli ?></h5></a>
                                  <p class="card-text font-weight-bold"><?= $texto ?></p>
                                  <p class="card-text"><small class="text-muted"><?= $fecha ?></small></p>
                                
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>







     <?php 
          }

      ?>


        <?php

          function crearHTMLfotosalbum($rfoto, $fechafoto){

        ?>

                          <div class="col-md-3 mb-4 text-center d-flex align-items-stretch ">
                                  <div class="card fotoalbum border border-dark">
                                      <img src="<?= FILES . '/imagenes/'. $rfoto ?>" class="card-img-top fotohover" alt="...">
                                           <div class="card-body">
                                              <p class="card-text"><small class="text-muted"><?= $fechafoto ?></small></p>
                                                </div>
                                          </div>

                                      </div>



         <?php
          }
        ?>

        <?php

          function crearHTMLfotosalbumpyc($rfoto){

        ?>

                          <div class="col-md-4 mb-4 text-center d-flex align-items-stretch">
                                  <div class="card fotoalbum border border-dark">
                                      <img src="<?= FILES . '/imagenes/'. $rfoto ?>" class="card-img-top fotohover" alt="...">

                                          </div>

                                      </div>



         <?php
          }
        ?>




      <?php

          function crearHTMLactividades($actividades){

        ?>

            <h2><span class="badge badge-info"><?= $actividades ?></span></h2>


      <?php
          }


        ?>




     <?php

          function crearHTMLespecialidades($especialidad){

        ?>

            <h2><span class="badge badge-info"><?= $especialidad ?></span></h2>


      <?php
          }

        ?>

<?php

      function crearHTMLComent($id_usr_comentante, $calificacion, $comentario){
        include_once PATH_DAOS . '/perfilcomentanteDAO.php';
        
      $perfilcomentante = saberPerfilusr($id_usr_comentante);
       

?>    

              <div class="card ml-3 mb-3 mt-3 tarjeta_posteo" style="max-width: 540px;">
               
                 <div class="row no-gutters">
                     
                      <div class="col-md-2">
                       
                         <img src="<?= FILES . '/perfiles/'. $perfilcomentante["usr_foto"] ?>" class="card-img border border-dark rounded-circle mt-3" alt="..." style="max-width: 100px;">
                           
                            </div>
                          
                            <div class="col-md-8">
                            
                               <div class="card-body">
                              
                                <h5 class="card-title"><?= $perfilcomentante["usr_nombre"] ?></h5>
                               
                                <p class="card-text"><?= $comentario ?></p>
                               
                                <div><span class="btn btn-info"><i class="fas fa-star estrella"></i>x <?= $calificacion ?></span></div>
                            
                             </div>
                          
                           </div>
                         
                         </div>
                      
                      </div>
                                







     <?php 
          }

      ?>


