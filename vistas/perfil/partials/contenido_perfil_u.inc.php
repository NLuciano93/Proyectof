 <div class="container">
        <div class="row">
            <div class="col-4 border"> 
                        <div class="card w-100 ">
                          <img src="<?= FILES . '/perfiles/'. $_SESSION["foto"] ?>" class="card-img-top border rounded-circle" style="max-width: 300px; max-height: 300px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?= $_SESSION["usuario"] ?></h5>


 


                           <?php  include('barrasocial_perfil.php') ?>
                            
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Edad: <?= $_SESSION["edad"]?></li>
                            <li class="list-group-item">Localidad: <?= $_SESSION["localidad"]?></li>
                           
                          </ul>
                          <div class="card-body">
                            <span class="btn btn-info btn-lg "><i class="far fa-thumbs-up"></i> x100</span>
                          </div>
                        </div>
            </div>

            <div class="col-8 border shadow-lg p-3 mb-5 bg-white rounded"> 
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Foto mes a mes</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Progreso</a>
                          </li>
                          
                          <li class="nav-item">
                            <a class="nav-link" id="comentario-tab" data-toggle="tab" href="#comentarios" role="tab" aria-controls="comentarios" aria-selected="false">Comentarios</a>
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
                                    crearHTMLfotosalbum($fotosalbum["nombrefoto"], $fotosalbum["fecha_foto"]);
                                  }  




                                ?>



                                </div>

                       </div>



                          </div>
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                      

                          <div class="tab-pane fade" id="comentarios" role="tabpanel" aria-labelledby="comentario-tab">...</div>
                        </div>

                
            </div>








        </div>






    </div>
	


