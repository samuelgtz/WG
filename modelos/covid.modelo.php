<?php

require_once "conexion.php";

class ModeloCovid{

	static public function mdlInformacionPaises($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT ID, PAIS_NOMBRE, CONFIRMADOS, RECUPERADOS, MUERTOS FROM $tabla ORDER BY ID");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }

}
