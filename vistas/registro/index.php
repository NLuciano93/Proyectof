<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" href="<?= PATH_VENDOR ?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= PATH_CSS ?>/estilos.css">
	<!-- <link rel="stylesheet" href="css/estilos.css"> -->
	<link rel="stylesheet" href="<?= PATH_CSS ?>/fonts.css">
	<link rel="stylesheet" href="<?= PATH_CSS ?>/all.min.css">
	<!-- Add icon library -->
	<script src="<?= PATH_VENDOR ?>/bootstrap/js/all.min.js"></script>



</head>

<body class="body_registro">

  <?php

     include_once PATH_DAOS . '/registroDAO.php';
  ?>
	<div class="container formu_registro">
		<div class="row formu_registro">
			
			<div class="col-12 formu_registro">
				<a href="index.php" class="d-flex justify-content-end enlaces_registro">Volver al inicio</a> 
				
				<nav class="border-bottom-0">

				  <div class="nav nav-tabs grupo_tabla border-bottom-0" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active enlaces_registro text-white bg-dark border border-success " id="nav-usuario-tab" data-toggle="tab" href="#nav-usuario" role="tab" aria-controls="nav-usuario" aria-selected="true">Registro Usuario</a>
				    <a class="nav-item nav-link enlaces_registro text-white bg-dark border border-success " id="nav-profe-tab" data-toggle="tab" href="#nav-profe" role="tab" aria-controls="nav-profe" aria-selected="false">Registro Profesor/a</a>
				     <a class="nav-item nav-link enlaces_registro text-white bg-dark border border-success" id="nav-gimnasio-tab" data-toggle="tab" href="#nav-gimnasio" role="tab" aria-controls="nav-gimnasio" aria-selected="false">Registro Gimnasio</a>
				    
				  </div>
				</nav>
				
				<div class="tab-content formu_registro bg-dark rounded border border-success" id="nav-tabContent">
				  <div class="tab-pane fade show active shadow-lg mb-5 bg-white rounded formu_registro contenido_formu border-top-0" id="nav-usuario" role="tabpanel" aria-labelledby="nav-usuario-tab">
				  	<form class="form-horizontal bg-dark" enctype="multipart/form-data" action="index.php" method="POST">
					
           	 		<input type="hidden" name="m" value="registro">
					<!-- Form Name -->
					<legend class="d-flex justify-content-center text-white">Registro Usuario</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-12 control-label text-white" for="Nombre">Nombre completo</label>  
					  <div class="col-12">
					  <input id="Nombre" name="nombre" type="text" placeholder="" class="form-control input-md  border border-success" required="">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-12 control-label text-white" for="telefono">Teléfono/celular</label>  
					  <div class="col-12">
					  <input id="telefono" name="telefono" type="text" placeholder="" class="form-control input-md border border-success">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-12 control-label text-white" for="mail">Mail</label>  
					  <div class="col-12">
					  <input id="mail" name="mail" type="text" placeholder="" class="form-control input-md border border-success" required="">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-12 control-label text-white" for="edad">Edad</label>  
					  <div class="col-12">
					  <input id="edad" name="edad" type="number" placeholder="" class="form-control input-md border border-success">
					    
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-12 control-label text-white" for="provincia">Provincia</label>
					  <div class="col-12">
							<select name="provincia" class="form-control border border-success" id="provincia">
								 <?php
					                  include_once PATH_DAOS. '/busqueDAO.php';


					                       echo getComboProvincia();

					                 ?>
						 </select>
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-12 control-label text-white" for="localidad">Localidad</label>
					  <div class="col-12">
					      <select  name="localidad" id="localidad" class="form-control border border-success" >
			               <option value="-1">Elegí primero Provincia </option>

			    		  </select>
					  </div>
					</div>

					<!-- Password input-->
					<div class="form-group ">
					  <label class="col-12 control-label text-white" for="contrasena">Contraseña</label>
					  <div class="col-12">
					    <input id="contrasena" name="contrasena" type="password" placeholder="" class="form-control input-md border border-success" required="">
					    
					  </div>
					</div>

				

					<!-- foto -->

					<div class="form-group container">
                            <label for="exampleFormControlFile1" class="text-white">Agrega foto perfil</label>
                             <input type="file" class="form-control-file btn btn-info col-12" id="exampleFormControlFile1" name="foto" >
                      </div>							



					<!-- Text input-->
					<div class="form-group">
					  <label class="col-12 control-label text-white" for="facebook">Perfil de Facebook (ejemplo: https://www.facebook.com/...)</label>  
					  <div class="col-12">
					  <input id="facebook" name="facebook" type="text" placeholder="" class="form-control input-md border border-success">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-12 control-label text-white" for="twitter">Twitter</label>  
					  <div class="col-12">
					  <input id="twitter" name="twitter" type="text" placeholder="" class="form-control input-md border border-success">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group mb-5">
					  <label class="col-12 control-label text-white" for="instagram">Instagram</label>  
					  <div class="col-12">
					  <input id="instagram" name="instagram" type="text" placeholder="" class="form-control input-md border border-success ">
					    
					  </div>
					</div>
					
					<div class="col-12 d-flex justify-content-center">
					
					<input type="submit" name="registrar" value="Registrar" class="btn btn-info col-12">
					
					</div>
					
					
				</form>



				  </div>
				  <div class="tab-pane fade shadow-lg mb-5 bg-white rounded formu_registro contenido_formu border-top-0" id="nav-profe" role="tabpanel" aria-labelledby="nav-profe-tab">


				  	<form class="form-horizontal bg-dark" enctype="multipart/form-data" action="index.php" method="POST">

              <input type="hidden" name="m" value="registro">
              <input type="hidden" name="tipo" value="profe">
										

										<!-- Form Name -->
										<legend class="d-flex justify-content-center text-white">Registro Profesor/a</legend>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="Nombre">Nombre completo</label>  
										  <div class="col-12">
										  <input id="Nombre" name="nombre" type="text" placeholder="" class="form-control input-md border border-success" required="">
										    
										  </div>
										</div>
					

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="telefono">Teléfono/celular</label>  
										  <div class="col-12">
										  <input id="telefono" name="telefono" type="text" placeholder="" class="form-control input-md border border-success">
										    
										  </div>
										</div>

									

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="mail">Mail</label>  
										  <div class="col-12">
										  <input id="mail" name="mail" type="mail" placeholder="" class="form-control input-md border border-success" required="">
										    
										  </div>
										</div>
										<!-- Text input-->
											<div class="form-group">
											  <label class="col-12 control-label text-white" for="edad">Edad</label>  
											  <div class="col-12">
											  <input id="edad" name="edad" type="number" placeholder="" class="form-control input-md border border-success">
											    
											  </div>
											</div>	

										<!-- Select Basic -->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="provincia">Provincia</label>
										  <div class="col-12">
										  	<select name="provincia" class="form-control border border-success" id="provinciaprof">
												     <?php
					                        			 include_once PATH_DAOS. '/busqueDAO.php';


					                          				 echo getComboProvincia();

					                        		 ?>
												</select>
										  </div>
										</div>

										<!-- Select Basic -->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="localidad">Localidad</label>
										  <div class="col-12">
										       <select  name="localidad" id="localidadprof" class="form-control border border-success" >
			                  					<option value="-1">Elegí primero Provincia </option>

			    					   			 </select>
										  </div>
										</div>

										<!-- Password input-->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="contrasena">Contraseña</label>
										  <div class="col-12">
										    <input id="contrasena" name="contrasena" type="password" placeholder="" class="form-control input-md border border-success" required="">
										    
										  </div>
										</div>

										

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="facebook">Perfil de Facebook (ejemplo: https://www.facebook.com/...)</label>  
										  <div class="col-12">
										  <input id="facebook" name="facebook" type="text" placeholder="" class="form-control input-md border border-success">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="twitter">Twitter</label>  
										  <div class="col-12">
										  <input id="twitter" name="twitter" type="text" placeholder="" class="form-control input-md border border-success">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="instagram">Instagram</label>  
										  <div class="col-12">
										  <input id="instagram" name="instagram" type="text" placeholder="" class="form-control input-md border border-success">
										    
										  </div>
										</div>

										<!-- Textarea -->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="descripcion">Descripción</label>
										  <div class="col-12">                     
										    <textarea class="form-control border border-success" id="descripcion" name="descripcion">Comentario acerca de ti</textarea>
										  </div>
										</div>

										<!-- foto -->

										<div class="form-group container">
					                            <label class="text-white" for="exampleFormControlFile1">Agrega foto perfil</label>
					                             <input type="file" class="form-control-file btn btn-info col-12" id="exampleFormControlFile1" name="foto" >
					                      </div>	

										<!-- File Button --> 
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="cv">Subir CV</label>
										  <div class="col-12">
										    <input id="cv" name="cv" class="input-file btn btn-info col-12" type="file">
										  </div>
										</div>

										<!-- Profe boton -->
										<!-- Multiple Checkboxes -->
												<div class="form-group">
												 
												  <div class="col-md-4">
												  <div class="checkbox">
												    <label for="profeED" class="text-white">
												      <input type="checkbox" name="profeED" id="checkboxes-0" value="1">
												      PROFESOR/A DE EDUCACIÓN FÍSICA
												    </label>
													</div>
												  </div>
												</div>

										<!-- Multiple Checkboxes -->
										<div class="form-group">
										  <label class="col-md-4 control-label text-white" for="especialidad">Especialidades</label>
										  <div class="col-md-4">
										  <div class="checkbox">
										    <label  class="text-white" for="especialidad-0">
										      <input type="checkbox" name="personaltrainer" id="especialidad-0" value="1">
										      Personal Trainer
										    </label>
											</div>
										  <div class="checkbox">
										    <label class="text-white" for="especialidad-1">
										      <input type="checkbox" name="deportes" id="especialidad-1" value="2">
										      Deportes
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-2" class="text-white">
										      <input type="checkbox" name="funcional" id="especialidad-2" value="3">
										      Funcional
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-3" class="text-white">
										      <input type="checkbox" name="crossfit" id="especialidad-3" value="4">
										      Crossfit 
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-4" class="text-white">
										      <input type="checkbox" name="yoga" id="especialidad-4" value="5">
										     Yoga
										    </label>
											</div>
										  </div>
										</div>

										<!-- Button -->
										
										  <div class="col-12 d-flex justify-content-center">
										      <input type="submit" name="registrar" value="Registrar" class="btn btn-info col-12">
										  </div>
										

										
										</form>

				  	
				 				 </div>
				  

				  <div class="tab-pane fade shadow-lg mb-5 bg-white rounded" id="nav-gimnasio" role="tabpanel" aria-labelledby="nav-gimnasio-tab">


				  	<form class="form-horizontal bg-dark" enctype="multipart/form-data" action="index.php" method="POST">
              <input type="hidden" name="m" value="registro">
              <input type="hidden" name="tipo" value="centro">
										

										<!-- Form Name -->
										<legend class="d-flex justify-content-center text-white">Registro Gimnasio</legend>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="Nombre">Nombre completo</label>  
										  <div class="col-12">
										  <input id="Nombre" name="nombre" type="text" placeholder="" class="form-control input-md border border-success" required="">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="telefono">Teléfono/celular</label>  
										  <div class="col-12">
										  <input id="telefono" name="telefono" type="text" placeholder="" class="form-control input-md border border-success">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="mail">Mail</label>  
										  <div class="col-12">
										  <input id="mail" name="mail" type="mail" placeholder="" class="form-control input-md border border-success" required="">
										    
										  </div>
										</div>

										<!-- Select Basic -->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="provincia">Provincia</label>
										  <div class="col-12">
										   
							    
												    <select name="provincia" class="form-control border border-success" id="provinciacen">
												     <?php
					                        			 include_once PATH_DAOS. '/busqueDAO.php';


					                          				 echo getComboProvincia();

					                        		 ?>
												    </select>
										  </div>
										</div>

										<!-- Select Basic -->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="localidad">Localidad</label>
										  <div class="col-12">
										    

											    <select  name="localidad" id="localidadcen" class="form-control border border-success" >
			                  					<option value="-1">Elegí primero Provincia </option>

			    					   			 </select>
										  </div>
										</div>

										<!-- Password input-->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="contrasena">Contraseña</label>
										  <div class="col-12">
										    <input id="contrasena" name="contrasena" type="password" placeholder="" class="form-control input-md border border-success" required="">
										    
										  </div>
										</div>

									

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="facebook">Perfil de Facebook (ejemplo: https://www.facebook.com/...)</label>  
										  <div class="col-12">
										  <input id="facebook" name="facebook" type="text" placeholder="" class="form-control input-md border border-success">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="twitter">Twitter</label>  
										  <div class="col-12">
										  <input id="twitter" name="twitter" type="text" placeholder="" class="form-control input-md border border-success">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="instagram">Instagram</label>  
										  <div class="col-12">
										  <input id="instagram" name="instagram" type="text" placeholder="" class="form-control input-md border border-success">
										    
										  </div>
										</div>

										<!-- Textarea -->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="descripcion">Descripción</label>
										  <div class="col-12">                     
										    <textarea class="form-control border border-success" id="descripcion" name="descripcion">Comentario acerca del local</textarea>
										  </div>
										</div>

										<!-- Textarea -->
										<div class="form-group">
										  <label class="col-12 control-label text-white" for="Horarios">Horarios</label>
										  <div class="col-12">                     
										    <textarea class="form-control border border-success" id="horarios" name="horarios">(EJ: Lu a Vi 8 a 22hs)</textarea>
										  </div>
										</div>
                      <!-- Textarea -->
                    <div class="form-group">
                      <label class="col-12 control-label text-white" for="direccion">Dirección</label>
                      <div class="col-12">                     
                        <textarea class="form-control border border-success" id="direccion" name="direccion">(EJ: Cordoba 222)</textarea>
                      </div>
                    </div>

										<!-- foto -->

										<div class="form-group container">
					                            <label for="exampleFormControlFile1" class="text-white">Agrega foto perfil</label>
					                             <input type="file" class="form-control-file btn btn-info col-12" id="exampleFormControlFile1" name="foto" >
					                      </div>	


										<!-- Multiple Checkboxes -->
										<div class="form-group">
										  <label class="col-md-4 control-label text-white" for="especialidad">Actividades</label>
										  <div class="col-md-4">
										  <div class="checkbox">
										    <label for="especialidad-0" class="text-white">
										      <input type="checkbox" name="musculacion" id="especialidad-0" value="1">
										      Musculación 										    
										  </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-1" class="text-white">
										      <input type="checkbox" name="crossfit" id="especialidad-1" value="2">
										     Crossfit
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-2" class="text-white">
										      <input type="checkbox" name="funcional" id="especialidad-2" value="3">
										      Funcional
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-3" class="text-white">
										      <input type="checkbox" name="yoga" id="especialidad-3" value="4">
										      Yoga
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-4" class="text-white">
										      <input type="checkbox" name="zumba" id="especialidad-4" value="5">
										      Zumba
										    </label>
											</div>
										  </div>
										</div>

										<!-- Button -->
										
										  <div class="col-12 d-flex justify-content-center">
										    <input type="submit" name="registrar" value="Registrar" class="btn btn-info col-12">
										  </div>
										

										
										</form>

				  	
				 				 </div>

							












				</div>
			</div>
		</div>
	</div>
	





	<script src="<?= PATH_VENDOR ?>/jquery/jquery-3.4.1.min.js"></script>




			  <script>
			    

			    $("#provincia").change( 

			      function(){
			        pedirDatos( $( "#provincia")[0].value );  
			      }
			       
			    );

			    function pedirDatos( id_provincia_seleccionada ){
			    

			      parametros = { id_provincia: id_provincia_seleccionada };

			      $.get( "example.php", parametros )
			        
			        .done(function( data ) {

			          $( "#localidad" ).html(data);
			        })

			        .fail(function() {
			          alert( "Error al obtener las localidades" );
			        })
			       
			    }
			   

			     $("#provinciaprof").change( 

			      function(){
			        pedirDatosprof( $( "#provinciaprof")[0].value );  
			      }
			       
			    );

			    function pedirDatosprof( id_provincia_seleccionada ){
			    

			      parametros = { id_provincia: id_provincia_seleccionada };

			      $.get( "example.php", parametros )
			        
			        .done(function( data ) {

			          $( "#localidadprof" ).html(data);
			        })

			        .fail(function() {
			          alert( "Error al obtener las localidades" );
			        })
			       
			    }

				
			     $("#provinciacen").change( 

			      function(){
			        pedirDatoscen( $( "#provinciacen")[0].value );  
			      }
			       
			    );

			    function pedirDatoscen( id_provincia_seleccionada ){
			    

			      parametros = { id_provincia: id_provincia_seleccionada };

			      $.get( "example.php", parametros )
			        
			        .done(function( data ) {

			          $( "#localidadcen" ).html(data);
			        })

			        .fail(function() {
			          alert( "Error al obtener las localidades" );
			        })
			       
			    }


			</script>

	<script src="<?= PATH_VENDOR ?>/bootstrap/js/bootstrap.min.js"></script>				
</body>
</html>