<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Busqueda_Profe</title>
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

    <br>
    
    

    <div class="container">
    	<div class="row">
    		<div class="col-4 ">
				<div class="container border">
    			  	<div class="form-group">
    			  		
    			  		<br>
					    <label for="buscar"><h5>BÚSQUEDA</h5></label>
					    <input type="text" class="form-control" id="buscar" placeholder="Buscar">
					  </div>

					  <button type="submit" class="btn btn-primary">Buscar</button>

						<br>
						<br>
							<div>
								<h5>Avanzado</h5>
							</div>

    			  <div class="form-group">
					    <label for="exampleFormControlSelect1">Provincia</label>
					    <select class="form-control" id="exampleFormControlSelect1">
					      <option>1</option>
					      <option>2</option>
					      <option>3</option>
					      <option>4</option>
					      <option>5</option>
					    </select>
					  </div>

				 <div class="form-group">
					    <label for="exampleFormControlSelect1">Localidad</label>
					    <select class="form-control" id="exampleFormControlSelect1">
					      <option>1</option>
					      <option>2</option>
					      <option>3</option>
					      <option>4</option>
					      <option>5</option>
					    </select>
				</div>
				
				<!-- Multiple Checkboxes -->
						<div class="form-group">
						  <label class="control-label" for="checkboxes">Especialidad</label>
						  <div>
						  <div class="checkbox">
						    <label for="checkboxes-0">
						      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
						      Profesor/a de Educación Física
						    </label>
							</div>
							<div class="checkbox">
						    <label for="checkboxes-0">
						      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
						      Personal Trainer
						    </label>
							</div>
							<div class="checkbox">
						    <label for="checkboxes-0">
						      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
						      Funcional
						    </label>
							</div>
						  <div class="checkbox">
						    <label for="checkboxes-1">
						      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
						      Musculación
						    </label>
							</div>
							<div class="checkbox">
						    <label for="checkboxes-2">
						      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
						      Crossfit
						    </label>
							</div>
							<div class="checkbox">
						    <label for="checkboxes-3">
						      <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4">
						      Yoga
						    </label>
							</div>
						  </div>
						</div>
						</div>

    		</div>
    		 <div class="col-8 border shadow-lg p-3 mb-5 bg-white rounded"> 
					<div class="card mb-3">
								  <div class="row no-gutters">
								    <div class="col-md-4">
								      <img src="imagenes/avatar.jpg" class="card-img border rounded-circle" alt="...">
								    </div>
								    <div class="col-md-8">
								      <div class="card-body">
								        <h5 class="card-title">Nombre Profe</h5>
								        <br>
								        <div>
								        <span class="card-text">Edad:</span>
								        </div>
								         <div>
								        <span class="card-text">Localidad:</span>
								        </div>
								        <div>
								        <span class="card-text">Especialidad:</span>
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










    		 </div>





    	</div>



    </div>







	<script src="vendor/jquery/jquery-3.4.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>