<?php

 		include PATH_HELPERS . '/database_helper.php';

 		function buscarProvincia(){

 			$conexion= getConexion();

 			$consulta = "SELECT *".
 						"FROM provincia";
 						"ORDER BY prov_nombre"


 			$resultadoprovincia= $conexion->query($consulta);

 			return $resultadoprovincia;		

 		}