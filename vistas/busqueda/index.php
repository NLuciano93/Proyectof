 <?php   
 	
    if ( $_GET["tipo"] == "profe" ){
        $contenido_seccion2 = PATH_VIEWS . "/busqueda/partials/contenido_bus_profe.inc.php";
    }
    else{
        $contenido_seccion2 = PATH_VIEWS . "/busqueda/partials/contenido_bus_centro.inc.php";
    }

    include( PATH_VIEWS . '/common/base.php' );