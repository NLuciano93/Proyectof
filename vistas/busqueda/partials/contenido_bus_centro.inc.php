
    
    

    <div class="container mt-3">
    	<div class="row">
    		<div class="col-4">
				<div class="container border border-dark bg-dark shadow-lg text-white">

                    <form action="index.php">

                        <input type="hidden" name="m" value="busqueda">

                        <input type="hidden" name="tipo" value="centro">

        			  	<div class="form-group">
        			  		        			  		
    					    <label class="mt-3" for="buscar">
                                <h5>BÚSQUEDA CENTROS</h5>
                            </label>
    					  
                            <input name="busqueda" type="text" class="form-control" id="buscar" placeholder="Buscar">
    					</div>
             
             

              <div class="col-12 d-flex justify-content-center">
    					
                <input type="submit" name="submit" value="Buscar" class="btn btn-info border border-dark col-12">
              
                </div>
             
						<div class="mt-3">
							<h5>Avanzado</h5>
						</div>

        			    <div class="form-group">
    					    <label for="provincia">Provincia</label>
    					    
                            
                       <select name="provincia" class="form-control" id="provincia">
                         
                         <?php
                         include_once PATH_DAOS. '/busqueDAO.php';


                           echo getComboProvincia();

                         ?>
                        
     
    					    </select>
                  
    					</div>

    				    <div class="form-group">
    					    <label for="localidadcen">Localidad </label>
    					   
                               
                <select  name="localidad" id="localidad" class="form-control" >
                  <option value="-1">Elegí primero Provincia </option>

    					    </select>
    				    </div>
    				
    				    <!-- Multiple Checkboxes -->

					
						

    				
					    


						
    			
                    </form>
                  
                

          </div>
    		
    	

    </div>

	<div class="col-8 border shadow-lg p-3 mb-5 bg-white rounded buscentro">


          

                <!-- 1- Obtener los parametros de busqueda
                     2- Ejecutar busqueda en la base
                     3- listar resultados -->


            <?php
                include PATH_VIEWS . "/busqueda/partials/parte_bus_centro.php";


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

