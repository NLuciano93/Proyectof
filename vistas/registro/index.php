<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" href="<?= PATH_VENDOR ?>/bootstrap/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="css/estilos.css"> -->
	<link rel="stylesheet" href="<?= PATH_CSS ?>/fonts.css">
	<link rel="stylesheet" href="<?= PATH_CSS ?>/all.min.css">
	<!-- Add icon library -->
	<script src="<?= PATH_VENDOR ?>/bootstrap/js/all.min.js"></script>



</head>

<body>

  <?php

     include_once PATH_DAOS . '/registroDAO.php';
  ?>
	<div class="container">
		<div class="row">
			<div class="col-12">

				<nav>

				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active " id="nav-usuario-tab" data-toggle="tab" href="#nav-usuario" role="tab" aria-controls="nav-usuario" aria-selected="true">Registro Usuario</a>
				    <a class="nav-item nav-link" id="nav-profe-tab" data-toggle="tab" href="#nav-profe" role="tab" aria-controls="nav-profe" aria-selected="false">Registro Profesor/a</a>
				     <a class="nav-item nav-link" id="nav-gimnasio-tab" data-toggle="tab" href="#nav-gimnasio" role="tab" aria-controls="nav-gimnasio" aria-selected="false">Registro Gimnasio</a>
				    
				  </div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
				  <div class="tab-pane fade show active shadow-lg p-3 mb-5 bg-white rounded" id="nav-usuario" role="tabpanel" aria-labelledby="nav-usuario-tab">
				  	<form class="form-horizontal border" enctype="multipart/form-data" action="index.php" method="POST">
					<fieldset>
           	 		<input type="hidden" name="m" value="registro">
					<!-- Form Name -->
					<legend class="d-flex justify-content-center ">Registro Usuario</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Nombre">Nombre completo</label>  
					  <div class="col-md-4">
					  <input id="Nombre" name="nombre" type="text" placeholder="" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="telefono">Teléfono/celular</label>  
					  <div class="col-md-4">
					  <input id="telefono" name="telefono" type="text" placeholder="" class="form-control input-md">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="mail">Mail</label>  
					  <div class="col-md-4">
					  <input id="mail" name="mail" type="text" placeholder="" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="edad">Edad</label>  
					  <div class="col-md-4">
					  <input id="edad" name="edad" type="number" placeholder="" class="form-control input-md">
					    
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="provincia">Provincia</label>
					  <div class="col-md-4">
							<select name="provincia" class="form-control" id="provincia">
								 <?php
					                  include_once PATH_DAOS. '/busqueDAO.php';


					                       echo getComboProvincia();

					                 ?>
						 </select>
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="localidad">Localidad</label>
					  <div class="col-md-4">
					      <select  name="localidad" id="localidad" class="form-control" >
			               <option value="-1">Elegí primero Provincia </option>

			    		  </select>
					  </div>
					</div>

					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="contrasena">Contraseña</label>
					  <div class="col-md-4">
					    <input id="contrasena" name="contrasena" type="password" placeholder="" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="repcontrasena">Repetir Contraseña</label>
					  <div class="col-md-4">
					    <input id="repcontrasena" name="repcontrasena" type="password" placeholder="" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<!-- foto -->

					<div class="form-group">
                            <label for="exampleFormControlFile1">Agrega foto perfil</label>
                             <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto" >
                      </div>							



					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="facebook">Perfil de Facebook (ejemplo: https://www.facebook.com/...)</label>  
					  <div class="col-md-4">
					  <input id="facebook" name="facebook" type="text" placeholder="" class="form-control input-md">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="twitter">Twitter</label>  
					  <div class="col-md-4">
					  <input id="twitter" name="twitter" type="text" placeholder="" class="form-control input-md">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="instagram">Instagram</label>  
					  <div class="col-md-4">
					  <input id="instagram" name="instagram" type="text" placeholder="" class="form-control input-md">
					    
					  </div>
					</div>

					<input type="submit" name="registrar" value="Registrar" class="btn btn-primary">

					</fieldset>
				</form>



				  </div>
				  <div class="tab-pane fade shadow-lg p-3 mb-5 bg-white rounded" id="nav-profe" role="tabpanel" aria-labelledby="nav-profe-tab">


				  	<form class="form-horizontal" enctype="multipart/form-data" action="index.php" method="POST">

              <input type="hidden" name="m" value="registro">
              <input type="hidden" name="tipo" value="profe">
										<fieldset>

										<!-- Form Name -->
										<legend class="d-flex justify-content-center">Registro Profesor/a</legend>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="Nombre">Nombre completo</label>  
										  <div class="col-md-4">
										  <input id="Nombre" name="nombre" type="text" placeholder="" class="form-control input-md" required="">
										    
										  </div>
										</div>
					

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="telefono">Teléfono/celular</label>  
										  <div class="col-md-4">
										  <input id="telefono" name="telefono" type="text" placeholder="" class="form-control input-md">
										    
										  </div>
										</div>

									

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="mail">Mail</label>  
										  <div class="col-md-4">
										  <input id="mail" name="mail" type="mail" placeholder="" class="form-control input-md" required="">
										    
										  </div>
										</div>
										<!-- Text input-->
											<div class="form-group">
											  <label class="col-md-4 control-label" for="edad">Edad</label>  
											  <div class="col-md-4">
											  <input id="edad" name="edad" type="number" placeholder="" class="form-control input-md">
											    
											  </div>
											</div>	

										<!-- Select Basic -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="provincia">Provincia</label>
										  <div class="col-md-4">
										  	<select name="provincia" class="form-control" id="provinciaprof">
												     <?php
					                        			 include_once PATH_DAOS. '/busqueDAO.php';


					                          				 echo getComboProvincia();

					                        		 ?>
												</select>
										  </div>
										</div>

										<!-- Select Basic -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="localidad">Localidad</label>
										  <div class="col-md-4">
										       <select  name="localidad" id="localidadprof" class="form-control" >
			                  					<option value="-1">Elegí primero Provincia </option>

			    					   			 </select>
										  </div>
										</div>

										<!-- Password input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="contrasena">Contraseña</label>
										  <div class="col-md-4">
										    <input id="contrasena" name="contrasena" type="password" placeholder="" class="form-control input-md" required="">
										    
										  </div>
										</div>

										<!-- Password input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="repcontrasena">Repetir Contraseña</label>
										  <div class="col-md-4">
										    <input id="repcontrasena" name="repcontrasena" type="password" placeholder="" class="form-control input-md" required="">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="facebook">Perfil de Facebook (ejemplo: https://www.facebook.com/...)</label>  
										  <div class="col-md-4">
										  <input id="facebook" name="facebook" type="text" placeholder="" class="form-control input-md">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="twitter">Twitter</label>  
										  <div class="col-md-4">
										  <input id="twitter" name="twitter" type="text" placeholder="" class="form-control input-md">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="instagram">Instagram</label>  
										  <div class="col-md-4">
										  <input id="instagram" name="instagram" type="text" placeholder="" class="form-control input-md">
										    
										  </div>
										</div>

										<!-- Textarea -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="descripcion">Descripción</label>
										  <div class="col-md-4">                     
										    <textarea class="form-control" id="descripcion" name="descripcion">Comentario acerca de ti</textarea>
										  </div>
										</div>

										<!-- foto -->

										<div class="form-group">
					                            <label for="exampleFormControlFile1">Agrega foto perfil</label>
					                             <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto" >
					                      </div>	

										<!-- File Button --> 
										<div class="form-group">
										  <label class="col-md-4 control-label" for="cv">Subir CV</label>
										  <div class="col-md-4">
										    <input id="cv" name="cv" class="input-file" type="file">
										  </div>
										</div>

										<!-- Profe boton -->
										<!-- Multiple Checkboxes -->
												<div class="form-group">
												  <label class="col-md-4 control-label" for="profeED">PROFESOR/A DE EDUCACIÓN FÍSICA</label>
												  <div class="col-md-4">
												  <div class="checkbox">
												    <label for="profeED">
												      <input type="checkbox" name="profeED" id="checkboxes-0" value="1">
												      Option one
												    </label>
													</div>
												  </div>
												</div>

										<!-- Multiple Checkboxes -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="especialidad">Especialidades</label>
										  <div class="col-md-4">
										  <div class="checkbox">
										    <label for="especialidad-0">
										      <input type="checkbox" name="personaltrainer" id="especialidad-0" value="1">
										      Personal Trainer
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-1">
										      <input type="checkbox" name="deportes" id="especialidad-1" value="2">
										      Deportes
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-2">
										      <input type="checkbox" name="funcional" id="especialidad-2" value="3">
										      Funcional
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-3">
										      <input type="checkbox" name="crossfit" id="especialidad-3" value="4">
										      Crossfit 
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-4">
										      <input type="checkbox" name="yoga" id="especialidad-4" value="5">
										     Yoga
										    </label>
											</div>
										  </div>
										</div>

										<!-- Button -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for=""></label>
										  <div class="col-md-4">
										      <input type="submit" name="registrar" value="Registrar" class="btn btn-primary">
										  </div>
										</div>

										</fieldset>
										</form>

				  	
				 				 </div>
				  

				  <div class="tab-pane fade shadow-lg p-3 mb-5 bg-white rounded" id="nav-gimnasio" role="tabpanel" aria-labelledby="nav-gimnasio-tab">


				  	<form class="form-horizontal" enctype="multipart/form-data" action="index.php" method="POST">
              <input type="hidden" name="m" value="registro">
              <input type="hidden" name="tipo" value="centro">
										<fieldset>

										<!-- Form Name -->
										<legend class="d-flex justify-content-center">Registro Gimnasio</legend>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="Nombre">Nombre completo</label>  
										  <div class="col-md-4">
										  <input id="Nombre" name="nombre" type="text" placeholder="" class="form-control input-md" required="">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="telefono">Teléfono/celular</label>  
										  <div class="col-md-4">
										  <input id="telefono" name="telefono" type="text" placeholder="" class="form-control input-md">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="mail">Mail</label>  
										  <div class="col-md-4">
										  <input id="mail" name="mail" type="mail" placeholder="" class="form-control input-md" required="">
										    
										  </div>
										</div>

										<!-- Select Basic -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="provincia">Provincia</label>
										  <div class="col-md-4">
										   
							    
												    <select name="provincia" class="form-control" id="provinciacen">
												     <?php
					                        			 include_once PATH_DAOS. '/busqueDAO.php';


					                          				 echo getComboProvincia();

					                        		 ?>
												    </select>
										  </div>
										</div>

										<!-- Select Basic -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="localidad">Localidad</label>
										  <div class="col-md-4">
										    

											    <select  name="localidad" id="localidadcen" class="form-control" >
			                  					<option value="-1">Elegí primero Provincia </option>

			    					   			 </select>
										  </div>
										</div>

										<!-- Password input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="contrasena">Contraseña</label>
										  <div class="col-md-4">
										    <input id="contrasena" name="contrasena" type="password" placeholder="" class="form-control input-md" required="">
										    
										  </div>
										</div>

										<!-- Password input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="repcontrasena">Repetir Contraseña</label>
										  <div class="col-md-4">
										    <input id="repcontrasena" name="repcontrasena" type="password" placeholder="" class="form-control input-md" required="">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="facebook">Perfil de Facebook (ejemplo: https://www.facebook.com/...)</label>  
										  <div class="col-md-4">
										  <input id="facebook" name="facebook" type="text" placeholder="" class="form-control input-md">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="twitter">Twitter</label>  
										  <div class="col-md-4">
										  <input id="twitter" name="twitter" type="text" placeholder="" class="form-control input-md">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="instagram">Instagram</label>  
										  <div class="col-md-4">
										  <input id="instagram" name="instagram" type="text" placeholder="" class="form-control input-md">
										    
										  </div>
										</div>

										<!-- Textarea -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="descripcion">Descripción</label>
										  <div class="col-md-4">                     
										    <textarea class="form-control" id="descripcion" name="descripcion">Comentario acerca del local</textarea>
										  </div>
										</div>

										<!-- Textarea -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="Horarios">Horarios</label>
										  <div class="col-md-4">                     
										    <textarea class="form-control" id="horarios" name="horarios">(EJ: Lu a Vi 8 a 22hs)</textarea>
										  </div>
										</div>
                      <!-- Textarea -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="direccion">direccion</label>
                      <div class="col-md-4">                     
                        <textarea class="form-control" id="direccion" name="direccion">(EJ: Lu a Vi 8 a 22hs)</textarea>
                      </div>
                    </div>

										<!-- foto -->

										<div class="form-group">
					                            <label for="exampleFormControlFile1">Agrega foto perfil</label>
					                             <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto" >
					                      </div>	


										<!-- Multiple Checkboxes -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="especialidad">Actividades</label>
										  <div class="col-md-4">
										  <div class="checkbox">
										    <label for="especialidad-0">
										      <input type="checkbox" name="musculacion" id="especialidad-0" value="1">
										      Musculación 										    
										  </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-1">
										      <input type="checkbox" name="crossfit" id="especialidad-1" value="2">
										     Crossfit
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-2">
										      <input type="checkbox" name="funcional" id="especialidad-2" value="3">
										      Funcional
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-3">
										      <input type="checkbox" name="yoga" id="especialidad-3" value="4">
										      Yoga
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-4">
										      <input type="checkbox" name="zumba" id="especialidad-4" value="5">
										      Zumba
										    </label>
											</div>
										  </div>
										</div>

										<!-- Button -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for=""></label>
										  <div class="col-md-4">
										    <input type="submit" name="registrar" value="Registrar" class="btn btn-primary">
										  </div>
										</div>

										</fieldset>
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