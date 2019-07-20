<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>

  <select name="provincia" id="provincia">
    
    <option value="1">CABA</option>
    <option value="2">Buenos Aires</option>

  </select>



  <select name="localidad" id="localidad">

  </select>


	<script src="vendor/jquery/jquery-3.4.1.min.js"></script>	

	<script>
		

    $("#provincia").change( 

      function(){
        pedirDatos( $( "#provincia option:selected" )[0].value );  
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
	
</body>

</html>