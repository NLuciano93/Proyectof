<?php 

		 include_once PATH_DAOS . "/profeDAO.php";
         include_once PATH_HELPERS . "/html_helper.php";

         if ( isset( $_GET["submit"])) {
         

         		$busqueda = $_GET["busqueda"];
         		$provincia = $_GET["provincia"];
         		$localidad = $_GET["localidad"]; 

         		$resultado = buscarProfes( $busqueda, $localidad );

         		while( $profe= $resultado->fetch_assoc() ){
         			crearHTMLcardProfe($profe["usr_id"], $profe["usr_nombre"], $profe["usr_edad"],$profe["usr_foto"], $profe["pf_educ_fisica"]);

         		}


         }