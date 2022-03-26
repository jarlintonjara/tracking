<?php

class ControladorUsuarios {


	/*=============================================
					LOGIN DEL USUARIO
	=============================================*/


static public function ctrIngresoUsuario()
{ 
    if(isset($_POST["ingUsuario"]))
    {
            $encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

            $tabla = "usuario";
            $item= "usuario";
            $valor= $_POST["ingUsuario"];				

            $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor );

            if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptar  ){

                if($respuesta["estado"] == 1  )  {
                    $_SESSION["iniciarSesion"] = "ok";
                    $_SESSION["id"] = $respuesta["id"];
                    $_SESSION["nombre"] = $respuesta["nombre"];
                    $_SESSION["usuario"] = $respuesta["usuario"];
                    $_SESSION["perfil"] = $respuesta["perfil"];
                    $_SESSION["foto"] = $respuesta["foto"];

                    date_default_timezone_set('America/Bogota');
                    $fecha = date('Y-m-d');
                    $hora = date('H:i:s');
                    $fechaActual = $fecha.' '.$hora;

                    $tabla = 'usuario';
                    $item1 = 'ultimo_login';
                    $valor1 = $fechaActual ;
                    $item2 = 'id';
                    $valor2= $respuesta["id"] ;
                    $respuestaUltimoLogin = ModeloUsuarios::mdlActualizarUsuario($tabla,$item1, $valor1, $item2, $valor2 );

                    if($respuestaUltimoLogin == "ok")
                    {
                        echo '<script>  window.location = "busqueda"</script>';
                    }

                } 
                else 
                    echo '<br><div class="alert alert-danger">El usuario no se encuentra activado.</div>';

            }else {

                echo '<br><div class="alert alert-danger">Error al ingresar vuelve a intentarlo.</div>';
            }				
    }

}

	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/
 	static public function ctrCrearUsuario(){

 		if(isset($_POST["nuevoUsuario"])){
 			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
			   preg_match('/^[a-zA-Z0-9@.]+$/', $_POST["nuevoUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9@.]+$/', $_POST["nuevoPassword"])){


 			//Inicializamos la ruta de la foto por si no hay foto.
			$ruta ="";


 				$tabla = "usuario";

 				$encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');


 				$datos = array ("nombre" => $_POST["nuevoNombre"],
 								"usuario" => $_POST["nuevoUsuario"],
 							"password" => $encriptar ,
 						"perfil" => $_POST["nuevoPerfil"]);
						 
				$nombreValido = ModeloUsuarios::mdlValidadUsuario($tabla, $_POST["nuevoUsuario"]);
				$respuesta = "";
				if($nombreValido)
				 	$respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);

 				if($respuesta == "ok" AND $nombreValido ){

 				echo '<script>

					swal({
						type: "success",
						title: "¡El usuario ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

				</script>';

 				}else 		
 				echo '<script>

					swal({
						type: "error",
						title: "¡El usuario no se ha logrado ingresar!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					});
				

				</script>';

 				

 			}else {
 
 				echo '<script>

					swal({
						type: "error",
						title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

				</script>';


 			}
 
 


 		}

	}


	static public function ctrMostrarUsuario( $item , $valor ){
				$tabla = "usuario";
				$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item , $valor );
				return $respuesta;
			}//



	/*=============================================
	RANKING DE VENDEDORES REPORTE
	=============================================*/

	static public function ctrRankingVendedoresReportes(){

		$respuesta = ModeloUsuarios::MdlRankingVendedoresReportes();

		$array = array();
	
    	foreach ($respuesta as $key => $value) {
      
      		$objeto = array();

      		$nombreVendedor = $value["nombre_vendedor"] ;
      
      		$cantidad_ventas = $value["total_ventas"] ;
      	
      		$cantidad_productos = $value["total_productos"] ;
 
      		$objeto = array('y'=> $nombreVendedor , 'a'=> $cantidad_ventas , 'b' => $cantidad_productos );

			array_push( $array , $objeto ) ;

    	};

		$datos = json_encode($array);

		return $datos;
	}


	/*=============================================
	EDITAR DE USUARIO
	=============================================*/
 	static public function ctrEditarUsuario(){

 		if(isset($_POST["editarUsuario"])){
 			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])    ){


 			//Inicializamos la ruta de la foto por si no hay foto.


 				$tabla = "usuario";
 				$encriptar = "";

 				if($_POST["editarPassword"] != "" ){

 					if( preg_match('/^[a-zA-Z0-9@.]+$/', $_POST["editarPassword"]))
 					{
 					
 						$encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

 					} else 
 					{

 						echo '<script>

					swal({
						type: "error",
						title: "¡La contraseña lleva caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

				</script>';
 					}



 				}else 
 				$encriptar =  $_POST["passwordActual"]     ; 


 				$datos = array ("nombre" => $_POST["editarNombre"],
 								"usuario" => $_POST["editarUsuario"],
 							"password" => $encriptar ,
 						"perfil" => $_POST["editarPerfil"]);

 				$respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);

 				if($respuesta == "ok" ){

 				echo '<script>

					swal({
						type: "success",
						title: "¡El usuario ha sido editado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

				</script>';

 				}



				}else {

	echo '<script>

					swal({
						type: "error",
						title: "¡El nombre del usuario lleva caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

				</script>';

				}




 			}


 		 
 		}
 
 
	/*=============================================
					BORRAR DE USUARIO
	=============================================*/


 	static public function ctrBorrarUsuario(){
 			
 			if(isset($_GET['idUsuario'])){

 				$tabla = "usuario";
 				$item = "id";
 				$valor = $_GET["idUsuario"];


				if($_GET["fotoUsuario"] != "" ){
					unlink($_GET["fotoUsuario"]);
					rmdir('vistas/img/usuarios/'.$_GET["usuario"]);
				} 
			//	echo '<script>console.log('.$valor.') </script>';



 				$respuesta = ModeloUsuarios::mdlEliminarUsuario($tabla, $item , $valor);

 				if($respuesta = "ok"){

 				echo '<script>

					swal({
						type: "success",
						title: "¡El usuario ha sido borrado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

				</script>';


 				}

 			}

 		 
 		}
	/*=============================================
					LISTAR USUARIOS
	=============================================*/	
	static public function ctrListarUsuario( ){

		return ModeloUsuarios::mdlListarUsuario( );

	}



}
 








