
$(document).ready(function()
{
    $(".modal").css("z-index","1000");
    // $.blockUI({ message: "Por favor, espere..." });
    var datos = new FormData();    
    datos.append("listarNombreCliente", "yes");
    $.ajax({
        url: "ajax/busqueda.ajax.php",
        method : "POST",
        data: datos,
        cache: false,
        contentType : false,
        processData : false,
         
        success: function(response){
            var respuesta = JSON.parse(response);
            var html = "";
            html += "<option value=''>Seleccione</option>";
            respuesta.forEach(element => {
                html += "<option value='"+element.nombre_completo+"'>"+element.nombre_completo+"</option>";
            });
            $("#BuscarNombreCliente").empty();
            $("#BuscarNombreCliente").append(html);
        }
    });

    var datos = new FormData();    
    datos.append("listarNroDocumento", "yes");
    $.ajax({
        url: "ajax/busqueda.ajax.php",
        method : "POST",
        data: datos,
        cache: false,
        contentType : false,
        processData : false,
         
        success: function(response){
            var respuesta = JSON.parse(response);
            var html = "";
            html += "<option value=''>Seleccione</option>";
            respuesta.forEach(element => {
                html += "<option value='"+element.numero_documento+"'>"+element.numero_documento+"</option>";
            });
            $("#BuscarNroDocumento").empty();
            $("#BuscarNroDocumento").append(html);
        
        }
    });

    var datos = new FormData();    
    datos.append("listarVin", "yes");
    $.ajax({
        url: "ajax/busqueda.ajax.php",
        method : "POST",
        data: datos,
        cache: false,
        contentType : false,
        processData : false,
         
        success: function(response){
            var respuesta = JSON.parse(response);
            var html = "";
            html += "<option value=''>Seleccione</option>";
            respuesta.forEach(element => {
                html += "<option value='"+element.vin+"'>"+element.vin+"</option>";
            });
            $("#BuscarVin").empty();
            $("#BuscarVin").append(html);
        }
    });

    var datos = new FormData();    
    datos.append("listarPlacas", "yes");
    $.ajax({
        url: "ajax/busqueda.ajax.php",
        method : "POST",
        data: datos,
        cache: false,
        contentType : false,
        processData : false,
         
        success: function(response){
            var respuesta = JSON.parse(response);
            var html = "";
            html += "<option value=''>Seleccione</option>";
            respuesta.forEach(element => {
                html += "<option value='"+element.placa+"'>"+element.placa+"</option>";
            });
            $("#BuscarPlaca").empty();
            $("#BuscarPlaca").append(html);
        }
    });

    $(document).ajaxStop($.unblockUI); 
    $("#BuscarNombreCliente").off("change").on("change", function(e)
    {
        $.blockUI({ message: "Buscando el Nombre del Cliente..." });
        e.preventDefault();// Evita eventos anteriores
        var BuscarNombreCliente = $("#BuscarNombreCliente").val();
        var datos = new FormData();

        datos.append("BuscarNombreClienteTrackingAutomotriz", "yes");
        datos.append("BuscarNombreCliente", BuscarNombreCliente);
        datos.append("usuario_id", usuario_id);
        datos.append("usuario_nombre", usuario_nombre);

        $.ajax({
            url: "ajax/busqueda.ajax.php",
            method : "POST",
            data: datos,
            cache: false,
            contentType : false,
            processData : false,             
            success: function(response){
                var respuesta = JSON.parse(response);   
                SetValores(respuesta) 
                $(document).ajaxStop($.unblockUI); 
            }
        });
    });
    
    $("#BuscarNroDocumento").off("change").on("change", function(e)
    {
        $.blockUI({ message: "Buscando el Número de Documento..." });
        e.preventDefault(); // Evita eventos anteriores
        var BuscarNroDocumento = $("#BuscarNroDocumento").val();
        var datos = new FormData();
        
        datos.append("BuscarNroDocumentoTrackingAutomotriz", "yes");
        datos.append("BuscarNroDocumento", BuscarNroDocumento);
        datos.append("usuario_id", usuario_id);
        datos.append("usuario_nombre", usuario_nombre);

        $.ajax({
            url: "ajax/busqueda.ajax.php",
            method : "POST",
            data: datos,
            cache: false,
            contentType : false,
            processData : false,             
            success: function(response){
                var respuesta = JSON.parse(response);
                SetValores(respuesta) 
                $(document).ajaxStop($.unblockUI); 
            }
        });
    });

    $("#BuscarVin").off("change").on("change", function(e)
    {
        $.blockUI({ message: "Buscando el VIN..." });
        e.preventDefault();// Evita eventos anteriores
        var BuscarVin = $("#BuscarVin").val();    
        var datos = new FormData();
        
        datos.append("BuscarVinTrackingAutomotriz", "yes");
        datos.append("BuscarVin", BuscarVin);
        datos.append("usuario_id", usuario_id);
        datos.append("usuario_nombre", usuario_nombre);

    
        $.ajax({
            url: "ajax/busqueda.ajax.php",
            method : "POST",
            data: datos,
            cache: false,
            contentType : false,
            processData : false,
            success: function(response){
                var respuesta = JSON.parse(response);
                SetValores(respuesta) 
                $(document).ajaxStop($.unblockUI); 
            }
        });
    });

    $("#BuscarPlaca").off("change").on("change", function(e)
    {
        $.blockUI({ message: "Buscando la Placa..." });
        e.preventDefault();// Evita eventos anteriores
        var BuscarPlaca = $("#BuscarPlaca").val();    
        var datos = new FormData();
        
        datos.append("BuscarPlacaTrackingAutomotriz", "yes");
        datos.append("BuscarPlaca", BuscarPlaca);
        datos.append("usuario_id", usuario_id);
        datos.append("usuario_nombre", usuario_nombre);
 
    
        $.ajax({
            url: "ajax/busqueda.ajax.php",
            method : "POST",
            data: datos,
            cache: false,
            contentType : false,
            processData : false,
            success: function(response){
                var respuesta = JSON.parse(response);
                SetValores(respuesta) 
                $(document).ajaxStop($.unblockUI); 
            }
        });
    });
    function SetValores( cliente )
    {
       
        $("#BuscarNombreCliente").val("").val( cliente.nombre_completo).trigger("change.select2");
        $("#BuscarNroDocumento").val("").val(cliente.numero_documento).trigger("change.select2");
        $("#BuscarVin").val("").val(cliente.vin).trigger("change.select2");
        $("#BuscarPlaca").val("").val(cliente.placa).trigger("change.select2");

        
        $("#Marca").val("").val( cliente.marca);
        $("#FechaCancelacion").val("").val( cliente.fecha_cancelacion);

        $("#EstadoVenta").removeClass("is-valid").removeClass("is-invalid");
        $("#iconoEstadoVenta").removeClass("btn-succes").removeClass("btn-danger");
        if( cliente.fecha_cancelacion )
        {
            $("#EstadoVenta").addClass("is-valid");
            $("#EstadoVenta").css("color", "green");
                   $("#EstadoVenta").val("").val( "Ciclo de Venta Finalizada");

            $("#iconoEstadoVenta").addClass( "btn-success" );
        }else{
            $("#EstadoVenta").addClass("is-invalid");
            $("#EstadoVenta").css("color", "red");
            $("#EstadoVenta").val("").val( "Pendiente de Fecha Cancelación");
            $("#iconoEstadoVenta").addClass( "btn-danger" );
        }
        
        $("#Datos_Vendedor").val("").val(cliente.vendedor);
        $("#Datos_Tienda").val("").val(cliente.tienda);
        $("#VinVentaUnidad").val("").val(cliente.vin);

        $("#Modelo").val("").val(cliente.modelo);
        $("#FechaVenta").val("").val( cliente.fecha_facturacion);
        $("#FechaCancelacionVenta").val("").val( cliente.fecha_cancelacion);
        $("#NombreCompleto").val("").val(cliente.nombre_completo);
        $("#NroDocumento").val("").val(cliente.numero_documento);
        $("#Telefono").val("").val(cliente.telefono_celular);
        $("#Email").val("").val(cliente.email);
        $("#VersionUnidad").val("").val(cliente.version);
        $("#TipoFinanciamiento").val("").val(cliente.tipo_financiamiento);
        $("#FechaEstimadaVenta").val("2");
        

        $("#FechaRealVenta").val("").val(String(cliente.dif_dias_venta).replace(".0", "").replace("null", ""));



 $("#AccesoriosVenta").val("").val(cliente.accesorios);
$("#PlacaRetomaVenta").val("").val(cliente.placa_retoma);

if (cliente.placa_retoma != null) {
    $("#RetomaVenta").val("Aplica");
}else{

    $("#RetomaVenta").val("No Aplica");
}


        /* Trámite de Placas*/
        $("#NumeroPlaca").val("").val(cliente.placa);
$("#CodigoVerificacion").val("").val(cliente.codigo_verificacion);

        $("#FechaIngreso").val("").val(cliente.fecha_recojo);
        $("#FechaRecepcion").val("").val(cliente.fecha_recepcion);
        $("#DetalleObservado").val("").val(cliente.detalle_observado_sunarp);
        $("#FechaInsSunarp").val("").val(cliente.fecha_inscripcion_sunarp);
        $("#FechaEntregaPlacas").val("").val(cliente.fecha_entrega_placas);
        $("#CalificacionSunarp").val("").val(cliente.fecha_calificacion_sunarp);
        $("#FechaEstimadaPlacas").val("").val(cliente.fecha_promedio_placas);
        $("#FechaRealPlaca").val("").val(String(cliente.dif_dias_placas).replace(".0", "").replace("null", ""));
        $("#Estado").removeClass("is-valid").removeClass("is-invalid");
        $("#Estado").css("pointer-events", "none");
        $("#iconoEstado").removeClass("btn-success").removeClass("btn-danger");

        if( !cliente.fecha_entrega_placas &&  !cliente.fecha_recojo )
        {
            $("#Estado").addClass("is-invalid");
            $("#Estado").css("color", "red");
            $("#iconoEstado").addClass( "btn-danger" );
            $("#Estado").val("").val( "Tramite de Placa Pendiente");
        }
        if( !cliente.fecha_entrega_placas &&  cliente.fecha_recojo )
        {
            $("#Estado").addClass("is-invalid");
            $("#Estado").css("color", "red");
            $("#iconoEstado").addClass( "btn-danger" );
            $("#Estado").val("").val( "Tramite de Placa en Proceso");
        }
        if( cliente.fecha_entrega_placas && cliente.fecha_recojo  )
        {
            $("#Estado").addClass("is-valid");
            $("#Estado").css("color", "green");
            $("#iconoEstado").addClass( "btn-success" );
            $("#Estado").val("").val("Ciclo de Tramite de Placa Finalizado");
        }
       
        /* Información sobre PDI */

        $("#FechaIngresoPdi").val("").val(cliente.fecha_documento_pdi);
        $("#pdiEmplazamiento").val("").val(cliente.emplazamiento);
        $("#pdiFechaProyectada").val("").val(cliente.fecha_proyectada);
        $("#pdiEstadoCliente").val("").val(cliente.estado_cliente);
        $("#FechaSalidaPdi").val("").val(cliente.fecha_cierre_pdi);
        $("#FechaEstimadaPdi").val("").val(cliente.fecha_promedio_pdi);
        $("#FechaRealPdi").val("").val(String(cliente.dif_dias_pdi).replace(".0", "").replace("null", ""));
        $("#EstadoPdi").val("").val(cliente.estado_pdi);

        $("#EstadoPdi").removeClass("is-valid").removeClass("is-invalid");
        $("#EstadoPdi").css("pointer-events", "none");
        $("#iconoEstadoPdi").removeClass("btn-success").removeClass("btn-danger");
        if( cliente.fecha_documento_pdi && cliente.fecha_cierre_pdi )
        {
            $("#EstadoPdi").addClass("is-valid");
            $("#EstadoPdi").css("color", "green");
            $("#iconoEstadoPdi").addClass( "btn-success" );
            $("#EstadoPdi").val("").val( "Ciclo PDI Finalizado.");
        }
        if( cliente.fecha_documento_pdi && !cliente.fecha_cierre_pdi )
        {
            $("#EstadoPdi").addClass("is-invalid");
            $("#EstadoPdi").css("color", "red");
            $("#iconoEstadoPdi").addClass( "btn-danger" );
            $("#EstadoPdi").val("").val( "Ciclo PDI en Proceso");
        }
        if( !cliente.fecha_documento_pdi && !cliente.fecha_cierre_pdi )
        {
            $("#EstadoPdi").addClass("is-invalid");
            $("#EstadoPdi").css("color", "red");
            $("#iconoEstadoPdi").addClass( "btn-danger" );
            $("#EstadoPdi").val("").val( "Ciclo PDI Pendiente");
        }
        /* Información sobre la entrega de la Unidad */


        $("#FechaEntrega").val("").val(cliente.entregaFecha);
        $("#FechaEstimadaEntrega").val("").val(cliente.fecha_estimada_entrega);        
        $("#AsesorEntrega").val("").val(cliente.nombre_asesor);        
        $("#LocalEntrega").val("").val(cliente.nombre_local);        
        $("#FechaTramiteConcluido").val("").val(cliente.fecha_tramite_concluido);
        $("#FechaRealEntregas").val("").val(String(cliente.dif_dias_entregas).replace(".0", "").replace("null", ""));


        $("#EstadoEntrega").removeClass("is-valid").removeClass("is-invalid");
        $("#EstadoEntrega").css("pointer-events", "none");
        $("#iconoEstadoEntrega").removeClass("btn-success").removeClass("btn-danger");
        if( !cliente.entregaFecha && !cliente.fecha_estimada_entrega )
        {
            $("#EstadoEntrega").addClass("is-invalid");
            $("#EstadoEntrega").css("color", "red");
            $("#iconoEstadoEntrega").addClass( "btn-danger" );
            $("#EstadoEntrega").val("").val(" Pendiente de Entrega de Unidad");
        }
        if( !cliente.entregaFecha && cliente.fecha_estimada_entrega )
        {
            $("#EstadoEntrega").addClass("is-invalid");
            $("#EstadoEntrega").css("color", "red");
            $("#iconoEstadoEntrega").addClass( "btn-danger" );
            $("#EstadoEntrega").val("").val("Pendiente de Entrega de Unidad");
        }
        if( cliente.entregaFecha && !cliente.fecha_estimada_entrega )
        {
            $("#EstadoEntrega").addClass("is-valid");
            $("#EstadoEntrega").css("color", "green");
            $("#iconoEstadoEntrega").addClass( "btn-success" );
            $("#EstadoEntrega").val("").val("Ciclo de Entrega Finalizado");
        }
        if( cliente.entregaFecha && cliente.fecha_estimada_entrega )
        {
            $("#EstadoEntrega").addClass("is-valid");
            $("#EstadoEntrega").css("color", "green");
            $("#iconoEstadoEntrega").addClass( "btn-success" );
            $("#EstadoEntrega").val("").val("Ciclo de Entrega Finalizado");
        }

        /* Gas */
        $("#FechaDocumentoGas").val("").val(cliente.fecha_documento_gas);
        $("#TipoGas").val("").val(cliente.tipo_gas);
        $("#FechaCierreGas").val("").val(cliente.fecha_cierre_gas);

 $("#solicitud_ingreso_gas").val("").val(cliente.solicitud_ingreso_gas);
  $("#fecha_documento_gas").val("").val(cliente.fecha_documento_gas);

 $("#instalacion_gas").val("").val(cliente.instalacion_gas);
  $("#solicitud_recojo_gas").val("").val(cliente.solicitud_recojo_gas);

        $("#FechaEstimadaGas").val("").val(cliente.fecha_promedio_gas);
        $("#FechaRealGas").val("").val(String(cliente.dif_dias_gas).replace(".0", "").replace("null", ""));
        $("#EstadoGas").removeClass("is-valid").removeClass("is-invalid");

        $("#EstadoGas").css("pointer-events", "none");
        $("#iconoEstadoGas").removeClass("btn-success").removeClass("btn-danger");
        if( cliente.fecha_documento_gas && !cliente.fecha_cierre_gas )
        {
            $("#EstadoGas").addClass("is-invalid");
            $("#EstadoGas").css("color", "red");
            $("#iconoEstadoGas").addClass( "btn-danger" );
            $("#EstadoGas").val("").val("Ciclo Gas en Proceso.");
        }
        if( !cliente.fecha_documento_gas && cliente.fecha_cierre_gas )
        {
            $("#EstadoGas").addClass("is-valid");
            $("#EstadoGas").css("color", "green");
            $("#iconoEstadoGas").addClass( "btn-success" );
            $("#EstadoGas").val("").val("Ciclo Gas Finalizado.");
        }
        if( cliente.fecha_documento_gas && cliente.fecha_cierre_gas )
        {
            $("#EstadoGas").addClass("is-valid");
            $("#EstadoGas").css("color", "green");
            $("#iconoEstadoGas").addClass( "btn-success" );
            $("#EstadoGas").val("").val("Ciclo Gas Finalizado.");
        }
        if( !cliente.fecha_documento_gas && !cliente.fecha_cierre_gas )
        {
            $("#EstadoGas").addClass("is-valid");
            $("#EstadoGas").css("color", "green");
            $("#iconoEstadoGas").addClass( "btn-success" );
            $("#EstadoGas").val("").val("No Aplica en esta Unidad");
        }

    }
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });
