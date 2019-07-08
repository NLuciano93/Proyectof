<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perfil Centro</title>
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Add icon library -->
    <script src="vendor/bootstrap/js/all.min.js"></script>


</head>
<body>
	<header>
        <div class="container-fluid">
            <nav class="navbar navbar-light navbar-expand-xl">
                <a class="navbar-brand" href="index.php">
                    <img src="imagenes/logopag2.png" width="100" height="100" class="d-inline-block align-top" alt="">
                    
                     </a>   
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                            </button>               
                                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                          <li class="nav-item">
                                            <a class="nav-link barra" href="#">INICIO</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link barra" href="#">PERFIL</a>
                                          </li>
                                          <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle barra" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             CENTRO DE ENTRENAMIENTO
                                            </a>
                                            <div class="dropdown-menu despliegue" aria-labelledby="navbarDropdown">
                                              <a class="dropdown-item barraentrenamiento" href="#">MUSCULACIÓN</a>
                                              <a class="dropdown-item barraentrenamiento" href="#">FUNCIONAL</a>
                                              <a class="dropdown-item barraentrenamiento" href="#">CROSSFIT</a>
                                              <a class="dropdown-item barraentrenamiento" href="#">YOGA</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item barraentrenamiento" href="#">POR ZONA</a>
                                            </div>
                                          </li>
                                           <li class="nav-item">
                                            <a class="nav-link barra" href="#">BUSCAR PROFESOR/A</a>
                                          </li>
                                           <li class="nav-item">
                                            <a class="nav-link barra" href="#">RECOMENDACIONES</a>
                                          </li>


                                           <li class="nav-item">
                                            <a class="nav-link barra" href="#">CONTACTO</a>
                                          </li>
                                          
                                        </ul>
                                <div>
                                    <a href="#" class="btn badge-pill btn-outline-dark registro"><i class="fas fa-user-plus"></i> REGISTRATE</a>
                                    <br>
                                    <br>
                                    <a href="#" class="btn btn-outline-dark registro"><i class="fas fa-eye"></i> LOGIN</a>
                                </div>


            </nav>
            
        </div>  
    </header>


    <div class="container">
        <div class="row">
            <div class="col-4 border"> 
                        <div class="card w-100 ">
                          <img src="imagenes/avatar.jpg" class="card-img-top border rounded-circle" alt="...">
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
                                  <img src="imagenes/avatar.jpg" class="card-img-top" alt="...">
                                  
                                        
                                
                                </div>  

                                </div>
                                <div class="col-md-3 mb-4 text-center d-flex align-items-stretch"> 
                                <div class="card">
                                  <img src="imagenes/avatar.jpg" class="card-img-top" alt="...">

                                       
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
	





    <script src="vendor/jquery/jquery-3.4.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>