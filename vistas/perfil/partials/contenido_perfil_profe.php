    <div class="container">
        <div class="row">
            <div class="col-4 border"> 
                        <div class="card w-100 ">
                          <img src="<?= FILES . '/perfil_profe/'. $_SESSION["foto"] ?>" class="card-img-top border rounded-circle" style="max-width: 300px; max-height: 300px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?= $_SESSION["usuario"]?></h5>

                            <?php  include('barrasocial_perfil.php') ?>
                            
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Edad: <?= $_SESSION["edad"]?></li>
                            <li class="list-group-item">Localidad: <?= $_SESSION["localidad"]?></li>
                            <li class="list-group-item">Telefono: <?= $_SESSION["tel"]?></li>
                            <li class="list-group-item">Estudio: <?= $_SESSION["educacionfisica"]?></li>
                            <li class="list-group-item">Mail de contacto: <?= $_SESSION["mail"]?></li>
                           
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
                          <li class="nav-item">
                            <a class="nav-link" id="postear-tab" data-toggle="tab" href="#postear" role="tab" aria-controls="postear" aria-selected="false">Postear</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="fotosprofe" role="tabpanel" aria-labelledby="fotosprofe-tab">
                            <div class="m-5 row">
                                <div class="col-md-3 mb-4 text-center d-flex align-items-stretch">
                                <div class="card">
                                  <img src="<?= PATH_IMAGENES . '/avatar.jpg' ?>" class="card-img-top" alt="...">
                                  
                                        
                                
                                </div>  

                                </div>
                                <div class="col-md-3 mb-4 text-center d-flex align-items-stretch"> 
                                <div class="card">
                                  <img src="<?= PATH_IMAGENES . '/avatar.jpg' ?>" class="card-img-top" alt="...">

                                       
                                </div>
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

                           <div class="tab-pane fade" id="comentarios" role="tabpanel" aria-labelledby="comentario-tab">
                           

                          </div>
                          

                          <div class="tab-pane fade" id="postear" role="tabpanel" aria-labelledby="postear-tab">
                              <div class="ingresoposteo">
                                  <div class="card">
                                    <h5 class="card-header">¿Qué estas pensando?</h5>
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
	





 