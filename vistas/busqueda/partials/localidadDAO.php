<?php

    

    include PATH_HELPERS . "/database_helper.php";

	$id_provincia = $_GET["id_provincia"];

    $conexion = getConexion();

    $consulta = "SELECT * FROM localidad WHERE loca_prov_id = " . $id_provincia;

    $resultado = $conexion->query($consulta);

    while ( $localidad = $resultado->fetch_assoc() ){
        echo '<option value="' . $localidad["loca_id"] . '">' . $localidad["loca_nombre"] . '</option>';
    }

?>
