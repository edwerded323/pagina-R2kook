<?php


require_once "conexion.php";

class ModeloFormularios {

    /* registro*/
    static public function modeloregistro($tabla,$datos) {
        /*statement: declaracion*/ 
        

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (IDCorreo, Nombre, Contraseña,rol) VALUES (:email, :nombre, :contra :rol)");

        $stmt->bindParam(':email', $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $datos['nombre'],  PDO::PARAM_STR);
        $stmt->bindParam(':contra', $datos['contra'],  PDO::PARAM_STR);
        $stmt->bindParam(':rol', $datos['rol'],  PDO::PARAM_STR);

        if ($stmt->execute()){
            return "ok";
        }else{
            print_r(conexion::conectar() -> errorInfo());

        }
        $stmt ->close();
        $stmt = null;



    }

    /* ingreso */

    static public function modeloSelecionarRegistro($tabla, $columna, $valor) {

        $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla where $columna = :$columna");
        $stmt->bindParam(":".$columna, $valor, PDO::PARAM_STR);
        
        $stmt->execute();

        return $stmt-> fetch() ; 

        $stmt-> close();
        $stmt = null;

    }  


    /**********mostrar registro*/

    static public function modelomostrarRegist($tabla ) {

            
        $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();
        return $stmt-> fetchAll() ;

        $stmt-> close();
        $stmt = null;

    }
    
            
}