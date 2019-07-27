<?php

    include_once PATH_HELPERS . "/database_helper.php";



		
		function busquedalocalidad($id_localidad){

			$conexion = getConexion();

			$consulta = "SELECT * FROM localidad WHERE loca_id = " . $id_localidad;

			$resultado = $conexion->query($consulta);

			$localidad=  $resultado->fetch_assoc();

			return $localidad;

		}	