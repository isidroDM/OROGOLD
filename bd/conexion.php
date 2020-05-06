<?php
/*
 *   Oro Gold
 *   Autor: Isidro Delgado Murillo
 *   Fecha: 05-05-2020
 *   Versión: 1.0
 *   Descripcion: Conexion con la base de datos para las paginas del sitio 
 * 
 * 
 */
//Clase conectar que se manda  llamar cada vez que se necesita
class Conectar {

//Funcion publica que establece la conexion con el servidor de base de datos
    public static function con() {
      
        $conexion = mysqli_connect("localhost", "root", "P4SSW0RD", "orogold");
        return $conexion;
    }

}
