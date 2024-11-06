// BUSCAR RUC O DNI DE LA BASE DE DATOS SI NO SE ENCUENTRA PASA A BUSCAR EN LAS APIS

$(document).on("change", "#dni", function () {
  var dniCliente = $("#dni").val();
  var datos = { dniCliente: dniCliente };
  var datos2 = { validarDni: dniCliente };

  $.ajax({
    method: "POST",
    url: "ajax/inscripciones.ajax.php",
    data: datos2,
    dataType: "json",
    beforeSend: function () {
      $(".reload-all")
        .fadeIn(50)
        .html("<img src='vistas/img/reload8.svg' width='60px'> ");
    },
    success: function (respuesta) {
      console.log(respuesta);
      $(".reload-all").hide();
      //    console.log(respuesta);
      if (respuesta) {
        $("#dni").val("");
        $("#dni").removeClass("success");
        $("#dni").addClass("error");
        Swal.fire({
          position: "top-end",
          icon: "error",
          title: "El DNI ya está registrado",
          showConfirmButton: false,
          timer: 2500,
        });
      } else {
        ////(numDocumento)
        $.ajax({
          method: "POST",
          url: "ajax/inscripciones.ajax.php",
          data: datos,
          dataType: "json",

          beforeSend: function () {
            $(".reload-all")
              .fadeIn(50)
              .html("<img src='vistas/img/reload8.svg' width='60px'> ");
          },
          success: function (respuesta) {
            $(".reload-all").hide();
            if (respuesta != "error") {
              // $('#dni').val(respuesta['dni']);
              $("#nombres").val(respuesta["nombre"]);
              //$('#ubigeo').val(respuesta['ruc']);
              $("#apellido_paterno").val(respuesta["appaterno"]);
              $("#apellido_materno").val(respuesta["apmaterno"]);
              // $("#fecha_nacimiento").focus();
              $("#nombres").addClass("success");
              $("#apellido_paterno").addClass("success");
              $("#apellido_materno").addClass("success");
            } else {
              $("#nombres").removeClass("success");
              $("#apellido_paterno").removeClass("success");
              $("#apellido_materno").removeClass("success");
              $("#nombres").addClass("error");
              $("#apellido_paterno").addClass("error");
              $("#apellido_materno").addClass("error");
              $("#nombres, #apellido_paterno, #apellido_materno").prop(
                "readonly",
                false
              );
              $("#nombres").focus();
            }
          },
        });
      }
    },
  });
});
$(document).on('click', '.btnpush', function() {
  const newURL = "/apbmm/noti/docentes_de_nuestra_casa_de_estudios_promueven_la_educaciónyyyy";
history.pushState(null, "", newURL);
$.ajax({
  url: '../vistas/modulos/otro.php',
  
  method: 'GET', 
  beforeSend: function(){

         
  }, 
  success: function(data){
    $(".conte-p").html(data);    
          
  }
})
})