<?php 

include_once PATH_HELPERS . "/database_helper.php";

function buscarProfes( $nombreProfe, $localidad ){

    $conexion = getConexion();

    $consulta = "SELECT * 
                FROM usuarios, usuario_profe 
                WHERE usuarios.usr_id = usuario_profe.usr_pf_id";

    if ( $nombreProfe != '' ){
        $consulta .= " AND usuarios.usr_nombre LIKE '% ". $nombreProfe . "%' ";
    }

    if ( $localidad != '-1') {

     	$consulta .= " AND usr_localidad = ". $localidad;
    		
     }



    $resultado = $conexion->query($consulta);

    return $resultado;

}