<?php


    function  crearHTMLCardProfe($usr_id,$nombreProfe,$edadProfe, $fotoProfe, $esProfe, $id_localidad){
       include_once PATH_DAOS . '/localidadDAO.php';
      $nomlocalidad = busquedalocalidad($id_localidad);

?>
    
          <div class="card mb-3">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="<?= FILES . '/perfiles/'. $fotoProfe ?>" class="card-img border rounded-circle "  style="max-width: 200px; max-height: 200px; " alt="...">
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

                    <div>
                        <span class="card-text"><small class="text-muted">Calificación:</small></span>
                      </div>
                    <div class="botone">
                           <span class="btn btn-info btn-lg" ><i class="far fa-thumbs-up"></i>x100</span>
                           
                           <span class="btn btn-info btn-lg"><i class="fas fa-star estrella"></i>x100</span>
                        </div>


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

    <div class="card mb-3">
        <div class="row no-gutters">

            <div class="col-md-4">
              <img src="<?= FILES . '/perfiles/'. $fotoCentro ?>" class="card-img border rounded-circle" style="max-width: 200px; max-height: 200px;" alt="...">
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
                

                <div>
                <span class="card-text mt-2"><small class="text-muted">Calificación:</small></span>
              </div>
                <div class="botone">
                     <span class="btn btn-info btn-lg" ><i class="far fa-thumbs-up"></i>x100</span>
                     
                     <span class="btn btn-info btn-lg"><i class="fas fa-star estrella"></i>x100</span>
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
              <div class="posteo mt-3">
                    <div class="card">
                          <div class="row no-gutters">
                              <div class="col-md-2">
                                </a><img src="<?= FILES . '/perfiles/'. $fotopubli ?>" class="card-img border rounded-circle mt-3" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <a href="index.php?m=perfilacceso&tipo=<?= $perfilacceso ?>&nombre=<?= $id_usuario ?>"><h5 class="card-title"><?= $nombrepubli ?></h5></a>
                                  <p class="card-text"><?= $texto ?></p>
                                  <p class="card-text"><small class="text-muted"><?= $fecha ?></small></p>
                                  <div>
                                <span class="btn btn-info btn-lg "><i class="far fa-thumbs-up"></i> x100</span>
                              </div>  
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

                          <div class="col-md-3 mb-4 text-center d-flex align-items-stretch">
                                  <div class="card">
                                      <img src="<?= FILES . '/imagenes/'. $rfoto ?>" class="card-img-top" alt="...">
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
                                  <div class="card">
                                      <img src="<?= FILES . '/imagenes/'. $rfoto ?>" class="card-img-top" alt="...">

                                          </div>

                                      </div>



         <?php
          }
        ?>


