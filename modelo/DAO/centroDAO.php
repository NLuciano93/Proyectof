<?php

include_once PATH_HELPERS . "/database_helper.php";

function buscarCentros( $nombreCentro, $localidad ){

    $conexion = getConexion();

    $consulta = "SELECT * 
                FROM usuarios, usuario_centro 
                WHERE usuarios.usr_id = usuario_centro.usr_centro_id";

    if ( $nombreCentro != '' ){
        $consulta .= " AND usuarios.usr_nombre LIKE '%". $nombreCentro. "%' ";
    }

     if ( $localidad != '-1') {

     	$consulta .= " AND usr_localidad = ". $localidad;
    		
     }


    $resultado = $conexion->query($consulta);

    return $resultado;

}