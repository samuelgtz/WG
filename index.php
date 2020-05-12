<?php

require_once 'controladores/plantilla.controlador.php';
require_once "controladores/covid.controlador.php";


require_once "modelos/covid.modelo.php";

/*=============================
=            Rutas            =
=============================*/

require_once 'modelos/rutas.php';

/*=====  End of Rutas  ======*/

/*=================================
=            Librerias            =
=================================*/

/*=====  End of Librerias  ======*/

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
