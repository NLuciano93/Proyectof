<?php

		include_once PATH_HELPERS . '/database_helper.php';


		$conexion = getConexion();

		if (isset($_POST["agregar"])) {

			

			$idcen = $_POST["id"];

			if (isset($_POST["musculacion"])) {
                    	$musculacion = $_POST["musculacion"];
                    	 $sql = "INSERT INTO actividades_usario_centro (id_centro, id_act_centro) VALUES ('$idcen','$musculacion')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["crossfit"])) {
                    	$crossfit = $_POST["crossfit"];
                    	 $sql = "INSERT INTO actividades_usario_centro (id_centro, id_act_centro) VALUES ('$idcen','$crossfit')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["funcional"])) {
                    	$funcional = $_POST["funcional"];
                    	 $sql = "INSERT INTO actividades_usario_centro (id_centro, id_act_centro) VALUES ('$idcen','$funcional')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["yoga"])) {
                    	$yoga = $_POST["yoga"];
                    	 $sql = "INSERT INTO actividades_usario_centro (id_centro, id_act_centro) VALUES ('$idcen','$yoga')";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["zumba"])) {
                    	$zumba = $_POST["zumba"];
                    	 $sql = "INSERT INTO actividades_usario_centro (id_centro, id_act_centro) VALUES ('$idcen','$zumba')";                

                    	$conexion->query($sql);
					}

		 }
		
		 if (isset($_POST["quitar"])) {

			

			$idcen = $_POST["id"];

			if (isset($_POST["musculacion"])) {
                    	$musculacion = $_POST["musculacion"];
                    	 $sql = "DELETE FROM actividades_usario_centro WHERE id_centro = '$idcen'   AND id_act_centro = '$musculacion' ";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["crossfit"])) {
                    	$crossfit = $_POST["crossfit"];
                    	 $sql = "DELETE FROM actividades_usario_centro WHERE id_centro = '$idcen'   AND id_act_centro = '$crossfit' ";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["funcional"])) {
                    	$funcional = $_POST["funcional"];
                    	 $sql = "DELETE FROM actividades_usario_centro WHERE id_centro = '$idcen'  AND id_act_centro = '$funcional' ";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["yoga"])) {
                    	$yoga = $_POST["yoga"];
                    	 $sql = "DELETE FROM actividades_usario_centro WHERE id_centro = '$idcen'   AND id_act_centro = '$yoga'";                

                    	$conexion->query($sql);
                    	
                    }
                     if (isset($_POST["zumba"])) {
                    	$zumba = $_POST["zumba"];
                    	 $sql = "DELETE FROM actividades_usario_centro WHERE id_centro = '$idcen'   AND id_act_centro = '$zumba'";                

                    	$conexion->query($sql);
					}

		 }



		function buscarActCen($id_centro){ 

		$conexion = getConexion();

		$sql = "SELECT * FROM actividades_usario_centro, actividades_centro WHERE id_centro = '$id_centro' AND id_act_centro = act_centro_id";

		$resultado = $conexion->query($sql);

		return $resultado;

	}

