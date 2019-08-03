<?php

include_once PATH_HELPERS . '/database_helper.php';


		$conexion = getConexion();

		if (isset($_POST["agregar"])) {

			

			$idprof = $_POST["id"];

			if (isset($_POST["personaltrainer"])) {
                    	$personaltrainer = $_POST["personaltrainer"];
                    	 $sql = "INSERT INTO especialidades_usuarios_profesores (id_profesor, id_esp_prof) VALUES ('$idprof','$personaltrainer')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["deporte"])) {
                    	$deporte = $_POST["deporte"];
                    	 $sql = "INSERT INTO especialidades_usuarios_profesores (id_profesor, id_esp_prof) VALUES ('$idprof','$deporte')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["funcional"])) {
                    	$funcional = $_POST["funcional"];
                    	 $sql = "INSERT INTO especialidades_usuarios_profesores (id_profesor, id_esp_prof) VALUES ('$idprof','$funcional')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["crossfit"])) {
                    	$crossfit = $_POST["crossfit"];
                    	 $sql = "INSERT INTO especialidades_usuarios_profesores (id_profesor, id_esp_prof) VALUES ('$idprof','$crossfit')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["yoga"])) {
                    	$yoga = $_POST["yoga"];
                    	 $sql = "INSERT INTO especialidades_usuarios_profesores (id_profesor, id_esp_prof) VALUES ('$idprof','$yoga')";                

                    	$conexion->query($sql);
					}

		 }
		
		 if (isset($_POST["quitar"])) {

			

			$idprof = $_POST["id"];

			if (isset($_POST["personaltrainer"])) {
                    	$personaltrainer = $_POST["personaltrainer"];
                    	 $sql = "DELETE FROM especialidades_usuarios_profesores WHERE id_profesor = '$idprof'   AND id_esp_prof = '$personaltrainer'";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["deporte"])) {
                    	$deporte = $_POST["deporte"];
                    	 $sql = "DELETE FROM especialidades_usuarios_profesores WHERE id_profesor = '$idprof'   AND id_esp_prof = '$deporte'";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["funcional"])) {
                    	$funcional = $_POST["funcional"];
                    	 $sql = "DELETE FROM especialidades_usuarios_profesores WHERE id_profesor = '$idprof'  AND id_esp_prof = '$funcional'";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["crossfit"])) {
                    	$crossfit = $_POST["crossfit"];
                    	 $sql = "DELETE FROM especialidades_usuarios_profesores WHERE id_profesor = '$idprof'   AND id_esp_prof = '$crossfit'";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["yoga"])) {
                    	$yoga = $_POST["yoga"];
                    	 $sql = "DELETE FROM especialidades_usuarios_profesores WHERE id_profesor = '$idprof'   AND id_esp_prof = '$yoga'";                

                    	$conexion->query($sql);
					}

		 }



		function buscarEspProf($id_profe){ 

		$conexion = getConexion();

		$sql = "SELECT * FROM especialidades_usuarios_profesores, especialidades_profes WHERE id_profesor = '$id_profe' AND id_esp_prof = esp_profe_id";

		$resultado = $conexion->query($sql);

		return $resultado;

	}

