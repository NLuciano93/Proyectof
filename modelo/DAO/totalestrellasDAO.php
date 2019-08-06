<?php

	 include_once PATH_HELPERS .'/database_helper.php';

                                    $conexion = getConexion();

                                    $sqlstar = "SELECT AVG(calificacion) AS calificacion FROM comentarios WHERE id_usr_comentado = '$perfilaccesoid'";

                                    $star = $conexion->query($sqlstar);

                                    $fila = $star->fetch_assoc();

                                    $totalstar = $fila['calificacion'];

                                    $totalstardeci = number_format($totalstar, 2, '.','');


 