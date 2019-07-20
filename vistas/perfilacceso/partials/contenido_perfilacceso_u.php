<div class="container">
        <div class="row">
            <div class="col-4 border"> 
                        <div class="card w-100 ">
                          <img src="<?= FILES . '/perfiles/'.  $perfilaccesofoto ?>" class="card-img-top border rounded-circle" style="max-width: 300px; max-height: 300px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?= $perfilaccesousuario ?></h5>


 


                           <?php  include('barrasocial_perfil.php') ?>
                            
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Edad: <?= $perfilaccesoedad?></li>
                            <li class="list-group-item">Localidad: <?= $perfilaccesolocalidad?></li>
                           
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
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Comentarios</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="m-5 row">
                                <div class="col-md-3 mb-4 text-center d-flex align-items-stretch">
                                <div class="card">
                                  <img src="<?= PATH_IMAGENES . '/avatar.jpg' ?>" class="card-img-top" alt="...">
                                  
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Mes 1</li>
                                        </ul>
                                
                                </div>  

                                </div>
                                <div class="col-md-3 mb-4 text-center d-flex align-items-stretch"> 
                                <div class="card">
                                  <img src="<?= PATH_IMAGENES . '/avatar.jpg' ?>" class="card-img-top" alt="...">

                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Mes 2</li>
                                        </ul>
                                
                                </div>
                                </div>


                                </div>



                          </div>
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="ingresoposteo">
                                  <div class="card">
                                    <h5 class="card-header">Comentar</h5>
                                    <div class="card-body">
                                      <form>
                                         
                                            <div class="form-group">                    
                                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="¿Qué estas pensando?" rows="3"></textarea>
                                            </div>
                                      </form>
                                      
                                      <button type="submit" name="publicar" class="btn btn-primary">Publicar</button>
                                    </div>
                                  </div>
                                </div>



                          </div>
                        </div>

                
            </div>








        </div>






    </div>