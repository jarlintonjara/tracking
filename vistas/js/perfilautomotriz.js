let dataAutomotriz = null;
let validateForm = false;
$(document).ready(function () {
    $("#saveForm").prop("disabled", true);
    $("#formDNI input").change(function (e) {
        $("#saveForm").prop("disabled", true);
        if ($(this).val().length >= 8) { 
            dataAutomotriz.DNI = $(this).val();
            $("#saveForm").prop("disabled", false);
        }
    })
    $("#saveForm").click(function (e) {
        $.ajax({
            url : "ajax/tracking_automotriz.ajax.php",
            method: "POST",
            data: {DATA_AUTOMOTRIZ: dataAutomotriz},
            //contentType: "application/json; charset=utf-8",
            //dataType: "json"," ,
            success: function (response) {
                swal({
                    type: "success",
                    title: "¡Se guardado correctamente!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"

                }).then(function (result) {
                    $("#formDNI").addClass("d-none");
                    $("#formDNI input").val("");
                    $("#profile .info-box").removeClass("border-red");
                    $("#first-options .options").addClass("d-none");
                    $("#second-options .options .options-two").addClass("d-none");
                    $("#option-title").addClass("d-none");
                    $("#option-title h3").text("");
                    $("#optSecond-title").addClass("d-none");
                    $("#optSecond-title h3").text("");
                });
            }
        });
        e.preventDefault();
    });
});
//Primera opcion
function fnProfile(index, description) {
    dataAutomotriz = {
        DNI: "",
        PERFIL: "",
        MOTIVO: "Ninguno",
        ASIENTOS: "Ninguno",
        PRIMER_CARRO: "Ninguno",
        SIGNIFICADO: "Ninguno",
        PRECIO: "Ninguno"
    };
    $("#formDNI").addClass("d-none");
    $("#first-options .options .info-box").removeClass("border-red");
    $("#second-options .options .options-two .info-box").removeClass("border-red");
    $("#profile .info-box").removeClass("border-red").eq(index).addClass("border-red");
    $("#first-options .options").addClass("d-none").eq(index).removeClass("d-none");
    $("#second-options .options .options-two").addClass("d-none");
    $("#option-title").addClass("d-none");
    $("#option-title h3").text("");
    $("#optSecond-title").addClass("d-none");
    $("#optSecond-title h3").text("");
    switch (index) { 
        case 0:
            $("#option-title").removeClass("d-none");
            $("#option-title h3").text("¿Cuantos asientos debe tener el vehículo?");
            break;
        case 1:
            dataAutomotriz.PERFIL = "Emprendedor";
            $("#formDNI").removeClass("d-none");
            break;
        case 2:
            $("#option-title").removeClass("d-none");
            $("#option-title h3").text("¿Primer carro del usuario?");
            break;
    }
    dataAutomotriz.MOTIVO = description;
}
//Segunda opcion
function fnFirstOption(indexPadre, index, description) {
    $("#formDNI").addClass("d-none");
    //$("#first-options .options [type='checkbox']").attr("checked", false);
    $("#second-options .options").addClass("d-none").eq(indexPadre).removeClass("d-none");
    $("#first-options .options .info-box").removeClass("border-red");
    $("#second-options .options .options-two .info-box").removeClass("border-red");
    $("#second-options .options .options-two").addClass("d-none").eq(index).removeClass("d-none");
    $("#optSecond-title h3").text("");
    switch (indexPadre) { 
        case 0:
            dataAutomotriz.ASIENTOS = description;
            if (index == 0) {
                dataAutomotriz.PERFIL = "Familion";
                $("#first-options .options .info-box").eq(0).addClass("border-red");
            } else { 
                dataAutomotriz.PERFIL = "Padre de familia";
                $("#first-options .options .info-box").eq(1).addClass("border-red");
            }
            $("#formDNI").removeClass("d-none");
            break;
        case 1: break;
        case 2:
            dataAutomotriz.PRIMER_CARRO = description;
            if (index == 0) {
                $("#optSecond-title").removeClass("d-none");
                $("#optSecond-title h3").text("El auto de tus sueños significa...");
                $("#first-options .options .info-box").eq(2).addClass("border-red");
            } else { 
                $("#optSecond-title").removeClass("d-none");
                $("#optSecond-title h3").text("En que intervalo de precios?");
                $("#first-options .options .info-box").eq(3).addClass("border-red");
            }
            break;
    }
}
//Tercera opcion
function fnSecondOption(indexPadre, indexOption, index, description) { 
    $("#formDNI").removeClass("d-none");
    $("#second-options .options .options-two .info-box").removeClass("border-red");
    $("#second-options .options").addClass("d-none").eq(indexPadre).removeClass("d-none");
    switch (indexPadre) { 
        case 0:  break;
        case 1: break;
        case 2:
            if (indexOption == 0) {
                dataAutomotriz.SIGNIFICADO = description; 
                if (index == 0) {
                    dataAutomotriz.PERFIL = "Nuevo Adulto";
                    $("#second-options .options .options-two .info-box").eq(0).addClass("border-red");
                } else { 
                    dataAutomotriz.PERFIL = "Aspiracional";
                    $("#second-options .options .options-two .info-box").eq(1).addClass("border-red");
                }
            } else { 
                dataAutomotriz.PRECIO = description;
                if (index == 0) {
                    dataAutomotriz.PERFIL = "Soñador";
                    $("#second-options .options .options-two .info-box").eq(2).addClass("border-red");
                } else { 
                    dataAutomotriz.PERFIL = "Joven Adinerado";
                    $("#second-options .options .options-two .info-box").eq(3).addClass("border-red");
                }
            }
            break;
    }
}