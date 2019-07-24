<?php
	include_once PATH_DAOS . '/accesoperfilDAO.php';

switch ($_GET["tipo"]) {


  		case 'profe':
  		$contenido_seccion2 = PATH_VIEWS . "/perfilacceso/partials/contenido_perfilacceso_profe.php";
  		

  		break;
  		

  		case 'centro':
  		$contenido_seccion2 = PATH_VIEWS . "/perfilacceso/partials/contenido_perfilacceso_centro.php";
  		

  		break;
  		case 'comun':
  		 $contenido_seccion2 = PATH_VIEWS . "/perfilacceso/partials/contenido_perfilacceso_u.php";
  		break;

  		

  }
 
    

    include( PATH_VIEWS . '/common/base.php' ); ?>