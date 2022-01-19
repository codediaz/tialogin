<?php

Class Conexion{
    public static function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=tia","root","");
        return $link;
    }
}