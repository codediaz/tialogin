<?php
require_once "conexion.php";

Class UserModel{

    public static function login($tabla,$item,$valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ");

        $stmt->bindParam(":".$item,$valor,PDO::PARAM_STR);

        if($stmt->execute()){

            return $stmt->fetch();

        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        

        
       

        

    }
}