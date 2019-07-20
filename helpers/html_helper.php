<?php


    function  crearHTMLCardProfe($usr_id,$nombreProfe,$edadProfe, $fotoProfe, $esProfe){

?>
    
          <div class="card mb-3">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="<?= FILES . '/perfiles/'. $fotoProfe ?>" class="card-img border rounded-circle "  style="max-width: 200px; max-height: 200px; " alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                       <a href="index.php?m=perfilacceso&tipo=profe&nombre=<?=$usr_id?>"> <h5 class="card-title"><?= $nombreProfe ?></h5></a>
                        <br>
                        <div>
                        <span class="card-text">Edad: <?= $edadProfe ?></span>
                        </div>
                         <div>
                        <span class="card-text">Localidad:</span>
                        </div>
                        <div>
                        <span class="card-text"><?php
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

function crearHTMLCardCentro($usr_id, $nombre_centro, $fotoCentro, $direccionCentro ){

?>

    <div class="card mb-3">
        <div class="row no-gutters">

            <div class="col-md-4">
              <img src="<?= FILES . '/perfiles/'. $fotoCentro ?>" class="card-img border rounded-circle" style="max-width: 200px; max-height: 200px;" alt="...">
            </div>

            <div class="col-md-8">
              <div class="card-body">
                <a href="index.php?m=perfilacceso&tipo=centro&nombre=<?=$usr_id?>"><h5 class="card-title"><?= $nombre_centro ?></h5></a>
                <br>
                <div>
                <span class="card-text">Direccion:<?= " ". $direccionCentro?></span>
                </div>
                <br>
                <div>
                <span class="card-text">Actividades:</span>
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


       saberPerfil($id_usuario);

?>    
              <div class="posteo mt-3">
                    <div class="card">
                          <div class="row no-gutters">
                              <div class="col-md-2">
                                </a><img src="<?= FILES . '/perfiles/'. $fotopubli ?>" class="card-img border rounded-circle mt-3" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <a href="index.php?m=perfilacceso&tipo=<?= $perfilaccesotipo ?>&nombre=<?= $id_usuario ?>"><h5 class="card-title"><?= $nombrepubli ?></h5></a>
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






