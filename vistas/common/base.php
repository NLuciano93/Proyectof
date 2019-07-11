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
									      <li class="nav-item">
									        <a class="nav-link barra" href="index.php?m=perfil_u">PERFIL</a>
									      </li>
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


									       <li class="nav-item">
									        <a class="nav-link barra" href="#">CONTACTO</a>
									      </li>
									      
							 		    </ul>
    							<div>
    								<a href="index.php?m=registro" class="btn badge-pill btn-outline-dark registro"><i class="fas fa-user-plus"></i> REGISTRATE</a>
    								<br>
    								<br>
    								<a href="#"  data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark registro"><i class="fas fa-eye"></i> LOGIN</a>
    							</div>


			</nav>
			
		</div>	
	</header>
					<!--Carusel--> 
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-12">
					<!--indicadores debajo-->
		<div id="carouselExampleIndicators" class="carousel slide carru" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			    
			  </ol>
				  <div class="carousel-inner">
				  	<!--imagenes-->
				    	<div class="carousel-item active">
				      		<a href="index.php?m=reco"><img src="<?= PATH_IMAGENES . '/titulo1.png' ?>" class="d-block w-100" height="500px" alt="">
				      		</a>
				    	</div>
				    	<div class="carousel-item">
				      		<a href="index.php?m=bus_centro"><img src="<?= PATH_IMAGENES . '/centro3.png' ?>" class="d-block w-100" height="500px" alt="">
				      		</a>				      		
				    	</div>
				    	<div class="carousel-item">
				      		<a href="index.php?m=bus_profe"><img src="<?= PATH_IMAGENES . '/profe2.png' ?>" class="d-block w-100"height="500px" alt="">
				      		</a>
				    	</div>
				  </div>
				   	<!--previo anterior-->
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Anterior</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Siguiente</span>
				  </a>
		</div>
	</div>
	</div>
	</div>

<!-- BARRA SOCIAL-->



<div class="container-fluid">
	<div class="row">
		<div class="col-2 border">
			<div class="social" >
				<ul id="colsocial">
					<li><a href="" class="icon-facebook2"></a></li>
					<li><a href="" class="icon-twitter"></a></li>
					<li><a href="" class="icon-instagram"></a></li>
					<li><a href="" class="icon-youtube"></a></li>
					<li><a href="" class="icon-mail4"></a></li>
				</ul>
			</div>
		</div>

		<div class="col-7 border">
			
		</div>

		<!-- CLASIFICACION-->


		<div class="col-3 border">

			<div id="clasificacion">
			<div>
			<h4 class="titulo_clasif">Clasificación:</h4>
			</div>
				
			<div class="casilleroclas">
				<p class="parrafo">CENTRO</p>
				<div class="imagenclasif">
				<img class="w-100" src="<?= PATH_IMAGENES . '/avatar.jpg' ?>" alt="">
				</div>
				<div class="botone">
        			 <span class="btn btn-info btn-lg" ><i class="far fa-thumbs-up"></i>x100</span>
        			 
         			 <span class="btn btn-info btn-lg"><i class="fas fa-star estrella"></i>x100</span>
        		</div>

			</div>
			
			<div class="casilleroclas">
				<p class="parrafo">PROGRESO</p>
				<div class="imagenclasif">
				<img class="w-100" src="<?= PATH_IMAGENES . '/avatar.jpg' ?>" alt="">
				</div>


				<div class="botone">
					<span class="btn btn-info btn-lg"><i class="far fa-thumbs-up"></i>x100</span>

				</div>
			</div>
			
			<div class="casilleroclas">
				<p class="parrafo">PROFESOR/A</p>
				<div class="imagenclasif">
				<img class="w-100" src="<?= PATH_IMAGENES . '/avatar.jpg' ?>" alt="">
				</div>
				<div class="botone">
					<span class="btn btn-info btn-lg "><i class="far fa-thumbs-up"></i> x100</span>
        			 
         			<span class="btn btn-info btn-lg"><i class="fas fa-star estrella"></i>x100</span>
         		</div>
			</div>
			
			<div class="casilleroclas">
				<p class="parrafo">POSTEO</p>
				<div class="imagenclasif">
				<img class="w-100" src="<?= PATH_IMAGENES . '/avatar.jpg' ?>" alt="">
				</div>
				<div class="botone">
					<span class="btn btn-info btn-lg"><i class="far fa-thumbs-up"></i>x100</span>
        			 		
         		</div>


			</div>
		</div>
		
		</div>



	</div>

	

</div>

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

							<input type="text" class="form-control" name="user_name" id="user_name" />
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