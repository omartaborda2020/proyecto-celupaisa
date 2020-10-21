<?php

require_once "conexion.php";

class ModeloFormularios{

    static public function mdlRegistro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password)
            VALUES(:nombre, :email, :password)");

        $stmt->bindparam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindparam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindparam(":password", $datos["password"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close();

        $stmt = null;
    }


    static public function mdlSeleccionarRegistros($tabla, $item, $valor){

        if($item == null && $valor == null){


            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM 

                $tabla ORDER BY id DESC");

            $stmt->execute(); 

            return $stmt->fetchAll();
        }else{

            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM 

                $tabla WHERE $item = :$item ORDER BY id DESC");
            $stmt -> bindparam(":" .$item, $valor, PDO::PARAM_STR);

            $stmt -> execute(); 

            return $stmt -> fetch();

        }



        $stmt->close();

        $stmt = null;
    }

    static public function mdlActualizarRegistro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, email=:email, password=:password WHERE id = :id");


        $stmt->bindparam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindparam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindparam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindparam(":id", $datos["id"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close();

        $stmt = null;


    }

    static public function mdlEliminarRegistro($tabla, $valor){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt -> bindparam(":id",  $valor,  PDO::PARAM_INT);

        if($stmt -> execute()){

            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close();

        $stmt = null;


    }

}


