
  <style>
  .tooltip-inner {
    max-width: 500px;
    width: 500px; 
    text-align: left;
}</style>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content p-3">
        <div class="container-fluid">
            <br>
            <h2 class="text-center display-4">Tracking Automotriz</h2>
            <br><br>
            <form id="busquedaForm">
                <div class="row">
                    <div class="col-md-3">
                        <label class="p-1">Nombre Cliente</label>
                        <div class="input-group input-group-lg">
                            <SELECT class="form-control form-control-lg select2" id="BuscarNombreCliente" name="BuscarNombreCliente" placeholder="Nombre Cliente"  value=""></SELECT>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="p-1">N° Documento</label>
                        <div class="input-group input-group-lg">
                            <SELECT class="form-control form-control-lg select2" id="BuscarNroDocumento" name="BuscarNroDocumento" placeholder="N° Documento" value=""></SELECT>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="p-1">VIN</label>
                        <div class="input-group input-group-lg">
                            <SELECT class="form-control form-control-lg select2" id="BuscarVin" name="Vin" placeholder="VIN" value=""></SELECT>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="p-1">PLACA</label>
                        <div class="input-group input-group-lg">
                            <SELECT class="form-control form-control-lg select2" id="BuscarPlaca" name="Placa" placeholder="PLACA" value=""></SELECT>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <hr>
    <section class="content p-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                  <div class="card card-primary card-outline" style="border: 1px solid blue;">
                    <div class="card card-primary " >
                        <div class="card-header">
                            <h3 class="card-title">1. Venta de la Unidad</h3>
                            
                            <div class="card-tools">
                              <span  data-html="true" data-toggle="tooltip" title="Proceso que inicia con la facturación y cancelación de la unidad.<br><br>
Responsables:<br><br>
Gerente Zona Sur: José Antonio Bedoya Rosas<br>
Correo: magel.valencia@derco.pe Celular: 989231541<br><br>
Gerente Zona Norte: Maria Angelica Valencia Mestas<br>
Correo: magel.valencia@derco.pe Celular: 989231541
" class="ml-3"><img width="16px" height="16px" src="./vistas/img/info.png"></img></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                             
                              <div class  = "col-xs-12 col-sm-12 col-md-12">
                                <label class="p-1">Vin</label>
                                <div class = "input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-barcode"></i> </i></span>
                                  </div>

                                  <input type="text" class="form-control form-control-lg" id="VinVentaUnidad" name="VinVentaUnidad" placeholder="Vin" value="" data-toggle="tooltip" data-placement="bottom" title="VIN del Vehiculo" readonly>
                                </div>
                              </div>

                                          <div class  = "col-xs-12 col-sm-6 col-md-6">
<label class="p-1">Fecha Facturación</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i> </i></span>
              </div>
   
                                   <input type="text" class="form-control form-control-lg" id="FechaVenta" name="FechaVenta" placeholder="Fecha de Venta" value="" data-toggle="tooltip" data-placement="bottom" title="Fecha de Venta del Vehiculo" readonly>
            </div>
          </div>

                                          <div class  = "col-xs-12 col-sm-6 col-md-6">
<label class="p-1">Fecha Cancelacion</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i> </i></span>
              </div>
   
                                   <input type="text" class="form-control form-control-lg" id="FechaCancelacionVenta" name="FechaCancelacionVenta" placeholder="Fecha de Venta" value="" data-toggle="tooltip" data-placement="bottom" title="Fecha de Cancelacion del Vehiculo" readonly>
            </div>
          </div>



                        <div class  = "col-xs-12 col-sm-6 col-md-6">
 <label class="p-1">N° Documento</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-id-card"></i>  </i></span>
              </div>
   
                              
                                    <input type="text" class="form-control form-control-lg" id="NroDocumento" name="NroDocumento" placeholder="Número de Documento" value="" data-toggle="tooltip" data-placement="bottom" title="Número del documento" readonly>
            </div>
          </div>




                                          <div class  = "col-xs-12 col-sm-6 col-md-6">
           <label class="p-1">Nombre Completo</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
     
                                    <input type="text" class="form-control form-control-lg" id="NombreCompleto" name="NombreCompleto" placeholder="Nombre Completo" value="" data-toggle="tooltip" data-placement="bottom" title="Nombre Completo" readonly>
            </div>
          </div>



 


                  



                                          <div class  = "col-xs-12 col-sm-6 col-md-6">
 <label class="p-1">Teléfono</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div>
   
                              
                                 
                                    <input type="text" class="form-control form-control-lg" id="Telefono" name="Telefono" placeholder="Teléfono" value="" data-toggle="tooltip" data-placement="bottom" title="Teléfono de contacto" readonly>
            </div>
          </div>

                                          <div class  = "col-xs-12 col-sm-6 col-md-6">
 <label class="p-1">Email</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i> </span>
              </div>
     
                                     <input type="text" class="form-control form-control-lg" id="Email" name="Email" placeholder="Email" value="" data-toggle="tooltip" data-placement="bottom" title="Correo del Electrónico de contacto" readonly>
            </div>
          </div>

          
          <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Datos Vendedor</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
              </div>
              <input type="text" class="form-control form-control-lg" id="Datos_Vendedor" name="Datos_Vendedor" placeholder="Teléfono" value="" data-toggle="tooltip" data-placement="bottom" title="Datos del vendedorde la unidad" readonly>
            </div>
          </div>

          <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Datos Tienda</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-store"></i></span>
              </div>

              <input type="text" class="form-control form-control-lg" id="Datos_Tienda" name="Datos_Tienda" placeholder="Datos Tienda" value="" data-toggle="tooltip" data-placement="bottom" title="Datos de la tienda" readonly>
            </div>
          </div>



          <div class  = "col-xs-12 col-sm-6 col-md-6">
           <label class="p-1">Marca</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-car-alt"></i></span>
              </div>
     
                                    <input type="text" class="form-control form-control-lg" id="Marca" name="Marca" placeholder="Marca" value="" data-toggle="tooltip" data-placement="bottom" title="Marca del Vehículo" readonly>
            </div>
          </div>



 


                  



                                          <div class  = "col-xs-12 col-sm-6 col-md-6">
 <label class="p-1">Modelo</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-car"></i></span>
              </div>
   
                              
                                 
                                    <input type="text" class="form-control form-control-lg" id="Modelo" name="Modelo" placeholder="Modelo" value="" data-toggle="tooltip" data-placement="bottom" title="Modelo del Vehículo" readonly>
            </div>
          </div>

          <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Versión de la unidad</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-car-side"></i></span>
              </div>
              <input type="text" class="form-control form-control-lg" id="VersionUnidad" name="VersionUnidad" placeholder="Versión de la unidad" value="" data-toggle="tooltip" data-placement="bottom" title="Versión de la unidad" readonly>
            </div>
          </div>

          <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Tipo de Financiamiento</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-donate"></i> </span>
              </div>

              <input type="text" class="form-control form-control-lg" id="TipoFinanciamiento" name="TipoFinanciamiento" placeholder="Tipo de Financiamiento" value="" data-toggle="tooltip" data-placement="bottom" title="Tipo de Financiamiento" readonly>
            </div>
          </div>



<!-- inicio -->



  <div class  = "col-xs-12 col-sm-12 col-md-12">
            <label class="p-1">Accesorios</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-car-side"></i></span>
              </div>
             <!-- <input type="text" class="form-control form-control-lg" id="AccesoriosVenta" name="AccesoriosVenta" placeholder="Accesorios" value="" data-toggle="tooltip" data-placement="bottom" title="Accesorios" readonly> -->

            <textarea name="AccesoriosVenta" id="AccesoriosVenta" cols="30" rows="3" class="form-control form-control-lg" data-toggle="tooltip" data-placement="bottom" title="Accesorios" placeholder="Accesorios" readonly="" ></textarea>
			 </div>
          </div>




           <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Retoma</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                 <span class="input-group-text"><i class="fas fa-car-alt"></i> </span>
              </div>

              <input type="text" class="form-control form-control-lg" id="RetomaVenta" name="RetomaVenta" placeholder="Retoma" value="" data-toggle="tooltip" data-placement="bottom" title="Retoma" readonly>
            </div>
          </div>


  <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Placa Retoma</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-car-alt"></i></span>
              </div>
              <input type="text" class="form-control form-control-lg" id="PlacaRetomaVenta" name="PlacaRetomaVenta" placeholder="Placa Retoma" value="" data-toggle="tooltip" data-placement="bottom" title="Placa Retoma" readonly>
            </div>
          </div>



 


    <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Fecha Estimada en días</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                 <span class="input-group-text"><i class="fas fa-calendar-day"></i> </span>
              </div>

              <input type="text" class="form-control form-control-lg" id="FechaEstimadaVenta" name="FechaEstimadaVenta" placeholder="Por confirmar" value="" data-toggle="tooltip" data-placement="bottom" title="Fecha Estimada en días" readonly>
            </div>
          </div>



         <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Fecha Real</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-donate"></i> </span>
              </div>

              <input type="text" class="form-control form-control-lg" id="FechaRealVenta" name="FechaRealVenta" placeholder="Fecha Real" value="" data-toggle="tooltip" data-placement="bottom" title="Fecha Real" readonly>

            </div>
          </div>


<!-- fin -->
      

       <div class  = "col-xs-12 col-sm-6 col-md-12">
               <label class="p-1">Estado</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-secondary" id="iconoEstadoVenta" style="cursor: default;"><i class="fas fa-info"></i></button>
                  </div>
   
              </div>
  
     
                                             <input type="text" class="form-control form-control-lg" id="EstadoVenta" name="EstadoVenta" placeholder="Estado sobre la Venta" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Estado PDI" readonly>
            </div>
          </div>




      </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN VENTA UNIDAD -->
                <div class="col-md-6">
                  <div class="card card-warning  card-outline" style="border: 1px solid yellow;">
                    <div class="card card-warning"  >
                        <div class="card-header">
                            <h3 class="card-title">2. Trámite de Placas</h3>

                            <div class="card-tools">
                              <div class="card-tools">
                                <span  data-html="true" data-toggle="tooltip" data-placement="bottom" title="Proceso administrativo que inicia con el ingreso del expediente a la AAP y culmina con la entrega de placas y tarjeta de propiedad.<br><br>
Responsable:<br><br>
Jefe de Administración de Venta: Luis Alfredo Ruiz Garces<br>
Correo: luis.ruiz@derco.pe  Celular: 989232570

" class="ml-3"><img width="16px" height="16px" src="./vistas/img/info.png"></img></span>
                              </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                              <div class  = "col-xs-12 col-sm-6 col-md-6">
                                <label class="p-1">Número de Placa</label>
                                <div class = "input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-square-full"></i> </span>
                                  </div>
                                  <input type="text" class="form-control form-control-lg" id="NumeroPlaca" name="NumeroPlaca" placeholder="Número de Placa" value="" data-toggle="tooltip" data-placement="bottom" title="Número de placas" readonly>
                                </div>
                              </div>


   <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Código de Verificación</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-square-full"></i> </span>
              </div>
<input type="text" class="form-control form-control-lg" id="CodigoVerificacion" name="CodigoVerificacion" placeholder="Código de Verificación" value="" 
 data-toggle="tooltip" data-placement="bottom" title="Código de Verificación" readonly>
            </div>
          </div>




          <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Inicio de Tramite</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i> </span>
              </div>
<input type="text" class="form-control form-control-lg" id="FechaIngreso" name="FechaIngreso" placeholder="Inicio de Trámite" value="" 
 data-toggle="tooltip" data-placement="bottom" title="Inicio de Trámite de placas" readonly>
            </div>
          </div>



          <div class  = "col-xs-12 col-sm-6 col-md-6">
 <label class="p-1">Expediente Aprobado</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
              </div>
   
                                    <input type="text" class="form-control form-control-lg" id="FechaRecepcion" name="FechaRecepcion" placeholder="Expediente Aprobado" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Expediente Aprobado de placas" readonly>
            </div>
          </div>


          <div class  = "col-xs-12 col-sm-12 col-md-12">
            <label class="p-1">Detalle Observado AAP</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i> </span>
              </div>
              <input type="text" class="form-control form-control-lg" id="DetalleObservado" name="DetalleObservado" placeholder="Detalle Observado" value="" data-toggle="tooltip" data-placement="bottom" title="Detalle Observado AAP" readonly>
            </div>
          </div>


            <div class  = "col-xs-12 col-sm-6 col-md-6">
              <label class="p-1">Fecha Presentación Sunarp</label>
              <div class = "input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-award"></i> </span>
                </div>
                <input type="text" class="form-control form-control-lg" id="CalificacionSunarp" name="CalificacionSunarp" placeholder="Fecha Presentación Sunarp" value="" data-toggle="tooltip" data-placement="bottom" title="Fecha Presentación Sunarp" readonly>
              </div>
            </div>

          <div class  = "col-xs-12 col-sm-6 col-md-6">
 <label class="p-1">Emisión de TIVE</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i> </span>
              </div>
   
                                                   <input type="text" class="form-control form-control-lg" id="FechaInsSunarp" name="FechaInsSunarp" placeholder="Emisión de TIVE" value="" 
                                                    data-toggle="tooltip" data-placement="bottom" title="Emisión de TIVE" readonly>
            </div>
          </div>




          <div class  = "col-xs-12 col-sm-6 col-md-6">
 <label class="p-1">Entrega Placas</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
              </div>
   
                                                            <input type="text" class="form-control form-control-lg" id="FechaEntregaPlacas" name="FechaEntregaPlacas" placeholder="Entrega Placas" value="" 
                                                             data-toggle="tooltip" data-placement="bottom" title="Entrega de Placas" readonly>
            </div>
          </div>

   
          <!--<div class  = "col-xs-12 col-sm-6 col-md-6">
 <label class="p-1">Fecha Trámite Concluído</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
              </div>
   
                                                            <input type="text" class="form-control form-control-lg" id="FechaTramiteConcluido" name="FechaTramiteConcluido" placeholder="Fecha Trámite Concluido" value="" 
                                                             data-toggle="tooltip" data-placement="bottom" title="Fecha Trámite Concluído" readonly>
            </div>
          </div>-->



            <div class  = "col-xs-12 col-sm-6 col-md-6">
              <label class="p-1">Fecha Estimada en Días</label>
              <div class = "input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-calendar-day"></i> </span>
                </div>
                <input type="text" class="form-control form-control-lg" id="FechaEstimadaPlacas" name="FechaEstimadaPlacas" placeholder="Fecha Estimada en Días" value="" data-toggle="tooltip" data-placement="bottom" title="Fecha Estimada en Días" readonly>
              </div>
            </div>



          <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Fecha Real</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-donate"></i> </span>
              </div>

              <input type="text" class="form-control form-control-lg" id="FechaRealPlaca" name="FechaRealPlaca" placeholder="Fecha Real" value="" data-toggle="tooltip" data-placement="bottom" title="Fecha Real" readonly>
            </div>
          </div>



          <div class  = "col-xs-12 col-sm-6 col-md-6 col-md-12">
  <label class="p-1">Estado</label>
            <div class = "input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-secondary" id="iconoEstado" style="cursor: default;"><i class="fas fa-info"></i></button>
                  </div>
   
                                                               
                                    <input type="text" class="form-control form-control-lg" id="Estado" name="Estado" placeholder="Estado de la Placa" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Estado de la placa" readonly>
            </div>
          </div>



    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN PLACAS -->
                

            </div>
            <hr>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card card-secondary card-outline" style="border: 1px solid #292b2c ;">
                      <div class="card card-secondary" >
                        <div class="card-header">
                            <h3 class="card-title">3. PDI</h3>

                            <div class="card-tools">
                              <div class="card-tools">
                                <span  data-html="true" d data-toggle="tooltip" data-placement="bottom" title="Proceso de alistamiento de unidades que inicia con el recojo de expedientes para trámite de placas y culmina con el despacho de unidades hacia el punto de entrega.<br>
                                  La información que se visualiza hace referencia a la fecha de inicio y cierre de OT.<br><br>
Responsable:<br>
Franz Rodolfo Aquije Chorres<br>
Correo: franz.aquije@derco.pe   Celular: 986734506<br><br>
Contacto: <br><br>
Contacto: Elmer Zacarias Franco Solis.<br>
Correo: elmer.franco@derco.pe Celular: 965399736

" class="ml-3"><img width="16px" height="16px" src="./vistas/img/info.png"></img></span>
                              </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                              




       <div class  = "col-xs-12 col-sm-12 col-md-12">
        <label class="p-1">Inicio de Trámite</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i> </i></span>
              </div>
  
                     <input type="text" class="form-control form-control-lg" id="FechaIngresoPdi" name="FechaIngresoPdi" placeholder="Inicio de Trámite" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Inicio de trámite PDI" readonly>
            </div>
          </div>





       <div class  = "col-xs-12 col-sm-6 col-md-6">
        <label class="p-1">Emplazamiento</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i> </i></span>
              </div>
  
                     <input type="text" class="form-control form-control-lg" id="pdiEmplazamiento" name="pdiEmplazamiento" placeholder="Emplazamiento" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Emplazamiento PDI" readonly>
            </div>
          </div>



              <div class  = "col-xs-12 col-sm-6 col-md-6">
        <label class="p-1">Estado del Cliente</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i> </i></span>
              </div>
  
                     <input type="text" class="form-control form-control-lg" id="pdiEstadoCliente" name="pdiEstadoCliente" placeholder="Inicio de Trámite" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Estado del cliente PDI" readonly>
            </div>
          </div>




                 <div class  = "col-xs-12 col-sm-6 col-md-6">
        <label class="p-1">Fecha Proyectada</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i> </i></span>
              </div>
  
                     <input type="text" class="form-control form-control-lg" id="pdiFechaProyectada" name="pdiFechaProyectada" placeholder="Inicio de Trámite" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Fecha Proyectada PDI" readonly>
            </div>
          </div>



             



       <div class  = "col-xs-12 col-sm-12 col-md-6">
            <label class="p-1">Fecha Salida</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
              </div>
  
     
                                    <input type="text" class="form-control form-control-lg" id="FechaSalidaPdi" name="FechaSalidaPdi" placeholder="Fecha de Salida" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Fecha de Salida PDI" readonly>
            </div>
          </div>



          <div class  = "col-xs-12 col-sm-12 col-md-6">
            <label class="p-1">Fecha Estimada en Días</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
              </div>
     
              <input type="text" class="form-control form-control-lg" id="FechaEstimadaPdi" name="FechaEstimadaPdi" placeholder="Fecha Estimada en Días" value="" 
                data-toggle="tooltip" data-placement="bottom" title="Fecha Estimada en Días" readonly>
            </div>
          </div>



          <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Fecha Real</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-donate"></i> </span>
              </div>

              <input type="text" class="form-control form-control-lg" id="FechaRealPdi" name="FechaRealPdi" placeholder="Fecha Real" value="" data-toggle="tooltip" data-placement="bottom" title="Fecha Real" readonly>
            </div>
          </div>
      








       <div class  = "col-xs-12 col-sm-12 col-md-12">
               <label class="p-1">Estado</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-secondary" id="iconoEstadoPdi" style="cursor: default;"><i class="fas fa-info"></i></button>
                  </div>
   
              </div>
  
     
                                             <input type="text" class="form-control form-control-lg" id="EstadoPdi" name="EstadoPdi" placeholder="Estado sobre el PDI" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Estado PDI" readonly>
            </div>
          </div>



 
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="card card-success card-outline " style="border: 1px solid #5cb85c;">

<div class="card card-success" >
                    <div class="card-header ">
                        <h3 class="card-title">4. Gas</h3>

                        <div class="card-tools">
                            <div class="card-tools">
                              <span data-html="true" data-toggle="tooltip" data-placement="bottom" title="Proceso de conversión a Gas que inicia con la fecha de cancelación y culmina con el despacho de unidades hacia PDI.<br><br>
Responsable:<br>
Alberto Cesar Paredes Muñoz<br>
Correo: alberto.paredes@derco.pe  Celular: 966361040<br><br>
Contacto:<br>
Cesar Eduardo Nacion Ecos.<br>
Correo: cesar.nacion@derco.pe   Celular: 940495234

" class="ml-3"><img width="16px" height="16px" src="./vistas/img/info.png"></img></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        




                      <!--  <div class  = "col-xs-12 col-sm-12 col-md-6">
                        <label class="p-1">Inicio de Trámite</label>
                        <div class = "input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-day"></i> </i></span>
                        </div>

                        <input type="text" class="form-control form-control-lg" id="FechaDocumentoGas" name="FechaDocumentoGas" placeholder="Inicio de Trámite" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Inicio de Trámite de Gas" readonly>
                        </div>
                        </div> -->




 <div class  = "col-xs-12 col-sm-12 col-md-6">
                        <label class="p-1">Solicitud de Ingreso</label>
                        <div class = "input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-day"></i> </i></span>
                        </div>

                        <input type="text" class="form-control form-control-lg" id="solicitud_ingreso_gas" name="solicitud_ingreso_gas" placeholder="Solicitud de Ingreso" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Solicitud de Ingreso" readonly>
                        </div>
                        </div>


     <div class  = "col-xs-12 col-sm-12 col-md-6">
                        <label class="p-1">Ingreso a taller</label>
                        <div class = "input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                        </div>


                        <input type="text" class="form-control form-control-lg" id="fecha_documento_gas" name="fecha_documento_gas" placeholder="Ingreso a taller" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Ingreso a taller" readonly>
                        </div>
                        </div>





<!-- inicio -->
 



                   

                          <div class  = "col-xs-12 col-sm-12 col-md-6">
                        <label class="p-1">Instalación</label>
                        <div class = "input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-day"></i> </i></span>
                        </div>

                        <input type="text" class="form-control form-control-lg" id="instalacion_gas" name="instalacion_gas" placeholder="Instalación" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Instalación" readonly>
                        </div>
                        </div>



                        <div class  = "col-xs-12 col-sm-12 col-md-6">
                        <label class="p-1">Solicitud de Recojo</label>
                        <div class = "input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                        </div>


                        <input type="text" class="form-control form-control-lg" id="solicitud_recojo_gas" name="solicitud_recojo_gas" placeholder="Solicitud de Recojo" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Solicitud de Recojo" readonly>
                        </div>
                        </div>
<!-- fin -->


   <div class  = "col-xs-12 col-sm-12 col-md-6">
                        <label class="p-1">Salida de Taller</label>
                        <div class = "input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                        </div>


                        <input type="text" class="form-control form-control-lg" id="FechaCierreGas" name="FechaCierreGas" placeholder="Salida de Taller" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Salida de Taller" readonly>
                        </div>
                        </div>


<div class  = "col-xs-12 col-sm-6 col-md-6">
                          <label class="p-1">Tipo Gas</label>
                          <div class = "input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                            </div>
                  
                            <input type="text" class="form-control form-control-lg" id="TipoGas" name="TipoGas" placeholder="Tipo Gas" value="" 
                              data-toggle="tooltip" data-placement="bottom" title="Tipo de Gas" readonly>
                          </div>
                        </div>

      <div class  = "col-xs-12 col-sm-6 col-md-6">
                          <label class="p-1">Fecha Estimada en Días</label>
                          <div class = "input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                            </div>
                  
                            <input type="text" class="form-control form-control-lg" id="FechaEstimadaGas" name="FechaEstimadaGas" placeholder="Fecha Estimada en Días" value="" 
                              data-toggle="tooltip" data-placement="bottom" title="Fecha Estimada en Días" readonly>
                          </div>
                        </div>


                        

          <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Fecha Real</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-donate"></i> </span>
              </div>

              <input type="text" class="form-control form-control-lg" id="FechaRealGas" name="FechaRealGas" placeholder="Fecha Real" value="" data-toggle="tooltip" data-placement="bottom" title="Fecha Real" readonly>
            </div>
          </div>
      



                        <div class  = "col-xs-12 col-sm-12 col-md-12">
                        <label class="p-1">Estado</label>
                        <div class = "input-group mb-3">
                        <div class="input-group-prepend">
                          <button type="button" class="btn btn-secondary" id="iconoEstadoGas" style="cursor: default;"><i class="fas fa-info"></i></button>
                        </div>


                        <input type="text" class="form-control form-control-lg" id="EstadoGas" name="EstadoGas" placeholder="Estado Gas" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Estado Gas" readonly>
                        </div>
                        </div>




                      </div>
                    </div>
                  </div>
                </div>
</div>

                <div class="col-md-4">
                    <div class="card card-danger  card-outline" style="border: 1px solid #d9534f;">
                      <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">5. Entregas</h3>

                            <div class="card-tools">
                              <div class="card-tools">
                                <span data-html="true" data-toggle="tooltip" data-placement="bottom" title="Proceso que inicia con la programación de la fecha para entrega y culmina con la entrega de la unidad al cliente.<br><br>

Responsable:<br>
Esteban Nait Moreno Gonzales.<br>
Correo: esteban.moreno@derco.pe Celular: 989231505

" class="ml-3"><img width="16px" height="16px" src="./vistas/img/info.png"></img></span>
                              </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                               






          <div class  = "col-xs-12 col-sm-12 col-md-12">
            <label class="p-1">Fecha Entrega</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i> </span>
              </div>
   <input type="text" class="form-control form-control-lg" id="FechaEntrega" name="FechaEntrega" placeholder="Fecha de Entrega" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Fecha de entrega de la unidad" readonly>
            </div>
          </div>

          <div class  = "col-xs-12 col-sm-12 col-md-12">
            <label class="p-1">Asesor</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas  fa-user-tie"></i></span>
              </div>
    
              <input type="text" class="form-control form-control-lg" id="AsesorEntrega" name="AsesorEntrega" placeholder="Asesor de Entrega" value="" 
                data-toggle="tooltip" data-placement="bottom" title="Asesor de Entrega" readonly>
            </div>
          </div>
          <div class  = "col-xs-12 col-sm-12 col-md-12">
            <label class="p-1">Local</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas  fa-store"></i></span>
              </div>
              <input type="text" class="form-control form-control-lg" id="LocalEntrega" name="LocalEntrega" placeholder="Local de Entrega" value="" 
                data-toggle="tooltip" data-placement="bottom" title="Local de Entrega" readonly>
            </div>
          </div>




          <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Fecha Estimada Entrega</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i> </span>
              </div>
   <input type="text" class="form-control form-control-lg" id="FechaEstimadaEntrega" name="FechaEstimadaEntrega" placeholder="Fecha de Entrega" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Fecha de entrega de la unidad" readonly>
            </div>
          </div>



 
          <div class  = "col-xs-12 col-sm-6 col-md-6">
            <label class="p-1">Fecha Real</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-donate"></i> </span>
              </div>

              <input type="text" class="form-control form-control-lg" id="FechaRealEntregas" name="FechaRealEntregas" placeholder="Fecha Real" value="" data-toggle="tooltip" data-placement="bottom" title="Fecha Real" readonly>
            </div>
          </div>
      

 

           <div class  = "col-xs-12 col-sm-6 col-md-12">
                              <label class="p-1">Estado</label>
            <div class = "input-group mb-3">
              <div class="input-group-prepend">
                    <button type="button" class="btn btn-secondary" id="iconoEstadoEntrega" style="cursor: default;"><i class="fas fa-info"></i></button>
              </div>
  
                                            <input type="text" class="form-control form-control-lg" id="EstadoEntrega" name="EstadoEntrega" placeholder="Estado de la Entrega de la Unidad" value="" 
                                     data-toggle="tooltip" data-placement="bottom" title="Estado de la Entrega de la Unidad" readonly>
            </div>
          </div>


 
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
            <hr>

        </div>
    </section>
  </div>
<?php date_default_timezone_set('America/Bogota'); 


/*
      $myfile = fopen("newfile.txt", "w")  ;
      fwrite($myfile,  $_SESSION["nombre"]);
      fwrite($myfile,  $_SESSION["id"]);
      fclose($myfile);
*/



?>

<script type="text/javascript">
  var usuario_id = "<?=  $_SESSION["id"]  ?>";
  var usuario_nombre = "<?=  $_SESSION["nombre"]  ?>";
</script>

<script src="vistas/dist/js/blockui.js?<?= date("smH") ?>">"></script>
<script src="vistas/js/busqueda.js?<?= date("smH") ?>"></script>
