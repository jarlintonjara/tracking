<?php
require_once "conexion.php";

/**
  * 
  */
 class ModeloUsuarios {

/*=============================================
	MOSTRAR USUARIOS -> Usado en el login.
=============================================*/
 	static public function mdlMostrarUsuarios($tabla, $item, $valor ){
		if ($item != null){
		 		$stmt = Conexion::conectar()->prepare("SELECT $tabla.* FROM $tabla  WHERE $tabla.$item = :$item ;");
		 		$stmt -> bindParam(":".$item , $valor, PDO::PARAM_STR);
		 		$stmt -> execute();
		 		return $stmt ->fetch();
		 		$stmt-> close();
		 		$stmt= null;


		} else {
                  if ($_SESSION["perfil"] == 'Administrador') {
                  	$stmt = Conexion::conectar()->prepare("SELECT $tabla.* FROM $tabla  ");
                  }else{
                  	$usuario = $_SESSION["usuario"];

		 		$stmt = Conexion::conectar()->prepare("SELECT $tabla.* FROM $tabla where usuario = :usuario ");
		 		 
				$stmt -> bindParam(":usuario" , $usuario, PDO::PARAM_STR);
                  }


		 		$stmt -> execute();
		 		return $stmt ->fetchAll();

		 		$stmt-> close();
		 		$stmt= null;



		}
	 }

	/*=============================================
					LISTAR USUARIOS
	=============================================*/
	static public function mdlListarUsuario(){

		$stmt = Conexion::conectar()->prepare(" SELECT
				* 
			FROM
				usuario
			WHERE
				estado = '1' ");

		$stmt -> execute();

		return $stmt ->fetchAll( PDO::FETCH_ASSOC );

	}


/*=============================================
	RANKING DE VENDEDORES REPORTE
=============================================*/
 	static public function MdlRankingVendedoresReportes(){

	 		$stmt = Conexion::conectar()->prepare("SELECT id_vendedor, usuario.nombre AS nombre_vendedor, sum(total) AS total_ventas ,  SUM(total_productos) AS total_productos FROM ventas INNER JOIN usuario ON usuario.id = id_vendedor GROUP BY id_vendedor, usuario.nombre ORDER BY 2 DESC LIMIT 10");
	 		 
	 		$stmt -> execute();

	 		return $stmt ->fetchAll();

	 		$stmt-> close();
	 		
	 		$stmt= null;
 	}


/*=============================================
		VALIDAR NOMBRE USUARIO
=============================================*/
	static public function mdlValidadUsuario($tabla, $nombre_usuario){

			$stmt = Conexion::conectar()->prepare("SELECT 
			(CASE WHEN COUNT(usuario.nombre)=0 THEN
				1
			ELSE
				0
				END) nombreValido
			FROM
				usuario 
			WHERE
				usuario.nombre = :nombre_usuario");

			
			$stmt -> bindParam(":nombre_usuario" , $nombre_usuario, PDO::PARAM_STR);
			
			$stmt -> execute();

			$fetch =  $stmt ->fetchAll(PDO::FETCH_ASSOC);
			
			return $fetch[0]["nombreValido"];

			$stmt-> close();
			
			$stmt= null;
	}


/*=============================================
			REGISTRO DE USUARIOS
=============================================*/
 	static public function mdlIngresarUsuario($tabla, $datos){

 		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,usuario,password,perfil) VALUES (:nombre , :usuario, :password , :perfil )");

 		$stmt -> bindParam(":nombre" , $datos["nombre"], PDO::PARAM_STR);
 		$stmt -> bindParam(":usuario" , $datos["usuario"], PDO::PARAM_STR);
 		$stmt -> bindParam(":password" , $datos["password"], PDO::PARAM_STR);
 		$stmt -> bindParam(":perfil" , $datos["perfil"], PDO::PARAM_STR);

 		if( $stmt -> execute()) 
 			return "ok";
 		else 
 			return "error";

 		$stmt-> close();
 		$stmt= null;
 	}



/*=============================================
			EDITAR USUARIOS
=============================================*/
 	static public function mdlEditarUsuario($tabla, $datos){

 		$stmt = Conexion::conectar()->prepare("UPDATE  $tabla SET nombre = :nombre , password = :password ,perfil = :perfil WHERE usuario = :usuario");

 		$stmt -> bindParam(":nombre" , $datos["nombre"], PDO::PARAM_STR);
 		$stmt -> bindParam(":usuario" , $datos["usuario"], PDO::PARAM_STR);
 		$stmt -> bindParam(":password" , $datos["password"], PDO::PARAM_STR);
 		$stmt -> bindParam(":perfil" , $datos["perfil"], PDO::PARAM_STR);

 		if( $stmt -> execute()) 
 			return "ok";
 		else 
 			return "error";

 		$stmt-> close();
 		$stmt= null;
 	}


 	 	static public function mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2){

 		$stmt = Conexion::conectar()->prepare("UPDATE  $tabla SET $item1 = GETDATE() WHERE  $item2 = :$item2");

 //		$stmt -> bindParam(":".$item1 , $valor1 , PDO::PARAM_STR);
 		$stmt -> bindParam(":".$item2 , $valor2 , PDO::PARAM_STR);

 		if( $stmt -> execute()) 
 			return "ok";
 		else 
 			return "error";

 		$stmt-> close();
 		$stmt= null;
 	}

/*=============================================
			ELIMINACION DE USUARIOS
=============================================*/
 	static public function mdlEliminarUsuario($tabla, $item, $valor){

 		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla  WHERE $item = :$valor");


 		$stmt -> bindParam(":".$valor , $valor, PDO::PARAM_STR);
 		
 		if( $stmt -> execute()) 
 			return "ok";
 		else 
 			return "error";

 		$stmt-> close();
 		$stmt= null;
 	}



 } 