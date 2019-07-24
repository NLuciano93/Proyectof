<?php
	 include_once PATH_HELPERS . "/database_helper.php";
            
	function subirfoto($newFileName){
          $conexion = getConexion();

           $sql = "INSERT INTO fotos (id_foto_usr, nombrefoto, fecha_foto) VALUES ('".  $_SESSION['id_usuario'] ."', '$newFileName', now() )";

           $conexion->query($sql);


           echo '<script> window.location="index.php?m=perfil"</script>';

       }


       function mostrarfotos ($id_usuario){

       		$conexion = getConexion();

       		$consulta= "SELECT * FROM fotos WHERE id_foto_usr = '". $id_usuario . "' ORDER BY id_foto DESC";

       		$resultado= $conexion->query($consulta);

       		return $resultado;

       }
