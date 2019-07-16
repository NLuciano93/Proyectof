<?php 

	define( 'HOST' , 'localhost' );
	define( 'USER' , 'root' );
	define( 'PASSWORD' , '' );
	define( 'BD' , 'proyectofull' );

	function getConexion(){
		
		$conexion = new mysqli( HOST, USER, PASSWORD, BD );

        $conexion->set_charset('utf8');

		return $conexion;

	function conectarProfe(){

		$conexion = getConexion();

		$consulta = "SELECT * ".
					"FROM usuarios ".
					"INNER JOIN usuario_profe".
					"ON usuarios.usr_id = usuario_profe.usr_pf_id";

		$resultado = $conexion->query($consulta);
		 

		 return $resultado;

	}

	conectarProfe();
	echo "conectado";

	?>