    <div class="container">
        <div class="row">
            <div class="col-4 border"> 
                        <div class="card w-100 ">
                          <img src="<?= FILES . '/perfiles/'. $perfilaccesofoto ?>" class="card-img-top border rounded-circle" style="max-width: 300px; max-height: 300px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?= $perfilaccesousuario ?></h5>

                            <?php  include('barrasocial_perfilacceso.php') ?>
                            
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Edad: <?= $perfilaccesoedad ?></li>
                            <li class="list-group-item">Localidad: <?= $perfilaccesolocalidad ?></li>
                            <li class="list-group-item">Telefono: <?= $perfilaccesotel ?></li>
                            <li class="list-group-item">Estudio: <?= $perfilaccesoeducacionfisica ?></li>
                            <li class="list-group-item">Mail de contacto: <?= $perfilaccesomail ?></li>
                           
                          </ul>
                          <div class="card-body">
                            <div><span class="btn btn-info btn-lg "><i class="far fa-thumbs-up"></i> x100</span></div>
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
                        </ul>
                        <div class="tab-content" id="myTabContent">
                         
                          <div class="tab-pane fade show active" id="fotosprofe" role="tabpanel" aria-labelledby="fotosprofe-tab">
                         
                            <div class="container-fluid mt-3">
                                      
                                      <div class="row">
                                          <?php
                                          include_once PATH_DAOS . "/fotosDAO.php";
                                          include_once PATH_HELPERS . "/html_helper.php";

                                          $resultado= mostrarfotos($perfilaccesoid);

                                          while ($fotosalbum = $resultado->fetch_assoc()) {
                                              crearHTMLfotosalbumpyc($fotosalbum["nombrefoto"]);
                                            }  


                                          ?>

                                          </div>

                                 </div>


                          </div>


                          <div class="tab-pane fade" id="cvprofe" role="tabpanel" aria-labelledby="cvprofe-tab">
                           

                          </div>
                          <div class="tab-pane fade" id="especialidadprofe" role="tabpanel" aria-labelledby="especialidadprofe-tab">
                            <h2><span class="badge badge-info">Funcional</span></h2>
                            <h2><span class="badge badge-info">Crossfit</span></h2>
                            <h2><span class="badge badge-info">Yoga</span></h2>



                          </div>
                          <div class="tab-pane fade" id="comentario" role="tabpanel" aria-labelledby="comentario-tab">
                           

                          </div>

                        </div>

                
            </div>








        </div>






    </div>
	
