<div class="container-fluid">
	<div class="row">
		<div class="col-2 border">
			<!-- BARRA SOCIAL-->
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

		<!-- Posteos-->

		<div class="col-7 border">
			<h1 class="align-center">Sección de post</h1>




		<div class="ingresoposteo">
				<div class="card">
				  <h5 class="card-header">¿Qué estas pensando?</h5>
				  <div class="card-body">
				  	<form action="index.php" method="post">
				  		<input type="hidden" name="m" value="index">

				 		
						    <div class="form-group">								    
								 	<textarea name="publicacion" class="form-control" id="publicacion" placeholder="¿Qué estas pensando?" rows="3" required></textarea>
						  </div>
						
				    
				  
				    <input type="submit" name="submit" value="Publicar" class="btn btn-primary"> 
				    </form>
				    <?php				    	
				    
				    include_once PATH_DAOS . "/posteoDAO.php";
				    
				    ?>
				    
				  </div>
				</div>
			</div>

			<?php
			 include_once PATH_DAOS . "/posteoDAO.php";
			 include_once PATH_HELPERS . "/html_helper.php";

			 $resultado = buscarPubli();

                    while( $public = $resultado->fetch_assoc() ){
                        crearHTMLpublicacion( $public["usr_id"], $public["texto"], $public["usr_foto"], $public["usr_nombre"], $public["fecha"]  );
                    }



			?>






	<div class="posteo">
			<div class="card">
						<div class="row no-gutters">
						    <div class="col-md-2">
						      <img src="<?= PATH_IMAGENES . '/avatar.jpg' ?>" class="card-img border rounded-circle" alt="...">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Nombre de usuario</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae delectus iusto maiores eveniet aspernatur harum voluptates labore. Quasi veniam nulla modi ipsam, quibusdam voluptatem error, eum mollitia eligendi doloribus, facilis.</p>
						        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						        <div>
									<span class="btn btn-info btn-lg "><i class="far fa-thumbs-up"></i> x100</span>
								</div>	
						      </div>
						    </div>
						  </div>
						</div>
			</div>

			<div class="posteo">
			<div class="card">
						<div class="row no-gutters">
						    <div class="col-md-2">
						      <img src="<?= PATH_IMAGENES . '/avatar.jpg' ?>" class="card-img border rounded-circle" alt="...">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Nombre de usuario</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae delectus iusto maiores eveniet aspernatur harum voluptates labore. Quasi veniam nulla modi ipsam, quibusdam voluptatem error, eum mollitia eligendi doloribus, facilis.</p>
						        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						        <div>
									<span class="btn btn-info btn-lg "><i class="far fa-thumbs-up"></i> x100</span>
								</div>	
						      </div>
						    </div>
						  </div>
						</div>
			</div>

			
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
