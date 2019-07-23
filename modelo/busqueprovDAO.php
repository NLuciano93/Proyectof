<?php

                         include_once PATH_HELPERS . '/database_helper.php';

                         function getComboProvincia (){

                                $conexion= getConexion();

                                     $consulta = "SELECT *" .
                                                 "FROM provincia";
                        


                                  $resultadoprovincia= $conexion->query($consulta);

                                  $listaprov = '<option value="0">Elegi una provincia</option>';

                                while ($rowprov = $resultadoprovincia->fetch_assoc()) {
                                        $listaprov .= "<option value ='$rowprov[prov_id]'> $rowprov[prov_nombre]</option>";
                                     }

                                     return $listaprov;     

                          }