<?php

/**registros */


class ControladorFormularios
{

    static public function ctrRegistro()
    {

        if (isset($_POST['reg_nombre'])) {

            if ($_POST["reg_contraseña"]  == $_POST["reg_Rcontraseña"]) {

                $tabla = "usuario";

                $datos  = array(
                    "email" => $_POST['reg_email'],
                    "nombre" => $_POST['reg_nombre'],
                    "contra" => $_POST['reg_contraseña'],
                    "rol" => $_POST['id_rol'],
                    "id" => $_POST['ID']


                );

                $respuesta = ModeloFormularios::modeloregistro($tabla, $datos);

                return $respuesta;
            } else {
                echo

                '         
                <script>                            
                swal.fire("contraseña no coincide");

                if(window.history.replaceState ){
                    window.history.replaceState( null, null, window.location.href )};
                    
                
                </script>';
            }
        }
    }


    /**inicio de sesion */

    public function ctrIngreso()
    {

        if (isset($_POST['ini_correo'])) {

            $tabla = "usuario";
            $columna = "IDcorreo";
            $valor = $_POST['ini_correo'];


            $respuesta =  ModeloFormularios::modeloSelecionarRegistro($tabla, $columna, $valor);




            if ($respuesta["IDCorreo"] == $_POST['ini_correo'] && $respuesta['Contraseña'] == $_POST['ini_contra']) {
                $rol=$respuesta["id_rol"];
                
                    $_SESSION["rol"]= $rol;
                    switch ($_SESSION["rol"]) {
                        case 1:
                            
                    echo

                    '<script> swal.fire({
                    icon: "success",
                    title: "...",
                    text: "acceso correcto",
                });
                
                window.location.href="index.php?ruta=ingresorecetas";
                  
                if(window.history.replaceState ){
                     window.history.replaceState( null, null, window.location.href );
                }
                               
                </script>';

                
            
 

                break;
                case 2:
                
                    

                    echo

                    '<script> swal.fire({
                    icon: "success",
                    title: "Bienvenido",
                    text: "acceso correcto",
                    
                });
                  
                   
                  
                if(window.history.replaceState ){
                     window.history.replaceState( null, null, window.location.href );
                }
               

                
                </script>';

                default;
                }
            } else {

                echo '<script> 
                if(window.history.replaceState ){
                     window.history.replaceState( null, null, window.location.href );
                }
                
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "contraseña o correo equivocado",
                    
                  });
                  
                
                </script>';
            }
        }
    }

    /**mostrar registros */
    static public function ctrMostrarRegis(){


                $tabla = "usuario";
            $respuesta= modeloFormularios::modelomostrarRegist($tabla );
            return $respuesta;

    }
}
