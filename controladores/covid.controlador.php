<?php

use PHPMailer\PHPMailer\PHPMailer;

class ControladorCovid{

	static public function ctrInformacionPaises(){
		$tabla = "paises";
		$respuesta = ModeloCovid::mdlInformacionPaises($tabla);
		return $respuesta;
	}

}