<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="css/estilos.css"> -->
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/all.min.css">
	<!-- Add icon library -->
	<script src="vendor/bootstrap/js/all.min.js"></script>



</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-12">

				<nav>

				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Registro Usuario</a>
				    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Registro Profesor/a</a>
				    
				  </div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
				  <div class="tab-pane fade show active shadow-lg p-3 mb-5 bg-white rounded" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				  	<form class="form-horizontal border ">
					<fieldset>

					<!-- Form Name -->
					<legend class="d-flex justify-content-center ">Registro Usuario</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Nombre">Nombre</label>  
					  <div class="col-md-4">
					  <input id="Nombre" name="Nombre" type="text" placeholder="" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Apellido">Apellido</label>  
					  <div class="col-md-4">
					  <input id="Apellido" name="Apellido" type="text" placeholder="" class="form-control input-md" required="">
					    
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

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="provincia">Provincia</label>
					  <div class="col-md-4">
					    <select id="provincia" name="provincia" class="form-control">
					      <option value="1">Buenos Aires</option>
					      <option value="2">Caba</option>
					    </select>
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="localidad">Localidad</label>
					  <div class="col-md-4">
					    <select id="localidad" name="localidad" class="form-control">
					      <option value="1">San Isidro</option>
					      <option value="2">San fernando</option>
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
					  <label class="col-md-4 control-label" for="facebook">Perfil de Facebook</label>  
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

					<button type="submit" class="btn btn-primary">Submit</button>

					</fieldset>
				</form>



				  </div>
				  <div class="tab-pane fade shadow-lg p-3 mb-5 bg-white rounded" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">


				  	<form class="form-horizontal">
										<fieldset>

										<!-- Form Name -->
										<legend class="d-flex justify-content-center">Registro Profesor/a</legend>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="Nombre">Nombre</label>  
										  <div class="col-md-4">
										  <input id="Nombre" name="Nombre" type="text" placeholder="" class="form-control input-md" required="">
										    
										  </div>
										</div>

										<!-- Text input-->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="Apellido">Apellido</label>  
										  <div class="col-md-4">
										  <input id="Apellido" name="Apellido" type="text" placeholder="" class="form-control input-md" required="">
										    
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

										<!-- Select Basic -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="provincia">Provincia</label>
										  <div class="col-md-4">
										    <select id="provincia" name="provincia" class="form-control">
										      <option value="1">Buenos Aires</option>
										      <option value="2">Caba</option>
										    </select>
										  </div>
										</div>

										<!-- Select Basic -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="localidad">Localidad</label>
										  <div class="col-md-4">
										    <select id="localidad" name="localidad" class="form-control">
										      <option value="1">San Isidro</option>
										      <option value="2">San fernando</option>
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
										  <label class="col-md-4 control-label" for="facebook">Perfil de Facebook</label>  
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

										<!-- File Button --> 
										<div class="form-group">
										  <label class="col-md-4 control-label" for="cv">Subir CV</label>
										  <div class="col-md-4">
										    <input id="cv" name="cv" class="input-file" type="file">
										  </div>
										</div>

										<!-- Multiple Checkboxes -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for="especialidad">Especialidades</label>
										  <div class="col-md-4">
										  <div class="checkbox">
										    <label for="especialidad-0">
										      <input type="checkbox" name="especialidad" id="especialidad-0" value="1">
										      Personal Trainer
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-1">
										      <input type="checkbox" name="especialidad" id="especialidad-1" value="2">
										      Funcional
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-2">
										      <input type="checkbox" name="especialidad" id="especialidad-2" value="3">
										      Crossfit
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-3">
										      <input type="checkbox" name="especialidad" id="especialidad-3" value="4">
										      Yoga
										    </label>
											</div>
										  <div class="checkbox">
										    <label for="especialidad-4">
										      <input type="checkbox" name="especialidad" id="especialidad-4" value="5">
										      Deportes
										    </label>
											</div>
										  </div>
										</div>

										<!-- Button -->
										<div class="form-group">
										  <label class="col-md-4 control-label" for=""></label>
										  <div class="col-md-4">
										    <button id="" name="" class="btn btn-primary">Registrar</button>
										  </div>
										</div>

										</fieldset>
										</form>

				  	
				 				 </div>
				  
				</div>
			</div>
		</div>
	</div>

	<script src="vendor/jquery/jquery-3.4.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>				
</body>
</html>