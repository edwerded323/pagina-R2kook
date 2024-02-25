<?php

class Conexion {

    static public function conectar () {

        // parametros de PDO
        // PDO("nombre del servidor"; "nombre de la base de datos","usuario", contraseña)

        $link = new PDO("mysql:host=localhost;dbname=id21147511_r2dcook", "id21147511_edward", "Sena1234*");

        $link->exec("set names utf8");

        return $link;
    }

}