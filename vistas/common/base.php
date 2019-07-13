<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FullMove</title>
	

	<link rel="stylesheet" href="<?= PATH_VENDOR ?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= PATH_CSS ?>/estilos.css">
	<link rel="stylesheet" href="<?= PATH_CSS ?>/fonts.css">
	<link rel="stylesheet" href="<?= PATH_CSS ?>/all.min.css">
	<!-- Add icon library -->
	<script src="<?= PATH_VENDOR ?>/bootstrap/js/all.min.js"></script>



</head>
<body>
	<header>
		<div class="container-fluid">
			<nav class="navbar navbar-light navbar-expand-xl">
				<a class="navbar-brand" href="index.php">
   				 	<img src="<?= PATH_IMAGENES . '/logopag2.png' ?>" width="100" height="100" class="d-inline-block align-top" alt="">
   					
 					 </a>	
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
							</button>  				
			 					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
									    <ul class="navbar-nav mr-auto">
									      <li class="nav-item">
									        <a class="nav-link barra" href="index.php">INICIO</a>
									      </li>
<!-- 									      <li class="nav-item">
									        <a class="nav-link barra" href="index.php?m=perfil_u">PERFIL</a>
									      </li> -->
									      <li class="nav-item dropdown">
									        <a class="nav-link dropdown-toggle barra" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									         CENTRO DE ENTRENAMIENTO
									        </a>
									        <div class="dropdown-menu despliegue" aria-labelledby="navbarDropdown">
									          <a class="dropdown-item barraentrenamiento" href="index.php?m=bus_centro">MUSCULACIÓN</a>
									          <a class="dropdown-item barraentrenamiento" href="index.php?m=bus_centro">FUNCIONAL</a>
									          <a class="dropdown-item barraentrenamiento" href="index.php?m=bus_centro">CROSSFIT</a>
									          <a class="dropdown-item barraentrenamiento" href="index.php?m=bus_centro">YOGA</a>
									          <div class="dropdown-divider"></div>
									          <a class="dropdown-item barraentrenamiento" href="index.php?m=bus_centro">POR ZONA</a>
									        </div>
									      </li>
									       <li class="nav-item">
									        <a class="nav-link barra" href="index.php?m=bus_profe">BUSCAR PROFESOR/A</a>
									      </li>
									       <li class="nav-item">
									        <a class="nav-link barra" href="index.php?m=reco">RECOMENDACIONES</a>
									      </li>

<!-- 
									       <li class="nav-item">
									        <a class="nav-link barra" href="#">CONTACTO</a>
									      </li> -->
									      
							 		    </ul>
    							<div>
    								
								

								<?php 
								if ( !isset($_SESSION["usuario"]) ){ ?>
									
										 <a href="index.php?m=registro" class="btn badge-pill btn-outline-dark registro"><i class="fas fa-user-plus"></i> REGISTRATE</a>
											
										 <a href="#"  data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark registro"><i class="fas fa-eye"></i> LOGIN</a>
									
								<?php 
								}
								else{
								?>
								<ul class="navbar-nav ml-md-auto">
									<li class="nav-item dropdown">
										 <a class="nav-link dropdown-toggle barraentrenamiento" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"><i class="fas fa-running"></i><?= $_SESSION["usuario"] ?></a>
										<div class="dropdown-menu dropdown-menu-right despliegue" aria-labelledby="navbarDropdownMenuLink">
											 <a class="dropdown-item barraentrenamiento" href="index.php?m=perfil_u">Mi perfil</a>

											  <div class="dropdown-divider"></div>
											 
											 <a class="dropdown-item barraentrenamiento" href="index.php?m=logout">Salir</a>
										</div>
									</li>
								<?php 
								}
								?> 

    							</div>


			</nav>
			
		</div>	
	</header>
					<!--Carusel--> 
	<div class="container-fluid">
				<?php if(isset($contenido_seccion1)){include( $contenido_seccion1 );} ?>
	</div>


				<?php if(isset($contenido_seccion2)){include( $contenido_seccion2 );} ?>


				

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Ingresar a FullMove</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

			<div class="row justify-content-center">
				<div class="col-md-8">
					<form role="form" method="POST">

						<input type="hidden" name="m" value="login">

						<div class="form-group">
							 
							<label for="user_name">Ingresa Mail</label>

							<input type="email" class="form-control" name="user_name" id="email" />
						</div>

						<div class="form-group">
							 
							<label for="password">Contraseña</label>

							<input type="password" class="form-control" name="password" id="password" />
						</div>
					<div class="d-flex justify-content-between">
						<button type="submit" class="btn btn-primary">
							Ingresar
						</button>
						<a href="index.php?m=registro" class="btn btn-dark"><i class="fas fa-user-plus"></i>
							Registrate
						</button> </a>
					</div>

					</form>
				</div>
			</div>
	      </div>
	      
	    </div>
	  </div>
	</div>


















	<script src="<?= PATH_VENDOR ?>/jquery/jquery-3.4.1.min.js"></script>
	<script src="<?= PATH_VENDOR ?>/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>