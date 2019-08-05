<?php

	function mostrarcomentarios($id_usuario){


			$conexion = getConexion();

       		$consulta= "SELECT * FROM comentarios WHERE id_usr_comentado = '" . $id_usuario . "'";

       		$resultado= $conexion->query($consulta);

       		return $resultado;







	}