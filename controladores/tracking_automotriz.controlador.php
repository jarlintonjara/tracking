<?php

/*=============================================
            TRACKING AUTOMOTRIZ
=============================================*/
class ControladorTrackingAutomotriz{

	static public function ctrBuscarTrackingAutomotriz(  ){

        // $respuesta = ModeloTrackingAutomotriz::mdlBuscarTrackingAutomotriz(  );
        // return $respuesta;
    }
    
    static public function ctrListarPlaca(  ){
        $respuesta = ModeloTrackingAutomotriz::mdlListarPlaca(  );
        return $respuesta;
    } 
    static public function ctrlistarvintracking(  ){
        $respuesta = ModeloTrackingAutomotriz::mdllistarvintracking(  );
        return $respuesta;
    } 
    static public function ctrlistardocumentotracking(  ){
        $respuesta = ModeloTrackingAutomotriz::mdllistardocumentotracking(  );
        return $respuesta;
    } 
	static public function ctrbuscarbydocumentotracking( $datos ){

        $respuesta = ModeloTrackingAutomotriz::mdlbuscarbydocumentotracking( $datos );
        return $respuesta;
    }
	static public function ctrbuscarbyplacatracking( $datos ){

        $respuesta = ModeloTrackingAutomotriz::mdlbuscarbyplacatracking( $datos );
        return $respuesta;
    }
    static public function ctrbuscarbyvintracking( $datos ){

        $respuesta = ModeloTrackingAutomotriz::mdlbuscarbyvintracking( $datos );
        return $respuesta;
    }


	static public function ctrListarNombreCliente(  ){

        $respuesta = ModeloTrackingAutomotriz::mdlListarNombreCliente(  );
        return $respuesta;
    }    
	static public function ctrListarNroDocumento(  ){

        $respuesta = ModeloTrackingAutomotriz::mdlListarNroDocumento(  );
        return $respuesta;
    }
	static public function ctrListarVin(  ){

        $respuesta = ModeloTrackingAutomotriz::mdlListarVin(  );
        return $respuesta;
    }
	static public function ctrListarPlacas(  ){

        $respuesta = ModeloTrackingAutomotriz::mdlListarPlacas(  );
        return $respuesta;
    }
	static public function ctrBuscarTrackingAutomotrizByNombre( $datos ){

        $respuesta = ModeloTrackingAutomotriz::mdlBuscarTrackingAutomotrizByNombre( $datos );
        return $respuesta;
    }  
    
	static public function ctrBuscarTrackingAutomotrizByNroDocumento( $datos ){

        $respuesta = ModeloTrackingAutomotriz::mdlBuscarTrackingAutomotrizByNroDocumento( $datos );
        return $respuesta;
    }
	static public function ctrBuscarTrackingAutomotrizByVin( $datos ){

        $respuesta = ModeloTrackingAutomotriz::mdlBuscarTrackingAutomotrizByVin( $datos );
        return $respuesta;
    }
	static public function ctrBuscarTrackingAutomotrizByPlaca( $datos ){

        $respuesta = ModeloTrackingAutomotriz::mdlBuscarTrackingAutomotrizByPlaca( $datos );
        return $respuesta;
    }

    static public function ctrGuardarFormAutomotriz()
    {
        $tabla = "perfil_automotriz";
        $datos = $_POST["DATA_AUTOMOTRIZ"];
        date_default_timezone_set('America/Bogota');
        $fecha = date('Y-m-d');
        $hora = date('H:i:s');
        $fechaActual = $fecha . ' ' . $hora;
        $datos["FECHA"] = $fechaActual;
        return ModeloTrackingAutomotriz::mdlIngresarFormAutomotriz($tabla, $datos);
    }

    static public function ctrGuardarObs(){
        if(!empty($_POST)){
            $obs  = $_POST["obs"];
            $numero_documento  = $_POST["documentotracking"];
            $respuesta = ModeloTrackingAutomotriz::mdlSaveObsPostventaAutomotriz($obs,$numero_documento);
            return $respuesta;
        }
    }
}