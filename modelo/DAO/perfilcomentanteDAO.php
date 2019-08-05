<?php


    include_once PATH_HELPERS . "/database_helper.php";



		
		function saberPerfilusr($id_usr_comentante){

			$conexion = getConexion();

			$consulta = "SELECT * FROM usuarios WHERE usr_id = " . $id_usr_comentante;

			$resultado = $conexion->query($consulta);

			$usr =  $resultado->fetch_assoc();

			return $usr;

		}	