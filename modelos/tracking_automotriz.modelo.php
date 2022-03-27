<?php

require_once "conexion.php";
/**
  * 
  */
 class ModeloTrackingAutomotriz 
 {
   
   static public function mdlbuscarbydocumentotracking( $datos )
   {
      $stmt = Conexion::conectar()->prepare("SELECT  * FROM postventa_automotriz where numero_documento = ? LIMIT 1");
      $stmt->execute([$datos->NroDocumento]);
      return $stmt->fetch();
   }
   static public function mdlbuscarbyplacatracking( $datos )
   {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM postventa_automotriz where placa = ? LIMIT 1");
      $stmt->execute([$datos->placa]);
      return $stmt->fetch();

   }
   static public function mdlbuscarbyvintracking( $datos )
   {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM postventa_automotriz where vin = ? LIMIT 1");
      $stmt->execute([$datos->vintracking]);
      return $stmt->fetch();
   }
   

   /*=============================================
            TRACKING AUTOMOTRIZ
   =============================================*/
 	static public function mdlListarPlaca(){

        $stmt = Conexion::conectar()->prepare("SELECT DISTINCT placa FROM postventa_automotriz ORDER BY placa desc");
        $stmt -> execute();
        $return = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        $stmt= null;
        return $return;
 	}
   static public function mdllistarvintracking(){

      $stmt = Conexion::conectar()->prepare("SELECT DISTINCT vin FROM postventa_automotriz ORDER BY vin desc");
      $stmt -> execute();
      $return = $stmt -> fetchAll(PDO::FETCH_ASSOC);
      $stmt= null;
      return $return;
  }
  static public function mdllistardocumentotracking(){

   $stmt = Conexion::conectar()->prepare("SELECT DISTINCT numero_documento FROM postventa_automotriz ORDER BY numero_documento desc");
   $stmt -> execute();
   $return = $stmt -> fetchAll(PDO::FETCH_ASSOC);
   $stmt= null;
   return $return;
}

 	static public function mdlListarNroDocumento(){

        $stmt = Conexion::conectar()->prepare("SELECT DISTINCT numero_documento FROM [tracking].[tracking_automotriz_reporte] ORDER BY numero_documento desc  ");
        $stmt -> execute();
        $return = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        $stmt= null;
        return $return;
 	}

   static public function mdlListarVin()
   {
      $stmt = Conexion::conectar()->prepare("SELECT DISTINCT vin FROM [tracking].[tracking_automotriz_reporte] ORDER BY vin desc  ");
      $stmt -> execute();
      $return = $stmt -> fetchAll(PDO::FETCH_ASSOC);
      $stmt= null;
      return $return;
   }

   static public function mdlListarPlacas()
   {
      $stmt = Conexion::conectar()->prepare("SELECT DISTINCT placa FROM [tracking].[tracking_automotriz_reporte] WHERE placa is not null ORDER BY placa ASC  ");
      $stmt -> execute();
      $return = $stmt -> fetchAll(PDO::FETCH_ASSOC);
      $stmt= null;
      return $return;
   }
   
   static public function mdlBuscarTrackingAutomotrizByNombre( $datos )
   {
/*
      $myfile = fopen("newfile2.txt", "w")  ;
      fwrite($myfile,  $datos->usuario_id);
      fwrite($myfile,  $datos->usuario_nombre);
      fclose($myfile);
*/

      $stmt = Conexion::conectar()->prepare("INSERT INTO [tracking].[plataforma_auditoria] ( usuario_id,usuario_nombre,tipo_busqueda,valor_buscado) VALUES ( :usuario_id, :usuario_nombre, :tipo_busqueda, :valor_buscado   )");
      //   $stmt = Conexion::conectar()->prepare("INSERT INTO [tracking].[plataforma_auditoria] ( usuario_id,usuario_nombre,tipo_busqueda) VALUES ( :usuario_id, :usuario_nombre, :tipo_busqueda   )");
      $stmt -> bindParam(":usuario_id" ,  $datos->usuario_id, PDO::PARAM_STR);
      $stmt -> bindParam(":usuario_nombre" ,  $datos->usuario_nombre, PDO::PARAM_STR);
      $stmt -> bindValue(":tipo_busqueda" , 'busqueda_nombre', PDO::PARAM_STR);
      $stmt -> bindParam(":valor_buscado" ,  $datos->NombreCliente, PDO::PARAM_STR);
      $stmt -> execute();
      $stmt= null;




      $stmt = Conexion::conectar()->prepare("SELECT 
         *, 
         COALESCE([tracking].[tracking_automotriz_reporte].[NOMBRE DEL ASESOR], '-') AS nombre_asesor , 
         COALESCE([tracking].[tracking_automotriz_reporte].[local], '-') AS nombre_local
      FROM 
         [tracking].[tracking_automotriz_reporte] 
      WHERE 
         nombre_completo = :nombre_completo 
      ORDER BY 
         nombre_completo DESC;  ");
      $stmt -> bindParam( ":nombre_completo", $datos->NombreCliente, PDO::PARAM_STR );
      $stmt -> execute();
      $return = $stmt -> fetchAll(PDO::FETCH_ASSOC);       
      $stmt= null;
      return $return[0];



   }

   static public function mdlBuscarTrackingAutomotrizByNroDocumento( $datos )
   {



      $stmt = Conexion::conectar()->prepare("INSERT INTO [tracking].[plataforma_auditoria] ( usuario_id,usuario_nombre,tipo_busqueda,valor_buscado) VALUES ( :usuario_id, :usuario_nombre, :tipo_busqueda, :valor_buscado   )");
    //   $stmt = Conexion::conectar()->prepare("INSERT INTO [tracking].[plataforma_auditoria] ( usuario_id,usuario_nombre,tipo_busqueda) VALUES ( :usuario_id, :usuario_nombre, :tipo_busqueda   )");
      $stmt -> bindParam(":usuario_id" ,  $datos->usuario_id, PDO::PARAM_STR);
      $stmt -> bindParam(":usuario_nombre" ,  $datos->usuario_nombre, PDO::PARAM_STR);
      $stmt -> bindValue(":tipo_busqueda" , 'busqueda_numero_documento', PDO::PARAM_STR);
      $stmt -> bindParam(":valor_buscado" ,  $datos->NroDocumento, PDO::PARAM_STR);
      $stmt -> execute();
      $stmt= null;

 
      $stmt = Conexion::conectar()->prepare("SELECT * , 
         COALESCE([tracking].[tracking_automotriz_reporte].[NOMBRE DEL ASESOR], '-') AS nombre_asesor , 
         COALESCE([tracking].[tracking_automotriz_reporte].[local], '-') AS nombre_local
      FROM 
         [tracking].[tracking_automotriz_reporte] 
      WHERE 
         numero_documento = :numero_documento 
      ORDER BY 
         numero_documento DESC  ");
      $stmt -> bindParam( ":numero_documento", $datos->NroDocumento, PDO::PARAM_STR );
      $stmt -> execute();
      $return = $stmt -> fetchAll(PDO::FETCH_ASSOC);       
      $stmt= null;
      return $return[0];
   }
   
   static public function mdlBuscarTrackingAutomotrizByVin( $datos )
   {


      $stmt = Conexion::conectar()->prepare("INSERT INTO [tracking].[plataforma_auditoria] ( usuario_id,usuario_nombre,tipo_busqueda,valor_buscado) VALUES ( :usuario_id, :usuario_nombre, :tipo_busqueda, :valor_buscado   )");
       // $stmt = Conexion::conectar()->prepare("INSERT INTO [tracking].[plataforma_auditoria] ( usuario_id,usuario_nombre,tipo_busqueda) VALUES ( :usuario_id, :usuario_nombre, :tipo_busqueda   )");


      $stmt -> bindParam(":usuario_id" ,  $datos->usuario_id, PDO::PARAM_STR);
      $stmt -> bindParam(":usuario_nombre" ,  $datos->usuario_nombre, PDO::PARAM_STR);
      $stmt -> bindValue(":tipo_busqueda" , 'busqueda_vin', PDO::PARAM_STR);
      $stmt -> bindParam(":valor_buscado" ,  $datos->Vin, PDO::PARAM_STR);
      $stmt -> execute();
      $stmt= null;




      $stmt = Conexion::conectar()->prepare("SELECT *, 
         COALESCE([tracking].[tracking_automotriz_reporte].[NOMBRE DEL ASESOR], '-') AS nombre_asesor , 
         COALESCE([tracking].[tracking_automotriz_reporte].[local], '-') AS nombre_local
      FROM 
         [tracking].[tracking_automotriz_reporte] 
      WHERE 
         vin = :vin 
      ORDER BY 
         vin DESC; ");
      $stmt -> bindParam( ":vin", $datos->Vin, PDO::PARAM_STR );
      $stmt -> execute();
      $return = $stmt -> fetchAll(PDO::FETCH_ASSOC);       
      $stmt= null;
      return $return[0];
   }
   
   static public function mdlBuscarTrackingAutomotrizByPlaca( $datos )
   {

      $stmt = Conexion::conectar()->prepare("INSERT INTO [tracking].[plataforma_auditoria] ( usuario_id,usuario_nombre,tipo_busqueda,valor_buscado) VALUES ( :usuario_id, :usuario_nombre, :tipo_busqueda, :valor_buscado   )");
     // $stmt = Conexion::conectar()->prepare("INSERT INTO [tracking].[plataforma_auditoria] ( usuario_id,usuario_nombre,tipo_busqueda) VALUES ( :usuario_id, :usuario_nombre, :tipo_busqueda   )");
      $stmt -> bindParam(":usuario_id" ,  $datos->usuario_id, PDO::PARAM_STR);
      $stmt -> bindParam(":usuario_nombre" ,  $datos->usuario_nombre, PDO::PARAM_STR);
      $stmt -> bindValue(":tipo_busqueda" , 'busqueda_placa', PDO::PARAM_STR);
      $stmt -> bindParam(":valor_buscado" ,  $datos->Placa, PDO::PARAM_STR);
      $stmt -> execute();
      $stmt= null;



      $stmt = Conexion::conectar()->prepare("SELECT *, 
         COALESCE([tracking].[tracking_automotriz_reporte].[NOMBRE DEL ASESOR], '-') AS nombre_asesor , 
         COALESCE([tracking].[tracking_automotriz_reporte].[local], '-') AS nombre_local
      FROM 
         [tracking].[tracking_automotriz_reporte] 
      WHERE  
         placa = :placa 
      ORDER BY 
         placa DESC  ");
      $stmt -> bindParam( ":placa", $datos->Placa, PDO::PARAM_STR );
      $stmt -> execute();
      $return = $stmt -> fetchAll(PDO::FETCH_ASSOC);       
      $stmt= null;
      return $return[0];
   }

    static public function mdlIngresarFormAutomotriz($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (DNI,PERFIL, MOTIVO, ASIENTOS, PRIMER_CARRO, SIGNIFICADO, PRECIO) VALUES (:DNI, :PERFIL, :MOTIVO, :ASIENTOS, :PRIMER_CARRO, :SIGNIFICADO, :PRECIO)");

        $stmt->bindParam(":DNI", $datos["DNI"], PDO::PARAM_STR);
        $stmt->bindParam(":PERFIL", $datos["PERFIL"], PDO::PARAM_STR);
        $stmt->bindParam(":MOTIVO", $datos["MOTIVO"], PDO::PARAM_STR);
        $stmt->bindParam(":ASIENTOS", $datos["ASIENTOS"], PDO::PARAM_STR);
        $stmt->bindParam(":PRIMER_CARRO", $datos["PRIMER_CARRO"], PDO::PARAM_STR);
        $stmt->bindParam(":SIGNIFICADO", $datos["SIGNIFICADO"], PDO::PARAM_STR);
        $stmt->bindParam(":PRECIO", $datos["PRECIO"], PDO::PARAM_STR);

        if ($stmt->execute())
            return "ok";
        else
            return "error";

        $stmt->close();
        $stmt = null;
    }

    static public function mdlSaveObsPostventaAutomotriz($obs,$numero_documento)
    {
      $stmt = Conexion::conectar()->prepare("UPDATE postventa_automotriz SET observaciones = :obs WHERE numero_documento = :numero_documento");

        $stmt->bindParam(":obs", $obs, PDO::PARAM_STR);
        $stmt->bindParam(":numero_documento", $numero_documento, PDO::PARAM_STR);
        if ($stmt->execute())
            return '1';
        else
            return '0';

        $stmt->close();
        $stmt = null;
    }

} 