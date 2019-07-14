<?php   
  
  switch ($_SESSION["tipo_usuario"]) {


  		case 'profe':
  		$contenido_seccion2 = PATH_VIEWS . "/perfil/partials/contenido_perfil_profe.php";
  		

  		break;
  		

  		case 'centro':
  		$contenido_seccion2 = PATH_VIEWS . "/perfil/partials/contenido_perfil_centro.php";
  		

  		break;
  		case 'comun':
  		 $contenido_seccion2 = PATH_VIEWS . "/perfil/partials/contenido_perfil_u.inc.php";
  		break;

  		

  }
 
    

    include( PATH_VIEWS . '/common/base.php' ); ?>
