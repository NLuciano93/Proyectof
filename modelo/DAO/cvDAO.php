<?php
	include_once PATH_HELPERS . '/database_helper.php';

	function obtenerCV($id_usuario){

		$conexion1 = getConexion();

		$consulta1 = "SELECT pf_cv FROM usuario_profe WHERE usr_pf_id = " . $id_usuario; 

		$resultado1= $conexion1->query($consulta1);

		return $resultado1;


	}