<style type="text/css" media="print">
    @media print {
        @page {
        /* size: landscape; */
        size: auto;
        size: A3;
        margin: 0mm;
        }
        body {
            margin: 0cm;
            background-image: auto;       
        }
        #imprimir{
            display: none;
        }
    }
</style>
<?php
$registro = new ControladorTrackingAutomotriz();
$datos = $registro->ctrMostrarmdlMostrarPostventaAutomotriz();
?>
<form method="POST" id="formpostventa">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="img-fluid" style=" height: auto;">
            <img src="../tracking/vistas/img/plantilla/banner-derco.jpg" style=" margin-left: auto; margin-right: auto; display: block;">
        </div>
    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-xs-12 col-sm-9 col-md-9"> 
                    <h1 class="display-4 float-right"><p style="font-weight: bold; font-size: inherit; margin-right: 80px; font-size: 40px;">POSTVENTA AUTOMOTRIZ</p></h1>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3"> 
                    <div class="icon fa-4x" style="text-align: center; float: right; color: 
                    <?php switch (trim($datos['perfilamiento'])){
                        case "joven adinerado":echo "#ED7D31";break;
                        case "familion":echo "#00B050";break;
                        case "emprendedor":echo "red";break;
                        case "aspiracional":echo "##0070C0";break;
                        case "nuevo adulto":echo "#FFC000";break;
                        case "padre de familia":echo "#7030A0";break;
                        case "soñador":echo "#00B0F0";break;
                        case "esforzado":echo "#00B0F0";break;
                        default:echo "#212529";}?>; ">
                        <i class="fa fa-user"></i>
                        <p style="font-size: 14px;"><?php echo  (isset($datos) && !empty($datos)) ? ucfirst($datos['perfilamiento'])  : '' ; ?></p>
                    </div>
                </div>
            </div>
        </div>   
      <!-- Default box -->
      <div class="card">
        <div class="card-header" style="background-color:  <?php switch (trim($datos['perfilamiento'])){
                        case "joven adinerado":echo "#ED7D31";break;
                        case "familion":echo "#00B050";break;
                        case "emprendedor":echo "red";break;
                        case "aspiracional":echo "##0070C0";break;
                        case "nuevo adulto":echo "#FFC000";break;
                        case "padre de familia":echo "#7030A0";break;
                        case "soñador":echo "#00B0F0";break;
                        case "esforzado":echo "#00B0F0";break;
                        default:echo "#212529";}?>; padding:2px;">
        </div>
        <div class="card-body" style="background-color: #f4f6f9;">
          
        <div class="container-flui">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12">
                    <div class="small-box" style="background-color: #e9ecef">
                        <div class="inner input-group">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label class="p-1">Número de Placa</label>
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-square-full"></i> </span>
                                </div>
                                <input type="text" class="form-control form-control-lg" id="NumeroPlaca" name="placa" placeholder="Número de Placa" value="<?php echo  (isset($datos) && !empty($datos)) ? $datos['placa']  : '' ; ?>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Número de placas">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label class="p-1">Vin</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-barcode"></i> </span>
                                  </div>
                                  <input type="text" class="form-control form-control-lg" id="VinVentaUnidad" name="vin" placeholder="Vin" value="<?php echo  (isset($datos) && !empty($datos)) ? $datos['vin']  : '' ; ?>" data-toggle="tooltip" data-placement="bottom" title=""  data-original-title="VIN del Vehiculo">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label class="p-1">Número de  Documento</label>
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-id-card"></i>  </span>
                                </div>             
                                    <input type="text" class="form-control form-control-lg" id="NroDocumento" name="documento" placeholder="Número de Documento" value="<?php echo  (isset($datos) && !empty($datos)) ? $datos['numero_documento']  : '' ; ?>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Número del documento">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <button type="button" class="btn btn-primary float-left" id="btnlimpiar" style="margin: 44px 0 20px 40px;">Limpiar</button>
                                <button type="submit" class="btn btn-danger float-right" style="margin: 44px 40px 20px 0px;">Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="small-box" style="background-color: #e9ecef">
                                <div class="inner input-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <label class="p-1">Teléfono</label>
                                        <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>            
                                            <input type="text" class="form-control form-control-lg" id="Telefono" name="Telefono" placeholder="Teléfono" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Teléfono de contacto" 
                                            value=<?php echo  (isset($datos) && !empty($datos)) ? $datos['celular']  : '' ; ?> >
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <label class="p-1">Email</label>
                                        <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i> </span>
                                        </div>
                                
                                            <input type="text" class="form-control form-control-lg" id="Email" name="Email" placeholder="Email" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Correo del Electrónico de contacto"
                                            value=<?php echo  (isset($datos) && !empty($datos)) ? $datos['email']  : '' ; ?> >
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label class="p-1">Nombre Completo</label>
                                        <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                          <input type="text" class="form-control form-control-lg" id="NombreCompleto" name="NombreCompleto" placeholder="Nombre Completo" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Nombre Completo"
                                          value="<?php echo  (isset($datos) && !empty($datos)) ? $datos['nombre_completo']  : '' ; ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                        </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="info-box">  
                        <div class="icon fa-7x" style="text-align: center;">
                            <img src="../tracking/vistas/img/plantilla/nps3.png" class="float-left" width="150" height="130">
                        </div>

                        <div class="info-box-content">
                            <div class="progress-group">
                            <h3 style="line-height: 1px;">Venta &nbsp;&nbsp;<b><?php echo  (isset($datos) && !empty($datos)) ? number_format($datos['nps_nota'], 0, '.', ',')  : 0 ; ?></b>/10 </h3>
                            </div>
                            <div class="progress" style="height: 42px;">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo  $datos['nps_nota']*10 ;?>%; background-color: <?php echo ($datos['nps_nota']>8) ? '#78d1cf' : (($datos['nps_nota']>6) ? '#ffdf7c' : '#e67a77') ?>  "></div>
                            </div>
                            
                            <h5><?php echo  (isset($datos) && !empty($datos)) ? ucfirst($datos['verbatim_nps'])  : 'Aún no hay respuestas disponibles' ; ?></h5>
                        </div>
                    </div>

                    <div class="info-box">  
                        <div class="icon fa-7x" style="text-align: center;">
                            <!-- <i class="ion ion-star"></i> -->
                            <img src="../tracking/vistas/img/plantilla/nps3.png" class="float-left" width="150" height="130">
                        </div>

                        <div class="info-box-content">
                            <div class="progress-group">
                            <h3 style="line-height: 1px;">Postventa &nbsp;&nbsp;<b><?php echo  (isset($datos) && !empty($datos)) ? number_format($datos['nps_nota'], 0, '.', ',')  : 0 ; ?></b>/10 </h3>
                            
                            </div>
                            <div class="progress" style="height: 42px;">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo  $datos['nps_nota']*10 ;?>%; background-color: <?php echo ($datos['nps_nota']>8) ? '#78d1cf' : (($datos['nps_nota']>6) ? '#ffdf7c' : '#e67a77') ?>  "></div>
                                
                            </div>
                            
                            <h5><?php echo  (isset($datos) && !empty($datos)) ? ucfirst($datos['verbatim_nps'])  : 'Aún no hay respuestas disponibles' ; ?></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card card-primary card-outline direct-chat direct-chat-primary">
                        <div class="card-header">
                            <h3 class="card-title">Motivo de visita a taller</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="height: 80%;">
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages" style="height: 80%;">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-timestamp float-left"><?php echo  (isset($datos) && !empty($datos)) ? $datos['fecha_agenda']  : '' ; ?></span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text"  style="margin-left: 2px;">
                                    <p><b>Servicio : </b><?php echo  (isset($datos) && !empty($datos)) ? ucfirst($datos['servicio_agenda'])  : '' ; ?></p>
                                    <p><b>Comentario : </b><?php echo  (isset($datos) && !empty($datos)) ? ucfirst($datos['comentario_agenda'])  : '' ; ?></p>
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-timestamp float-left"><?php echo  (isset($datos) && !empty($datos)) ? $datos['fecha_agenda2']  : '' ; ?></span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text"  style="margin-left: 2px;">
                                    <p><b>Servicio : </b><?php echo  (isset($datos) && !empty($datos)) ? ucfirst($datos['servicio_agenda2'])  : '' ; ?></p>
                                    <p><b>Comentario : </b><?php echo  (isset($datos) && !empty($datos)) ? ucfirst($datos['comentario_agenda2'])  : '' ; ?></p>
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- /.direct-chat-msg -->
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline direct-chat direct-chat-primary">
                        <div class="card-header">
                            <h3 class="card-title">Historial Dercocenter</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="height: 80%;">
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages" style="height: 80%;">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left"><?php echo  (isset($datos) && !empty($datos)) ? ucfirst($datos['centro'])  : '' ; ?></span>
                                <span class="direct-chat-timestamp float-right"><?php echo  (isset($datos) && !empty($datos)) ? $datos['fecha_cierre']  : '' ; ?></span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    <p><?php echo  (isset($datos) && !empty($datos)) ? ucfirst($datos['servicio'])  : '' ; ?></p>
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right"><?php echo  (isset($datos) && !empty($datos)) ? ucfirst($datos['centro2'])  : '' ; ?></span>
                                <span class="direct-chat-timestamp float-left"><?php echo  (isset($datos) && !empty($datos)) ? $datos['fecha_cierre2']  : '' ; ?></span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <div class="direct-chat-text">
                                <p><?php echo  (isset($datos) && !empty($datos)) ? ucfirst($datos['servicio2'])  : '' ; ?></p>
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>

                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left"><?php echo  (isset($datos) && !empty($datos)) ? ucfirst($datos['centro3'])  : '' ; ?></span>
                                <span class="direct-chat-timestamp float-right"><?php echo  (isset($datos) && !empty($datos)) ? $datos['fecha_cierre3']  : '' ; ?></span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    <p><?php echo  (isset($datos) && !empty($datos)) ? ucfirst($datos['servicio3'])  : '' ; ?></p>
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-8 col-md-8">
                    <div class="col-sm-12">
                        <div class="alert <?php switch (trim($datos['recall'])){case "aplica":echo "alert-danger";break;case "no aplica":echo "alert-secondary";break;default:echo "alert-secondary";}?> alert-dismissible">
                        
                        <h5><i class="icon fas <?php 
                        
                        switch (trim($datos['recall'])){case "aplica":echo "fa-exclamation-triangle";break;case "no aplica":echo "fa-check-double";break;default:echo "";}?> "></i> 
                        
                        <?php 
                        if((isset($datos) && !empty($datos))){
                            switch (trim($datos['recall'])){case "aplica":echo "Recall activo!";break;case "no aplica":echo "No se encuentra en campaña activa";break;default:echo "";}
                        }else{
                            echo '';
                        }
                        ?></h5>
                        
                        </div> 
                    </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="small-box" style="background-color:#e9ecef">
                                <div class="inner input-group">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label class="p-1">Marca</label>
                                        <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-car-alt"></i></span>
                                        </div>
                                            <input type="text" class="form-control form-control-lg" id="Marca" name="Marca" placeholder="Marca" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Marca del Vehículo" 
                                            value="<?php echo  (isset($datos) && !empty($datos)) ? $datos['marca']  : '' ; ?>" >
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label class="p-1">Modelo</label>
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-car"></i></span>
                                            </div>
                                                <input type="text" class="form-control form-control-lg" id="Modelo" name="Modelo" placeholder="Modelo" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Modelo del Vehículo"
                                                value="<?php echo  (isset($datos) && !empty($datos)) ? $datos['modelo']  : '' ; ?>" >
                                            </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label class="p-1">Kilometraje</label>
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-car"></i></span>
                                            </div>
                                                <input type="text" class="form-control form-control-lg" id="Modelo" name="Modelo" placeholder="Modelo" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Modelo del Vehículo"
                                                value= "<?php echo  (isset($datos) && !empty($datos)) ? number_format($datos['kilometraje'], 0, '.', ',')  : '' ; ?>" >
                                            </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label class="p-1">Retoma</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-car-alt"></i> </span>
                                            </div>

                                            <input type="text" class="form-control form-control-lg" id="RetomaVenta" name="RetomaVenta" placeholder="Retoma" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Retoma" 
                                            value= " <?php 
                                            if (isset($datos) && !empty($datos)){
                                            switch (trim($datos['retoma'])){case "aplica":echo "Ofrecer retoma y cambio de vehículo";break;case "no aplica":echo "Cliente aún no aplica a opción de retoma";break;default:echo "";}
                                            }
                                            else{
                                                echo "";
                                            }
                                            ?> ">
                                        </div>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-model-s"></i>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <!-- PRODUCT LIST -->
                        <div class="card col-xs-12 col-sm-12 col-md-12">
                        <div class="card-header">
                            <h3 class="card-title">Reclamos</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">
                                <div>
                                    <div class="product-title" style="color: 
                                    <?php 
                                    if((isset($datos) && !empty($datos))){
                                        switch (strtolower(trim($datos['estado_reclamo']))){
                                                case "nuevo":echo "red";break;
                                                case "propuesta enviada":echo "#00B050";break;
                                                case "cerrado":echo "#00B050";break;
                                                case "propuesta aceptada":echo "#FFC000";break;
                                                case "en proceso":echo "#FFC000";break;
                                        }
                                    }else{
                                        echo '#6c757d';
                                    }
                                            ?>;
                                    
                                    ">
                                        <b>Estado :</b> <?php echo  (isset($datos) && !empty($datos)) ? $datos['estado_reclamo']  : '' ; ?>
                                        <i class="fas  
                                        <?php 
                                            if((isset($datos) && !empty($datos))){
                                                switch (strtolower(trim($datos['estado_reclamo']))){
                                                        case "nuevo":echo "fa-frown";break;
                                                        case "propuesta enviada":echo "fa-smile";break;
                                                        case "cerrado":echo "fa-smile";break;
                                                        case "propuesta aceptada":echo "fa-check";break;
                                                        case "en proceso":echo "fa-check";break;
                                                }
                                            }else{
                                                echo '';
                                            }
                                        ?>
                                         float-right"></i>
                                    </div>
                                    <span class="product-description" style="white-space: unset;">
                                        <b>Fecha :</b><?php echo  (isset($datos) && !empty($datos)) ? $datos['reclamo_fecha']  : '' ; ?>
                                    </span>
                                    <span class="product-description" style="white-space: unset;">
                                        <b>Subcategoría : </b><?php echo  (isset($datos) && !empty($datos)) ? $datos['subcategoria_reclamo']  : '' ; ?> 
                                    </span>
                                    <span class="product-description" style="white-space: unset;">
                                        <b>Propietario : </b><?php echo  (isset($datos) && !empty($datos)) ? $datos['propietario_reclamo']  : '' ; ?>  
                                    </span>
                                </div>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="product-title" style="color: 
                                    <?php 
                                    if((isset($datos) && !empty($datos))){
                                        switch (strtolower(trim($datos['estado_reclamo2']))){
                                                case "nuevo":echo "red";break;
                                                case "propuesta enviada":echo "#00B050";break;
                                                case "cerrado":echo "#00B050";break;
                                                case "propuesta aceptada":echo "#FFC000";break;
                                                case "en proceso":echo "#FFC000";break;
                                        }
                                    }else{ 
                                        echo '#6c757d';
                                    }
                                            ?>;">
                                        <b>Estado :</b> <?php echo  (isset($datos) && !empty($datos)) ? $datos['estado_reclamo2']  : '' ; ?>
                                        <i class="fas 
                                        <?php 
                                            if((isset($datos) && !empty($datos))){
                                                switch (strtolower(trim($datos['estado_reclamo2']))){
                                                        case "nuevo":echo "fa-frown";break;
                                                        case "propuesta enviada":echo "fa-smile";break;
                                                        case "cerrado":echo "fa-smile";break;
                                                        case "propuesta aceptada":echo "fa-check";break;
                                                        case "en proceso":echo "fa-check";break;
                                                }
                                            }else{
                                                echo '';
                                            }
                                        ?>
                                        float-right"></i>
                                    </div>
                                    <span class="product-description" style="white-space: unset;">
                                        <b>Fecha :</b><?php echo  (isset($datos) && !empty($datos)) ? $datos['reclamo2_fecha']  : '' ; ?>
                                    </span>
                                    <span class="product-description" style="white-space: unset;">
                                        <b>Subcategoría : </b><?php echo  (isset($datos) && !empty($datos)) ? $datos['subcategoria_reclamo2']  : '' ; ?> 
                                    </span>
                                    <span class="product-description" style="white-space: unset;">
                                        <b>Propietario : </b><?php echo  (isset($datos) && !empty($datos)) ? $datos['propietario_reclamo2']  : '' ; ?>  
                                    </span>
                                </div>
                            </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                            
                    
                   </div>
                   <div class="col-xs-12 col-sm-8 col-md-8">
                   <div class="small-box" style="background-color:#e9ecef">
                        <div class="inner input-group">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <label class="p-1">Trabajo 1</label>
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-plug"></i></span>
                                </div>
                                    <!-- <input type="text" class="form-control form-control-lg" id="trabajo1" name="trabajo1" placeholder="Trabajo 1" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Trabajo 1" 
                                    value="<?php echo  (isset($datos) && !empty($datos)) ? $datos['trabajos']  : '' ; ?>" > -->
                                    <select class="form-control form-control-lg select2" style="width: 83%;">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <label class="p-1">Trabajo 2</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-gavel"></i></span>
                                        </div>
                                        <select class="form-control form-control-lg select2" style="width: 83%;">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <label class="p-1">Trabajo 3</label>
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-cubes"></i></span>
                                    </div>

                                        <select class="form-control form-control-lg select2" style="width: 83%;">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <label class="p-1">Trabajo 4</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-wrench"></i> </span>
                                    </div>

                                        <select class="form-control form-control-lg select2" style="width: 83%;">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                </div>
                            </div>
                            <div class="icon">
                                <i class="fa fa-wrench"></i>
                            </div>
                            <!-- /input-group -->
                            <strong>Observaciones</strong>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded-0" name="obs" value="<?php echo  (isset($datos) && !empty($datos)) ? $datos['obs']  : '' ; ?>">
                            <span class="input-group-append">
                                <button type="button" class="btn btn-info btn-flat" id="btnsave"><i class="ion ion-ios-refresh-empty"></i></button>
                            </span>
                            </div>
                            <!-- /input-group -->

                            
                        </div>
                    </div>
                    <a class="btn btn-app bg-danger" onclick="window.print()" style="float: right;" id="imprimir">
                        <i class="fas fa-print"></i> Imprimir
                     </a>
            
                   </div>
                </div>

            </div>

        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </form>

  <script src="vistas/js/posventaautomotriz.js"></script>
