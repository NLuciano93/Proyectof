<?php
		include_once PATH_HELPERS . '/database_helper.php';
		
		$conexion = getConexion();

		if (isset($_GET["submit1k"])) {
					
					

					$numero1k = $_GET["numero1k"];

					$sql1k = "INSERT INTO progreso_1k (id_usr_1k, minutos_1k, dia_1k) VALUES ('".  $_SESSION["id_usuario"] ."','".  $numero1k ."', now() )";

	 				$conexion->query($sql1k);

	 				echo '<script> window.location="index.php?m=perfil" </script>';

			

		}

		if (isset($_GET["submit3k"])) {
					
					

					$numero3k = $_GET["numero3k"];

					$sql3k = "INSERT INTO progreso_3k (id_usr_3k, minutos_3k, dia_3k) VALUES ('".  $_SESSION["id_usuario"] ."','".  $numero3k ."', now() )";

	 				$conexion->query($sql3k);

	 				echo '<script> window.location="index.php?m=perfil" </script>';

			
		}

		if (isset($_GET["submit10k"])) {
					
				

					$numero10k = $_GET["numero10k"];

					$sql10k = "INSERT INTO progreso_10k (id_usr_10k, minutos_10k, dia_10k) VALUES ('".  $_SESSION["id_usuario"] ."','".  $numero10k ."', now() )";

	 				$conexion->query($sql10k);

	 				echo '<script> window.location="index.php?m=perfil" </script>';

			
		}


		function buscartabla1k($id_usuario) {

			$conexion = getConexion();

			$consulta = "SELECT * FROM progreso_1k WHERE id_usr_1k = " . $id_usuario;

			$resultado = $conexion->query($consulta);

			return $resultado;






		}
				
		function buscartabla3k($id_usuario) {

			$conexion = getConexion();

			$consulta1 = "SELECT * FROM progreso_3k WHERE id_usr_3k = " . $id_usuario;

			$resultado1 = $conexion->query($consulta1);

			return $resultado1;






		}		


		function buscartabla10k($id_usuario) {

			$conexion = getConexion();

			$consulta2 = "SELECT * FROM progreso_10k WHERE id_usr_10k = " . $id_usuario;

			$resultado2 = $conexion->query($consulta2);

			return $resultado2;






		}