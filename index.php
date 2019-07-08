<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FullMove</title>

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
				      		<a href="index.html"><img src="imagenes/titulo1.png" class="d-block w-100" height="500px" alt="">
				      		</a>
				    	</div>
				    	<div class="carousel-item">
				      		<a href="index.html"><img src="imagenes/centro3.png" class="d-block w-100" height="500px" alt="">
				      		</a>				      		
				    	</div>
				    	<div class="carousel-item">
				      		<a href="index.html"><img src="imagenes/profe2.png" class="d-block w-100"height="500px" alt="">
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
				<img class="w-100" src="imagenes/avatar.jpg" alt="">
				</div>
				<div class="botone">
        			 <span class="btn btn-info btn-lg" ><i class="far fa-thumbs-up"></i>x100</span>
        			 
         			 <span class="btn btn-info btn-lg"><i class="fas fa-star estrella"></i>x100</span>
        		</div>

			</div>
			
			<div class="casilleroclas">
				<p class="parrafo">PROGRESO</p>
				<div class="imagenclasif">
				<img class="w-100" src="imagenes/avatar.jpg" alt="">
				</div>


				<div class="botone">
					<span class="btn btn-info btn-lg"><i class="far fa-thumbs-up"></i>x100</span>

				</div>
			</div>
			
			<div class="casilleroclas">
				<p class="parrafo">PROFESOR/A</p>
				<div class="imagenclasif">
				<img class="w-100" src="imagenes/avatar.jpg" alt="">
				</div>
				<div class="botone">
					<span class="btn btn-info btn-lg "><i class="far fa-thumbs-up"></i> x100</span>
        			 
         			<span class="btn btn-info btn-lg"><i class="fas fa-star estrella"></i>x100</span>
         		</div>
			</div>
			
			<div class="casilleroclas">
				<p class="parrafo">POSTEO</p>
				<div class="imagenclasif">
				<img class="w-100" src="imagenes/avatar.jpg" alt="">
				</div>
				<div class="botone">
					<span class="btn btn-info btn-lg"><i class="far fa-thumbs-up"></i>x100</span>
        			 		
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