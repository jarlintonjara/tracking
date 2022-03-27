$(document).ready(function(){
    $('#btnsave').click(function(){
        var datos=$('#formpostventa').serialize();
        console.log(datos);
        $.ajax({
            method:"POST",
            url:"ajax/tracking_automotriz.ajax.php",
            data:datos,
            success: function (response) {
                // console.log(response);
                if(response){
                    swal({
                        type: "success",
                        title: "¡Se guardado correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"

                    })  
                }else{
                    swal({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algo salió mal!',
                        footer: '<a href="">¿Por qué tengo este problema?</a>'
                    })
                }
                
            }
        });

        return false;
    });

    var datos = new FormData();    
    datos.append("listarPlaca", "yes");
    $.ajax({
        url: "ajax/tracking_automotriz.ajax.php",
        method : "POST",
        data: datos,
        cache: false,
        contentType : false,
        processData : false,
         
        success: function(response){
            var respuesta = JSON.parse(response);
            console.log(respuesta);
            var html = "";
            html += "<option value=''>Seleccione</option>";
            respuesta.forEach(element => {
                html += "<option value='"+element.placa+"'>"+element.placa+"</option>";
            });
            $("#placa").empty();
            $("#placa").append(html);
        }
    });

    var datos = new FormData();    
    datos.append("listarvintracking", "yes");
    $.ajax({
        url: "ajax/tracking_automotriz.ajax.php",
        method : "POST",
        data: datos,
        cache: false,
        contentType : false,
        processData : false,
         
        success: function(response){
            var respuesta = JSON.parse(response);
            console.log(respuesta);
            var html = "";
            html += "<option value=''>Seleccione</option>";
            respuesta.forEach(element => {
                html += "<option value='"+element.vin+"'>"+element.vin+"</option>";
            });
            $("#vintracking").empty();
            $("#vintracking").append(html);
        }
    });

    var datos = new FormData();    
    datos.append("listardocumentotracking", "yes");
    $.ajax({
        url: "ajax/tracking_automotriz.ajax.php",
        method : "POST",
        data: datos,
        cache: false,
        contentType : false,
        processData : false,
         
        success: function(response){
            var respuesta = JSON.parse(response);
            console.log(respuesta);
            var html = "";
            html += "<option value=''>Seleccione</option>";
            respuesta.forEach(element => {
                html += "<option value='"+element.numero_documento+"'>"+element.numero_documento+"</option>";
            });
            $("#documentotracking").empty();
            $("#documentotracking").append(html);
        }
    });

    $("#documentotracking").off("change").on("change", function(e)
    {
        // $.blockUI({ message: "Buscando el Número de Documento..." });
        e.preventDefault(); // Evita eventos anteriores
        var documentotracking = $("#documentotracking").val();
        var datos = new FormData();
        
        datos.append("documentotrackingautomotriz", "yes");
        datos.append("documentotracking", documentotracking);

        $.ajax({
            url: "ajax/tracking_automotriz.ajax.php",
            method : "POST",
            data: datos,
            cache: false,
            contentType : false,
            processData : false,             
            success: function(response){
                var respuesta = JSON.parse(response);
                console.log(respuesta);
                SetValores(respuesta) 
                $(document).ajaxStop($.unblockUI); 
            }
        });
    });

    $("#placa").off("change").on("change", function(e)
    {
        // $.blockUI({ message: "Buscando el Número de Documento..." });
        e.preventDefault(); // Evita eventos anteriores
        var placa = $("#placa").val();
        var datos = new FormData();
        
        datos.append("placaautomotriz", "yes");
        datos.append("placa", placa);

        $.ajax({
            url: "ajax/tracking_automotriz.ajax.php",
            method : "POST",
            data: datos,
            cache: false,
            contentType : false,
            processData : false,             
            success: function(response){
                var respuesta = JSON.parse(response);
                console.log(respuesta);
                SetValores(respuesta) 
                $(document).ajaxStop($.unblockUI); 
            }
        });
    });

    $("#vintracking").off("change").on("change", function(e)
    {
        // $.blockUI({ message: "Buscando el Número de Documento..." });
        e.preventDefault(); // Evita eventos anteriores
        var vintracking = $("#vintracking").val();
        var datos = new FormData();
        
        datos.append("vintrackingautomotriz", "yes");
        datos.append("vintracking", vintracking);

        $.ajax({
            url: "ajax/tracking_automotriz.ajax.php",
            method : "POST",
            data: datos,
            cache: false,
            contentType : false,
            processData : false,             
            success: function(response){
                var respuesta = JSON.parse(response);
                console.log(respuesta);
                SetValores(respuesta) 
                $(document).ajaxStop($.unblockUI); 
            }
        });
    });



    function SetValores( cliente )
    {
        $("#placa").val("").val( cliente.placa).trigger("change.select2");
        $("#vintracking").val("").val( cliente.vin).trigger("change.select2");
        $("#documentotracking").val("").val( cliente.numero_documento).trigger("change.select2");
        $("#Marca").val("").val( cliente.marca);
        $("#Telefono").val("").val( cliente.celular);
        $("#Email").val("").val( cliente.email);
        $("#NombreCompleto").val("").val( cliente.nombre_completo);
        $("#Modelo").val("").val( cliente.modelo);
        $("#kilometraje").val("").val( cliente.kilometraje);
        // $("#RetomaVenta").val("").val( cliente.retoma);
        $("#obs").val("").val( cliente.observaciones);
        $('#nps_venta').html("Venta  "+ Math.round(cliente.nps_venta) + "/10");
        $('#verbatim_nps_venta').html(cliente.verbatim_nps_venta);
        $('#nps_postventa').html("Postventa  "+ Math.round(cliente.nps_postventa) + "/10");
        $('#verbatim_nps_postventa').html(cliente.verbatim_nps_postventa);
        $('#fecha_agenda1').html(cliente.fecha_agenda1);
        $('#servicio_agenda').html("<b>Servicio : </b>"+ cliente.servicio_agenda);
        $('#comentario_agenda').html("<b>Comentario : </b>"+ cliente.comentario_agenda);
        $('#fecha_agenda2').html(cliente.fecha_agenda2);
        $('#servicio_agenda2').html("<b>Servicio : </b>"+ cliente.servicio_agenda2);
        $('#comentario_agenda2').html("<b>Comentario : </b>"+ cliente.comentario_agenda2);
        $('#centro').html(cliente.centro);
        $('#fecha_cierre').html(cliente.fecha_cierre);
        $('#servicio').html(cliente.servicio);
        $('#centro2').html(cliente.centro2);
        $('#fecha_cierre2').html(cliente.fecha_cierre2);
        $('#servicio2').html(cliente.servicio2);    
        $('#centro3').html(cliente.centro3);
        $('#fecha_cierre3').html(cliente.fecha_cierre3);
        $('#servicio3').html(cliente.servicio3);
        $('#reclamo_fecha').html("<b>Fecha : </b>" + cliente.reclamo_fecha);
        $('#subcategoria_reclamo').html("<b>Subcategoría : </b>" + cliente.subcategoria_reclamo);
        $('#propietario_reclamo').html("<b>Propietario : </b>" + cliente.propietario_reclamo);
        $('#reclamo2_fecha').html("<b>Fecha : </b>" + cliente.reclamo2_fecha);
        $('#subcategoria_reclamo2').html("<b>Subcategoría : </b>" + cliente.subcategoria_reclamo2);
        $('#propietario_reclamo2').html("<b>Propietario : </b>" + cliente.propietario_reclamo2);
        // $('#textoperfilamiento').html(cliente.perfilamiento);
        $("#progressventa").css("width", Math.round(cliente.nps_venta*10)+"%");
        $("#progresspostventa").css("width", Math.round(cliente.nps_postventa*10)+"%");
        $('#estadoreclamo').html("<b>Estado : </b>"+ cliente.estado_reclamo);
        $('#estadoreclamo2').html("<b>Estado : </b>"+ cliente.estado_reclamo2);
        $('#textoperfilamiento').tooltip('hide').attr('data-original-title', cliente.perfilamiento);
        

        switch (true) {
            case Math.round(cliente.nps_venta)>8:
                $("#progressventa").css("background-color", "#78d1cf");
                break;
            case Math.round(cliente.nps_venta)>6 && Math.round(cliente.nps_venta)<9:
                $("#progressventa").css("background-color", "#ffdf7c");
                break;
            case Math.round(cliente.nps_venta)<7:
                $("#progressventa").css("background-color", "#e67a77");
                break;       
            default:
                $("#progressventa").css("background-color", "black");
        }
        switch (true) {
            case Math.round(cliente.nps_postventa)>8:
                $("#progresspostventa").css("background-color", "#78d1cf");
                break;
            case Math.round(cliente.nps_postventa)>6 && Math.round(cliente.nps_postventa)<9:
                $("#progresspostventa").css("background-color", "#ffdf7c");
                break;
            case Math.round(cliente.nps_postventa)<7:
                $("#progresspostventa").css("background-color", "#e67a77");
                break;       
            default:
                $("#progresspostventa").css("background-color", "black");
        }
        switch((cliente.perfilamiento).trim().toLowerCase()) {
            case 'nuevo adulto':
                $("#divperfilamiento").css("color", "#FFC000");
                $("#lineaperfilamiento").css("background-color", "#FFC000");
                break;
            case 'joven pituco':
                $("#divperfilamiento").css("color", "#ED7D31");
                $("#lineaperfilamiento").css("background-color", "#ED7D31");
                break;
            case 'familion':
                $("#divperfilamiento").css("color", "#00B050");
                $("#lineaperfilamiento").css("background-color", "#00B050");
                break;
            case 'emprendedor':
                $("#divperfilamiento").css("color", "red");
                $("#lineaperfilamiento").css("background-color", "red");
                break;   
            case 'aspiracional':
                $("#divperfilamiento").css("color", "#0070C0");
                $("#lineaperfilamiento").css("background-color", "#0070C0");
                break;
            case 'padre de familia':
                $("#divperfilamiento").css("color", "#7030A0");
                $("#lineaperfilamiento").css("background-color", "#7030A0");
                break;  
            case 'soñador':
                $("#divperfilamiento").css("color", "#00B0F0");
                $("#lineaperfilamiento").css("background-color", "#00B0F0");
                break;
            case 'esforzado':
                $("#divperfilamiento").css("color", "#00B0F0");
                $("#lineaperfilamiento").css("background-color", "#00B0F0");
                break;        
            default:
                $("#divperfilamiento").css("color", "black");
                $("#lineaperfilamiento").css("background-color", "black");
            }
            
            switch((cliente.recall).trim().toLowerCase()) {
                case "aplica":
                    $("#boxrecall").removeClass("alert-secondary");
                    $("#iconrecall").removeClass("fa-check-double");
                    $("#boxrecall").addClass("alert-danger");
                    $("#iconrecall").addClass("fa-exclamation-triangle");
                    $("#iconrecall").html("  Recall activo!");
                    break;
                case "no aplica":
                    $("#boxrecall").removeClass("alert-danger");
                    $("#iconrecall").removeClass("fa-exclamation-triangle");
                    $("#boxrecall").addClass("alert-secondary");
                    $("#iconrecall").addClass("fa-check-double");
                    $("#iconrecall").html("  No se encuentra en campaña activa");
                    break;      
                default:
                    $("#boxrecall").addClass("alert-secondary");
            }

            switch((cliente.retoma).trim().toLowerCase()) {
                case "aplica":
                    $("#RetomaVenta").val("").val("Ofrecer retoma y cambio de vehículo");
                    break;
                case "no aplica":
                    $("#RetomaVenta").val("").val("Cliente aún no aplica a opción de retoma");
                    break;
                default:
                    $("#RetomaVenta").val("").val("");
            }
            switch((cliente.estado_reclamo).trim().toLowerCase()) {
                case "nuevo":
                    $("#estadoreclamo").css("color", "red");
                    break;
                case "propuesta enviada":
                    $("#estadoreclamo").css("color", "#00B050");
                    break;  
                case "cerrado":
                    $("#estadoreclamo").css("color", "#00B050");
                    break; 
                case "propuesta aceptada":
                    $("#estadoreclamo").css("color", "#FFC000");
                    break;   
                case "en proceso":
                    $("#estadoreclamo").css("color", "#FFC000");
                    break;         
            }
            switch((cliente.estado_reclamo2).trim().toLowerCase()) {
                case "nuevo":
                    $("#estadoreclamo2").css("color", "red");
                    break;
                case "propuesta enviada":
                    $("#estadoreclamo2").css("color", "#00B050");
                    break;  
                case "cerrado":
                    $("#estadoreclamo2").css("color", "#00B050");
                    break; 
                case "propuesta aceptada":
                    $("#estadoreclamo2").css("color", "#FFC000");
                    break;   
                case "en proceso":
                    $("#estadoreclamo2").css("color", "#FFC000");
                    break;         
            }
    }

    $('#btnlimpiar').click(function(){
        $('#NroDocumento').val('');
        $('#VinVentaUnidad').val('');
        $('#NumeroPlaca').val('');
    });

});