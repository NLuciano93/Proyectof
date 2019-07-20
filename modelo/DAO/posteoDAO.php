 <?php 
	include_once PATH_HELPERS . "/database_helper.php";
	
	if (isset($_POST["publicacion"])) {


				 $publicacion = $_POST["publicacion"];
				    
				 include_once PATH_HELPERS . "/database_helper.php";
				    

				 $conexion = getConexion();

				 $sql = "INSERT INTO posteo (texto, id_usuario, fecha) VALUES ('$publicacion', '".  $_SESSION['id_usuario'] ."', now() )";

				    		$conexion->query($sql);

			
				 }

				 if(isset($sql)){
				 	echo '<script> window.location="index.php"</script>';
				 }	
	 

 

 		function buscarPubli(){

 					$conexion = getConexion();

 					$consulta = "SELECT * 
               					FROM posteo, usuarios 
                				WHERE posteo.id_usuario = usuarios.usr_id 
                				ORDER BY id_posteo DESC";


                	$posteocompleto = $conexion->query($consulta);

                	return $posteocompleto;




 		}