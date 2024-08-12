$(document).on("change", "#fecha_nacimiento", function () {
  let fecha_nacimiento = $(this).val();
  datos = { fecha_nacimiento: fecha_nacimiento, calcula_edad: "calcula_edad" };
  $.ajax({
    method: "POST",
    url: "ajax/inscripciones.ajax.php",
    data: datos,
    success: function (resultados) {
      if (resultados) {
        $("#edad").val(resultados);
        var edad = $("#edad").val();
        if (edad < 16) {
          $("#edad").removeClass("success");
          $("#edad").addClass("error");
        } else {
          $("#edad").addClass("success");
        }
        $("#correo").focus();
      }
    },
  });
});

function ValidaEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
function validar() {
  if ($("#dni").val().length < 8) {
    $("#nombres").val("");
    $("#dni").removeClass("success");
    $("#dni").addClass("error");
    $("#formInscripcion  button").prop("disabled", true);
    return;
  } else {
    $("#dni").addClass("success");
  }
  if ($("#nombres").val().length < 4) {
    $("#nombres").removeClass("success");
    $("#nombres").addClass("error");
    $("#formInscripcion  button").prop("disabled", true);
    return;
  } else {
    $("#nombres").addClass("success");
  }
  if ($("#apellido_paterno").val().length < 3) {
    $("#apellido_paterno").removeClass("success");
    $("#apellido_paterno").addClass("error");
    $("#formInscripcion  button").prop("disabled", true);
    return;
  } else {
    $("#apellido_paterno").addClass("success");
  }
  if ($("#apellido_materno").val().length < 3) {
    $("#apellido_materno").removeClass("success");
    $("#apellido_materno").addClass("error");
    $("#formInscripcion  button").prop("disabled", true);
    return;
  } else {
    $("#apellido_materno").addClass("success");
  }
  if ($("#fecha_nacimiento").val().length < 4) {
    $("#fecha_nacimiento").removeClass("success");
    $("#fecha_nacimiento").addClass("error");
    $("#formInscripcion  button").prop("disabled", true);
    return;
  } else {
    $("#fecha_nacimiento").addClass("success");
    $("#edad").addClass("success");
  }
  if ($("#edad").val() < 16) {
    $("#edad").removeClass("success");
    $("#edad").addClass("error");
    $("#formInscripcion  button").prop("disabled", true);
    return;
  } else {
    $("#edad").removeClass("error");
    $("#edad").addClass("success");
  }
  if (
    $("#correo").val().length < 4 ||
    ValidaEmail($("#correo").val()) == false ||
    $("#correo").val() == ""
  ) {
    $("#correo").removeClass("success");
    $("#correo").addClass("error");
    $("#formInscripcion  button").prop("disabled", true);
    return false;
  } else {
    $("#correo").addClass("success");
  }

  if ($("#telefono").val().length < 9) {
    $("#telefono").removeClass("success");
    $("#telefono").addClass("error");
    $("#formInscripcion  button").prop("disabled", true);
    return;
  } else {
    $("#telefono").addClass("success");
  }
  if ($("#direccion").val().length < 5) {
    $("#direccion").removeClass("success");
    $("#direccion").addClass("error");
    $("#formInscripcion  button").prop("disabled", true);
    return;
  } else {
    $("#direccion").addClass("success");
  }
  if ($("#carrera").val().length < 7) {
    $("#carrera").removeClass("success");
    $("#carrera").addClass("error");
    $("#formInscripcion  button").prop("disabled", true);
    return;
  } else {
    $("#carrera").addClass("success");
  }
  if ($("#turno").val().length < 3) {
    $("#turno").removeClass("success");
    $("#turno").addClass("error");
    $("#formInscripcion  button").prop("disabled", true);
    return;
  } else {
    $("#turno").addClass("success");
  }

  $("#formInscripcion  button").prop("disabled", false);
}
$(
  "#dni, #nombres, #apellido_paterno, #apellido_materno, #fecha_nacimiento, #edad, #correo, #telefono, #direccion, #carrera, #turno"
).on("keyup", function () {
  validar();
});
$(
  "#dni, #nombres, #apellido_paterno, #apellido_materno, #fecha_nacimiento, #edad, #correo, #telefono, #direccion, #carrera, #turno"
).on("change", function () {
  validar();
});

$("#formInscripcion").on("click", "button", function () {
  var datos = $("#formInscripcion").serialize();
  validar();
  Swal.fire({
    title: "¿Desea enviar sus datos para su inscripción?",
    text: "¡Verifica todo antes de confirmar!",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, enviar!",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        method: "POST",
        url: "ajax/inscripciones.ajax.php",
        data: datos,
        beforeSend: function () {
          $(".reload-all")
            .fadeIn(50)
            .html("<img src='vistas/img/reload8.svg' width='60px'> ");
        },
        success: function (resultados) {
          $(".reload-all").hide();

          Swal.fire({
            title: "ok",
            text: "¡Gracias!",
            icon: "success",
            html: '<div id="successCO"></div>',
            showCancelButton: true,
            showConfirmButton: false,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Cerrar",
          });
          $("#successCO").html(resultados);
        },
      });
    }
  });
});
//   REENVIAR AL CORREO===========================
function enviarEmail() {
  let idCo = $("#idCo").val();
  console.log(idCo);
  let sendemail = $("#correo").val();
  console.log(sendemail);

  let datos = { idCo: idCo, sendemail: sendemail };

  $.ajax({
    method: "POST",
    url: "vistas/print/send.php",
    data: datos,
    beforeSend: function () {
      //  $(".correo-enviar").fadeIn(50).html("<img src='vistas/img/reload8.svg' width='60px'> ");
    },
    success: function (enviar) {
      if (enviar == "ok") {
        console.log(enviar);
        // $(".correo-enviar").html('<spam style="font-size:1.4em;">Se te envió un correo a: '+sendemail+' con sus datos de inscripción y un adjunto con toda la información de la carrera en  formato pdf</spam>');
        // $(".correo-success").html('<spam style="font-size:1.5em; color: #07cc4c;">Correo enviado</spam>');
      } else {
        $(".correo-enviar").html(enviar);
      }
    },
  });
}
$(document).on("click", ".btn-enviar", function (e) {
  var idCo = $(this).attr("idInscrito");
  console.log(idCo);
  let sendemail = $(this).attr("sendemail");
  console.log(sendemail);

  let datos = { idCo: idCo, sendemail: sendemail };

  $.ajax({
    method: "POST",
    url: "vistas/print/send.new.php",
    data: datos,
    beforeSend: function () {
      $(".tabla-inscritos #btnenviar" + idCo)
        .html("")
        .html("<img src='vistas/img/reload8.svg' width='20px'> ");
    },
    success: function (enviar) {
      if (enviar == "ok") {
        console.log(enviar);
        $(".tabla-inscritos #btnenviar" + idCo).html("Enviado");
        // $(".correo-enviar").html('<spam style="font-size:1.4em;">Se te envió un correo a: '+sendemail+' con sus datos de inscripción y un adjunto con toda la información de la carrera en  formato pdf</spam>');
        // $(".correo-success").html('<spam style="font-size:1.5em; color: #07cc4c;">Correo enviado</spam>');
      } else {
        $(".correo-enviar").html(enviar);
      }
    },
  });
});

$(document).on("keyup", "#dni", function () {
  var dni = $(this).val();

  //this.value = (this.value + '').replace(/[^0-9]/g, '');
  if (!$.isNumeric(dni)) {
    //dni = dni.substr(0,(dni.length -1));

    dni = dni.replace(/[^0-9]/g, "");
    $("#dni").val(dni);
  }
});
$(document).on("click", "#formInscripcion", function (e) {
  e.preventDefault();
});
