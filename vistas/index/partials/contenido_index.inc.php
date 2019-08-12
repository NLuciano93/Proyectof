
<div class="container-fluid">
	<div class="row">
		<div class="col-2 sticky-top">
			<!-- BARRA SOCIAL-->
			<div class="social sticky-top" >
				<ul id="colsocial">
					<li><a href="https://www.facebook.com/movete.move.7" class="icon-facebook2"></a></li>
					<li><a href="https://twitter.com/Fullmove5" class="icon-twitter"></a></li>
					<li><a href="https://www.instagram.com/fullmovefull/" class="icon-instagram"></a></li>
					<li><a href="https://www.youtube.com/channel/UCGK8zYfuOUnGFo0jHvoLSsQ" class="icon-youtube"></a></li>
					<li><a href="mailto:fullmovecontacto@gmail.com" class="icon-mail4"></a></li>
				</ul>
			</div>
		</div>

		<!-- Posteos-->

		<div class="col-7 border seccionpost">

			
				
			<div class="card-body text-center bg-dark shadow-lg text-white border border-warning rounded mt-3">
			<h1 class="align-center">SECCIÓN DE POST</h1>
			</div>


<?php if (isset($_SESSION["usuario"])) { ?>
	


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
<?php } ?>
	
	<div>

			<?php
			 include_once PATH_DAOS . "/posteoDAO.php";
			 include_once PATH_HELPERS . "/html_helper.php";

			 $resultado = buscarPubli();

                    while( $public = $resultado->fetch_assoc() ){
                        crearHTMLpublicacion( $public["usr_id"], $public["texto"], $public["usr_foto"], $public["usr_nombre"], $public["fecha"]  );
                    }



			?>

	</div>






			
		</div>

		<!-- CLASIFICACION-->


		<div class="col-3">

			<div id="clasificacion">
			<div class="text-center mb-3">
			<h5><small class="titulo_clasif text-dark text-center text-uppercase">AGRADECEMOS EL APOYO DE</small></h5>
			</div>
				
			<div class="casilleroclas2 text-center">
				
				<div class="imagenclasif">
				<img class="w-50 img-thumbnail" src="<?= PATH_IMAGENES . '/comIT.jpg' ?>" alt="">
				</div>
				
			</div>
			<div class="casilleroclas2 text-center">
				
				<div class="imagenclasif">
				<img class="w-75 img-thumbnail" src="<?= PATH_IMAGENES . '/telecom1.png' ?>" alt="">
				</div>


				
			</div>
			
			
			
			<div class="casilleroclas2 text-center">
				
				<div class="imagenclasif">
				<img class="w-75 img-thumbnail" src="<?= PATH_IMAGENES . '/logosanfer.png' ?>" alt="">
				</div>
				


			</div>
			
		</div>
		
		</div>



	</div>

	

</div>
