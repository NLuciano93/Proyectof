<?php

 		include_once PATH_HELPERS . '/database_helper.php';

 		function buscarProvincia(){

 			$conexion= getConexion();

 			$consulta = "SELECT * " .
 						"FROM provincia";
 						


 			$resultadoprovincia= $conexion->query($consulta);

 			return $resultadoprovincia;		

 		}