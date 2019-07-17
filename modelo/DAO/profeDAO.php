<?php 

include PATH_HELPERS . "/database_helper.php";

function buscarProfes( $nombreProfe ){

    $conexion = getConexion();

    $consulta = "SELECT * 
                FROM usuarios, usuario_profe 
                WHERE usuarios.usr_id = usuario_profe.usr_pf_id";

    if ( $nombreProfe != '' ){
        $consulta .= " AND usuarios.usr_nombre LIKE '%$nombreProfe%'";
    }


    $resultado = $conexion->query($consulta);

    return $resultado;

}