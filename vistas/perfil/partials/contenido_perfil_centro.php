
   <div class="container">
        <div class="row">
            <div class="col-4 border"> 
                        <div class="card w-100 ">
                          <img src="<?= PATH_IMAGENES . '/avatar.jpg' ?>" class="card-img-top border rounded-circle" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Nombre Centro</h5>

                            <div class="social" >
                                    <ul id="colsocial">
                                        <li><a href="" class="icon-facebook2"></a></li>
                                        <li><a href="" class="icon-twitter"></a></li>
                                        <li><a href="" class="icon-instagram"></a></li> 
                                        <li><a href="" class="icon-mail4"></a></li>
                                    </ul>
                                </div>
                            
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Dirección</li>
                            <li class="list-group-item">Localidad</li>
                            <li class="list-group-item">Provincia</li>
                            <li class="list-group-item">Telefono</li>
                           
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
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h2><span class="badge badge-info">Funcional</span></h2>
                            <h2><span class="badge badge-info">Crossfit</span></h2>
                            <h2><span class="badge badge-info">Yoga</span></h2>


                          </div>
                          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                        </div>

                
            </div>








        </div>






    </div>
	




