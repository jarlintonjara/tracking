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
<form method="POST" id="formpostventa">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <img src="../tracking/vistas/img/plantilla/logo.png" class="float-right" width="150" height="150">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8"> 
                    <h1 class="text-center display-4 float-left"><p style="font-weight: bold; font-size: inherit; padding-top:11%;">POSTVENTA AUTOMOTRIZ</p></h1>

                </div>
            </div>
        </div>   
      <!-- Default box -->
      <div class="card">
        <div id="lineaperfilamiento" class="card-header" style="background-color: #212529; padding:2px;">
        </div>
        <div class="card-body" style="background-color: #f4f6f9;">
          
        <div class="container-flui">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12">
                    <div class="small-box" style="background-color: #e9ecef">
                        <div class="inner input-group">
                            <div class="col-md-3">
                                <label class="p-1">Número de placa</label>
                                <div class="input-group input-group-lg">
                                    <SELECT class="form-control form-control-lg select2" id="placa" name="placa" placeholder="placa"  value=""></SELECT>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="p-1">VIN</label>
                                <div class="input-group input-group-lg">
                                    <SELECT class="form-control form-control-lg select2" id="vintracking" name="vintracking" placeholder="VIN"  value=""></SELECT>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="p-1">Número de documento</label>
                                <div class="input-group input-group-lg">
                                    <SELECT class="form-control form-control-lg select2" id="documentotracking" name="documentotracking" placeholder="Documento"  value=""></SELECT>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div id="divperfilamiento" class="icon fa-3x" style="text-align: right; margin-bottom: 25%; color: #212529; ">
                                    <i class="fa fa-user"></i>
                                    <p id="textoperfilamiento" style="font-size: 14px;">Perfil</p>
                                </div>
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
                                            <input type="text" class="form-control form-control-lg" id="Telefono" name="Telefono" placeholder="Teléfono" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Teléfono de contacto" >
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <label class="p-1">Email</label>
                                        <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i> </span>
                                        </div>
                                
                                            <input type="text" class="form-control form-control-lg" id="Email" name="Email" placeholder="Email" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Correo del Electrónico de contacto">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label class="p-1">Nombre Completo</label>
                                        <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                          <input type="text" class="form-control form-control-lg" id="NombreCompleto" name="NombreCompleto" placeholder="Nombre Completo" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Nombre Completo">
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
                            <h3 id="nps_venta" style="line-height: 1px;">Venta &nbsp;&nbsp;<b>0</b>/10 </h3>
                            </div>
                            <div class="progress" style="height: 42px;">
                                <div id="progressventa" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 0%; background-color: black;"></div>
                            </div>
                            
                            <h5 id="verbatim_nps_venta">Aún no hay respuestas disponibles</h5>
                        </div>
                    </div>

                    <div class="info-box">  
                        <div class="icon fa-7x" style="text-align: center;">
                            <!-- <i class="ion ion-star"></i> -->
                            <img src="../tracking/vistas/img/plantilla/nps3.png" class="float-left" width="150" height="130">
                        </div>

                        <div class="info-box-content">
                            <div class="progress-group">
                            <h3 id="nps_postventa" style="line-height: 1px;">Postventa &nbsp;&nbsp;<b>0</b>/10 </h3>
                            
                            </div>
                            <div class="progress" style="height: 42px;">
                                <div id="progresspostventa" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 0%; background-color: black"></div>
                                
                            </div>
                            
                            <h5 id="verbatim_nps_postventa">Aún no hay respuestas disponibles</h5>
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
                                <span id="fecha_agenda1" class="direct-chat-timestamp float-left">aaaa-mm-dd</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text"  style="margin-left: 2px;">
                                    <p id="servicio_agenda"><b>Servicio : </b></p>
                                    <p id="comentario_agenda"><b>Comentario :</b></p>
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                <span id="fecha_agenda2" class="direct-chat-timestamp float-left">aaaa-mm-dd</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text"  style="margin-left: 2px;">
                                    <p id="servicio_agenda2"><b>Servicio : </b></p>
                                    <p id="comentario_agenda2"><b>Comentario :</b></p>
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
                                    <span id="centro" class="direct-chat-name float-left"></span>
                                    <span id="fecha_cierre" class="direct-chat-timestamp float-right"></span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    <p id="servicio"></p>
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                <span id="centro2" class="direct-chat-name float-right"></span>
                                <span id="fecha_cierre2" class="direct-chat-timestamp float-left"></span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <div class="direct-chat-text">
                                <p id="servicio2"></p>
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>

                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                <span id="centro3" class="direct-chat-name float-left"></span>
                                <span id="fecha_cierre3" class="direct-chat-timestamp float-right"></span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    <p id="servicio3"></p>
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
                        <div id="boxrecall" class="alert alert-secondary alert-dismissible">
                        
                        <h5 id="txtrecall"><i id="iconrecall" class="icon fas"></h5>
                        
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
                                            <input type="text" class="form-control form-control-lg" id="Marca" name="Marca" placeholder="Marca" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Marca del Vehículo">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label class="p-1">Modelo</label>
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-car"></i></span>
                                            </div>
                                                <input type="text" class="form-control form-control-lg" id="Modelo" name="Modelo" placeholder="Modelo" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Modelo del Vehículo">
                                            </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label class="p-1">Kilometraje</label>
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-car"></i></span>
                                            </div>
                                                <input type="text" class="form-control form-control-lg" id="kilometraje" name="kilometraje" placeholder="Modelo" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Modelo del Vehículo">
                                            </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label class="p-1">Retoma</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-car-alt"></i> </span>
                                            </div>

                                            <input type="text" class="form-control form-control-lg" id="RetomaVenta" name="RetomaVenta" placeholder="Retoma" data-toggle="tooltip" data-placement="bottom" title="" readonly="" data-original-title="Retoma">
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
                    <div class="col-sm-6">
                        <!-- PRODUCT LIST -->
                        <div class="card col-xs-12 col-sm-12 col-md-12">
                        <div class="card-header">
                            <h3 class="card-title"><b>Reclamos</b></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">
                                <div>
                                    <div id="estadoreclamo" class="product-title" style="color: '#6c757d';">
                                        <i id="iconestado" class="fas float-right"></i>
                                    </div>
                                    <span id="reclamo_fecha" class="product-description" style="white-space: unset;">
                                        <b>Fecha :</b>
                                    </span>
                                    <span id="subcategoria_reclamo" class="product-description" style="white-space: unset;">
                                        <b>Subcategoría : </b> 
                                    </span>
                                    <span id="propietario_reclamo" class="product-description" style="white-space: unset;">
                                        <b>Propietario : </b>
                                    </span>
                                </div>
                            </li>
                            <li class="item">
                                <div>
                                <div id="estadoreclamo2" class="product-title" style="color: '#6c757d';">
                                    <i id="iconestado2" class="fas float-right"></i>
                                </div>
                                <span id="reclamo2_fecha" class="product-description" style="white-space: unset;">
                                    <b>Fecha :</b>
                                </span>
                                <span id="subcategoria_reclamo2" class="product-description" style="white-space: unset;">
                                    <b>Subcategoría : </b> 
                                </span>
                                <span id="propietario_reclamo2" class="product-description" style="white-space: unset;">
                                    <b>Propietario : </b>
                                </span>
                                </div>
                            </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                   </div>
                   <div class="col-xs-12 col-sm-8 col-md-6">
                        <div class="small-box" style="background-color:#e9ecef">
                            
                            <ul class="nav flex-column">
                                <li class="nav-item bg-danger">
                                    <a href="#" class="nav-link">
                                    DESCARGA DE DOCUMENTOS
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../tracking/storage/REPORTE DE MANTENIMIENTO.xlsx" class="nav-link">
                                    Reporte de mantenimiento <span class="info-box-icon"><i class="float-right fas fa-cloud-download-alt"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../tracking/storage/REPORTE DE REPARACIÓN.xlsx" class="nav-link">
                                    Reporte de reparación <span class="info-box-icon"><i class="float-right fas fa-cloud-download-alt"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                <a href="../tracking/storage/REPORTE DIAGNOSTICO.xlsx" class="nav-link">
                                   Reporte de diagnóstico <span class="danger-box-icon"><i class="float-right fas fa-cloud-download-alt"></i></span>
                                    </a>
                                </li>
                            </ul>
                                
                        </div>
                        <div class="small-box" style="background-color:#e9ecef">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title"><b>Observaciones</b></h5>
                                </div>
                                    <div class="card-body p-0">
                                    
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control rounded-0" id="obs" name="obs" value="">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-info btn-flat" id="btnsave"><i class="ion ion-ios-refresh-empty"></i></button>
                                        </span>
                                        </div>
                                    </div>
                            </div>
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
  <script src="vistas/dist/js/blockui.js?<?= date("smH") ?>">"></script>

