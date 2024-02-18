<?php

/**registros */


class ControladorFormularios
{

    static public function ctrRegistro()
    {

        if (isset($_POST['reg_nombre'])) {

            $tabla = "usuario";

            $datos  = array(
                "email" => $_POST['reg_email'],
                "nombre" => $_POST['reg_nombre'],
                "contra" => $_POST['reg_contraseña']);

            $respuesta = ModeloFormularios::modeloregistro($tabla, $datos);

            return $respuesta;
        }
    }

/**inicio de sesion */

    public function ctrIngreso() 
    {
        
        if (isset($_POST['ini_correo'])) {
            
            $tabla = "usuario";
            $columna= "IDcorreo";
            $valor =$_POST['ini_correo'];

            $respuesta =  ModeloFormularios::modeloSelecionarRegistro($tabla, $columna, $valor);

                  

            
               if($respuesta["IDCorreo"] == $_POST['ini_correo'] && $respuesta ['Contraseña'] == $_POST['ini_contra']){

                

                echo 
                '<script>swal.fire({
                    icon: "success",
                    title: "...",
                    text: "acceso correcto",
                    
                  });  </script>';

               }else{

                echo '<script> 
                if(window.history.replaceState ){
                     window.history.replaceState( null, null, window.location.href );
                }
                
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "contraseña o correo equivocado",
                    
                  });
                
                </script>' ;
                
            }
               }


        }
 
  }            

