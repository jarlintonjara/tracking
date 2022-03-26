<?php

require_once "../controladores/tracking_automotriz.controlador.php";
require_once "../modelos/tracking_automotriz.modelo.php";


class AjaxTrackingAutomotriz{
    /*=============================================
					FORM AUTOMOTRIZ
	=============================================*/
    public function ajaxGuardarFormularioAutomotriz()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrGuardarFormAutomotriz();
        echo json_encode($respuesta);
        exit;
    }

    public function ajaxGuardarObs()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrGuardarObs();
        echo json_encode($respuesta);
        exit;
    }

    public function listarPlaca()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrListarPlaca( $this );
        echo json_encode($respuesta);exit;
    }
    public function listarvintracking()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrlistarvintracking( $this );
        echo json_encode($respuesta);exit;
    }
    public function listardocumentotracking()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrlistardocumentotracking( $this );
        echo json_encode($respuesta);exit;
    }

    /*
    ===========================================================================================================
    ========================== BUSQUEDA POR LOS DESPLEGABLES CONTROLADORES ASOCIADOS ========================== 
    ===========================================================================================================
    */
    public function buscarbydocumentotracking()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrbuscarbydocumentotracking( $this );
        echo json_encode($respuesta);exit;
    }
    public function buscarbyplacatracking()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrbuscarbyplacatracking( $this );
        echo json_encode($respuesta);exit;
    }
    public function buscarbyvintracking()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrbuscarbyvintracking( $this );
        echo json_encode($respuesta);exit;
    }
     
}

/*
==================================================================================================
========================== INICIALIZACIÓN DEL FORMULARIO (DESPLEGABLES) ========================== 
==================================================================================================
*/

if ( isset($_POST["listarPlaca"]) AND ($_POST["listarPlaca"] == "yes") ) 
{
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> listarPlaca();
}
if ( isset($_POST["listarvintracking"]) AND ($_POST["listarvintracking"] == "yes") ) 
{
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> listarvintracking();
}
if ( isset($_POST["listardocumentotracking"]) AND ($_POST["listardocumentotracking"] == "yes") ) 
{
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> listardocumentotracking();
}



/*
===================================================================================
========================== BUSQUEDA POR LOS DESPLEGABLES ========================== 
===================================================================================
*/

if ( isset($_POST["documentotrackingautomotriz"]) AND ($_POST["documentotrackingautomotriz"] == "yes") ) 
{
    //CUANDO LA BUSQUEDA ES POR EL NÚMERO DE DOCUMENTO, PASARÁ POR AQUÍ
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> NroDocumento = $_POST["documentotracking"]; 
	$buscar -> buscarbydocumentotracking();
}
if ( isset($_POST["placaautomotriz"]) AND ($_POST["placaautomotriz"] == "yes") ) 
{
    //CUANDO LA BUSQUEDA ES POR EL NÚMERO DE PLACA, PASARÁ POR AQUÍ
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> placa = $_POST["placa"]; 
	$buscar -> buscarbyplacatracking();
}
if ( isset($_POST["vintrackingautomotriz"]) AND ($_POST["vintrackingautomotriz"] == "yes") ) 
{
    //CUANDO LA BUSQUEDA ES POR EL NÚMERO DE VIN, PASARÁ POR AQUÍ
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> vintracking = $_POST["vintracking"]; 
	$buscar -> buscarbyvintracking();
}

    /*=============================================
            GUARDAR FORMULARIO AUTOMOTRIZ
    =============================================*/
    if (isset($_POST["DATA_AUTOMOTRIZ"])) {
        $usuario = new AjaxTrackingAutomotriz();
        $usuario->ajaxGuardarFormularioAutomotriz($_POST["DATA_AUTOMOTRIZ"]);
    };

    if (isset($_POST["documentotracking"])) {
        var_dump($_POST["documentotracking"]);
        $usuario = new AjaxTrackingAutomotriz();
        $usuario->ajaxGuardarObs($_POST);
    };