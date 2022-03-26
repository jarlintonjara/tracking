<?php

require_once "controladores/plantilla.controlador.php";

require_once "controladores/usuario.controlador.php";
require_once "modelos/usuario.modelo.php";

require_once "controladores/tracking_automotriz.controlador.php";
require_once "modelos/tracking_automotriz.modelo.php";

$plantilla = new controladorPlantilla(); // Clase que esta dentro plantilla.controlador.php
$plantilla -> ctrPlantilla();
/*
$pdf = new TCPDF('p','mm','A4');

//add page
$pdf ->AddPage();

//output
$pdf->Output();
*/

