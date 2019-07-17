            <?php

                include PATH_DAOS . "/centroDAO.php";
                include PATH_HELPERS . "/html_helper.php";

                if ( isset( $_GET["submit"] ) )
                {
                   
                    $busqueda = $_GET["busqueda"];
                    $provincia = $_GET["provincia"];
                    $localidad = $_GET["localidad"];
                
                    $resultado = buscarCentros( $busqueda  );

                    while( $centro = $resultado->fetch_assoc() ){
                        crearHTMLCardCentro( $centro["usr_id"], $centro["usr_nombre"], $centro["usr_foto"], $centro["usr_centro_direccion"]  );
                    }

                }

            