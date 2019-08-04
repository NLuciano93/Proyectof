
   <div class="container">
        <div class="row">
            <div class="col-4 border"> 
                        <div class="card w-100 ">
                          <img src="<?= FILES . '/perfiles/'. $perfilaccesofoto ?>" class="card-img-top border rounded-circle" style="max-width: 300px; max-height: 300px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?= $perfilaccesousuario?></h5>


                            <?php  include('barrasocial_perfilacceso.php') ?>

                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Dirección: <?= $perfilaccesodireccion?></li>
                            <li class="list-group-item">Localidad: <?= $perfilaccesolocalidad?></li>                          
                            <li class="list-group-item">Telefono:  <?= $perfilaccesotel?></li>
                            <li class="list-group-item">Mail contacto: <?= $perfilaccesomail?></li>
                            <li class="list-group-item">Horarios: <?= $perfilaccesohorarios?></li>

                           
                          </ul>
                          <div class="card-body">
                            <div class="container-fluid">
                              
                              <div class="row">
                                

                                  <div class="col-md-6">
                                    <form action="index.php" method="GET">
                                      <input type="hidden" name="m" value="perfilacceso">
                                      <input type="hidden" name="tipo" value="centro">
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
                                  <div class="col-md-6"><span class="btn btn-info btn-lg "><i class="far fa-thumbs-up"></i> x<?= $TotalLikes?></span></div>
                            
                               </div>

                             </div>


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
                                              crearHTMLfotosalbumpyc($fotosalbum["nombrefoto"]);
                                            }  


                                          ?>

                                          </div>

                                 </div>


                          </div>
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <?php 



                                include_once PATH_DAOS .'/actividadescentroDAO.php';
                                include_once PATH_HELPERS . "/html_helper.php";
                                
                                $actcentro = buscarActCen($perfilaccesoid);



                                while( $actividadescentro = $actcentro->fetch_assoc() ){
                                    crearHTMLactividades( $actividadescentro["actividades"]);
                                }

                        ?>

                          </div>
                          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                        </div>

                
            </div>








        </div>






    </div>
	




