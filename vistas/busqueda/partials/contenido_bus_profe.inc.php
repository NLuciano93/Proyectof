
    
    

    <div class="container mt-3">
    	<div class="row">
    		<div class="col-4 ">
				<div class="container border">
    			  	
					<form action="index.php">
							
							<input type="hidden" name="m" value="busqueda">

							<input type="hidden" name="tipo" value="profe">
						
				    			<div class="form-group">				    			  	 		
									<label class="mt-3" for="buscar">
										<h5>BÚSQUEDA</h5>
									</label>

									<input name="busqueda" type="text" class="form-control" id="buscar" placeholder="Buscar">
								 </div>

					  			<input type="submit" name="submit" value="Buscar" class="btn btn-primary">
					
									<div class="mt-3">
										<h5>Avanzado</h5>
									</div>

		    			  <div class="form-group">
							    
							    <label for="exampleFormControlSelect1">Provincia</label>
							    
							    <select name="provincia" class="form-control" id="provincia">
							     <?php
                        			 include_once PATH_DAOS. '/busqueDAO.php';


                          				 echo getComboProvincia();

                        		 ?>
							    </select>

							  </div>

							 <div class="form-group">

								    <label for="exampleFormControlSelect2">Localidad</label>

								   <select  name="localidad" id="localidad" class="form-control" >
                  						<option value="-1">Elegí primero Provincia </option>

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
						    <label for="checkboxes-1">
						      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
						      Personal Trainer
						    </label>
							</div>
							<div class="checkbox">
						    <label for="checkboxes-2">
						      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
						      Funcional
						    </label>
							</div>
						  <div class="checkbox">
						    <label for="checkboxes-3">
						      <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4">
						      Musculación
						    </label>
							</div>
							<div class="checkbox">
						    <label for="checkboxes-4">
						      <input type="checkbox" name="checkboxes" id="checkboxes-4" value="5">
						      Crossfit
						    </label>
							</div>
							<div class="checkbox">
						    <label for="checkboxes-5">
						      <input type="checkbox" name="checkboxes" id="checkboxes-5" value="5">
						      Yoga
						    </label>
							</div>
						  </div>
						</div>
						
						</form>





						</div>

    		</div>
    		<div class="col-8 border shadow-lg p-3 mb-5 bg-white rounded"> 
    		 <?php
                include_once PATH_VIEWS . "/busqueda/partials/parte_bus_profe.php";


            ?>
			</div>



    	</div>



    </div>

  <script src="vendor/jquery/jquery-3.4.1.min.js"></script> 

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


</script>
