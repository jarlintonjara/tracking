<?php

require_once "../controladores/tracking_automotriz.controlador.php";
require_once "../modelos/tracking_automotriz.modelo.php";


class AjaxTrackingAutomotriz{
	/*=====================================
	=            EDITAR USUARIO            =
	=======================================*/

	public $NombreCliente;
	public $NroDocumento;
	public $Vin;
	public $Placa;

    public $usuario_id;
    public $usuario_nombre;


    public function BuscarTrackingAutomotriz()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrBuscarTrackingAutomotriz( $this );
        echo json_encode($respuesta);exit;
    }

    public function listarNombreCliente()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrListarNombreCliente( $this );
        echo json_encode($respuesta);exit;
    }

    public function listarNroDocumento()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrListarNroDocumento( $this );
        echo json_encode($respuesta);exit;
    }

    public function listarVin()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrListarVin( $this );
        echo json_encode($respuesta);exit;
    }

    public function listarPlacas()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrListarPlacas( $this );
        echo json_encode($respuesta);exit;
    }



/*
===========================================================================================================
========================== BUSQUEDA POR LOS DESPLEGABLES CONTROLADORES ASOCIADOS ========================== 
===========================================================================================================
*/

    public function buscarTrackingAutomotrizByNombre()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrBuscarTrackingAutomotrizByNombre( $this );
        echo json_encode($respuesta);exit;
    }

    public function buscarTrackingAutomotrizByNroDocumento()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrBuscarTrackingAutomotrizByNroDocumento( $this );
        echo json_encode($respuesta);exit;
    }

    public function buscarTrackingAutomotrizByVin()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrBuscarTrackingAutomotrizByVin( $this );
        echo json_encode($respuesta);exit;
    }

    public function buscarTrackingAutomotrizByPlaca()
    {
        $respuesta = ControladorTrackingAutomotriz::ctrBuscarTrackingAutomotrizByPlaca( $this );
        echo json_encode($respuesta);exit;
    }
}


	/*======================================
	=            VERIFICAR SI SE UTILIZA PORQUE CREO QUE NO          =
	========================================*/
/*
if ( isset($_POST["BuscarTrackingAutomotriz"]) AND ($_POST["BuscarTrackingAutomotriz"] == "yes") ) 
{
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> NombreCliente = $_POST["BuscarNombreCliente"];
	$buscar -> NroDocumento = $_POST["BuscarNroDocumento"];
	$buscar -> Vin = $_POST["BuscarVin"];
	$buscar -> BuscarTrackingAutomotriz();
}
*/

/*
==================================================================================================
========================== INICIALIZACIÓN DEL FORMULARIO (DESPLEGABLES) ========================== 
==================================================================================================
*/


if ( isset($_POST["listarNombreCliente"]) AND ($_POST["listarNombreCliente"] == "yes") ) 
{
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> listarNombreCliente();
}

if ( isset($_POST["listarNroDocumento"]) AND ($_POST["listarNroDocumento"] == "yes") ) 
{
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> listarNroDocumento();
}

if ( isset($_POST["listarVin"]) AND ($_POST["listarVin"] == "yes") ) 
{
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> listarVin();
}

if ( isset($_POST["listarPlacas"]) AND ($_POST["listarPlacas"] == "yes") ) 
{
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> listarPlacas();
}


/*
===================================================================================
========================== BUSQUEDA POR LOS DESPLEGABLES ========================== 
===================================================================================
*/

if ( isset($_POST["BuscarNombreClienteTrackingAutomotriz"]) AND ($_POST["BuscarNombreClienteTrackingAutomotriz"] == "yes") ) 
{
    //CUANDO LA BUSQUEDA ES POR EL NOMBRE DEL CLIENTE PASA POR AQUI
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> NombreCliente = $_POST["BuscarNombreCliente"];
    $buscar -> usuario_id = $_POST["usuario_id"];
    $buscar -> usuario_nombre = $_POST["usuario_nombre"];
	$buscar -> buscarTrackingAutomotrizByNombre();
}

if ( isset($_POST["BuscarNroDocumentoTrackingAutomotriz"]) AND ($_POST["BuscarNroDocumentoTrackingAutomotriz"] == "yes") ) 
{
    //CUANDO LA BUSQUEDA ES POR EL NÚMERO DE DOCUMENTO, PASARÁ POR AQUÍ
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> NroDocumento = $_POST["BuscarNroDocumento"];
    $buscar -> usuario_id = $_POST["usuario_id"];
    $buscar -> usuario_nombre = $_POST["usuario_nombre"];    
	$buscar -> buscarTrackingAutomotrizByNroDocumento();
}

if ( isset($_POST["BuscarVinTrackingAutomotriz"]) AND ($_POST["BuscarVinTrackingAutomotriz"] == "yes") ) 
{
    //CUANDO LA BUSQUEDA ES POR EL VIN, PASARÁ POR AQUÍ
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> Vin = $_POST["BuscarVin"];
    $buscar -> usuario_id = $_POST["usuario_id"];
    $buscar -> usuario_nombre = $_POST["usuario_nombre"];    
	$buscar -> buscarTrackingAutomotrizByVin();
}
if ( isset($_POST["BuscarPlacaTrackingAutomotriz"]) AND ($_POST["BuscarPlacaTrackingAutomotriz"] == "yes") ) 
{
    //CUANDO LA BUSQUEDA ES POR LA PLACA, PASARÁ POR AQUÍ
	$buscar = new AjaxTrackingAutomotriz();
	$buscar -> Placa = $_POST["BuscarPlaca"];
    $buscar -> usuario_id = $_POST["usuario_id"];
    $buscar -> usuario_nombre = $_POST["usuario_nombre"];    
	$buscar -> buscarTrackingAutomotrizByPlaca();
}