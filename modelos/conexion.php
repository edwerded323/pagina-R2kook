<?php

class Conexion {

    static public function conectar () {

        // parametros de PDO
        // PDO("nombre del servidor"; "nombre de la base de datos","usuario", contraseña)

        $link = new PDO("mysql:host=localhost;dbname=r2dcook", "root", "");

        $link->exec("set names utf8");

        return $link;
    }

}