<?php

include PATH_HELPERS . "/database_helper.php";

function buscarCentros( $nombreCentro ){

    $conexion = getConexion();

    $consulta = "SELECT * 
                FROM usuarios, usuario_centro 
                WHERE usuarios.usr_id = usuario_centro.usr_centro_id";

    if ( $nombreCentro != '' ){
        $consulta .= " AND usuarios.usr_nombre LIKE '%$nombreCentro%'";
    }

    $resultado = $conexion->query($consulta);

    return $resultado;

}