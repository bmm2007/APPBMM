function Noticias() {
  $(".reload-all").hide();

  $.ajax({
    url: "vistas/modulos/noticias.php",

    method: "POST",
    beforeSend: function () {
      $(".reload-all")
        .fadeIn(50)
        .html("<img src='vistas/img/reload8.svg' width='60px'> ");
    },
    success: function (data) {
      $(".contenedor-noticias-eventos").html(data).fadeIn(1000);
      $(".reload-all").hide();
    },
  });
}
function Eventos() {
  $(".reload-all").hide();

  $.ajax({
    url: "vistas/modulos/eventos.php",

    method: "POST",
    beforeSend: function () {
      $(".reload-all")
        .fadeIn(50)
        .html("<img src='vistas/img/reload8.svg' width='60px'> ");
    },
    success: function (data) {
      $(".contenedor-noticias-eventos").html(data).fadeIn(1000);
      $(".reload-all").hide();
    },
  });
}
$(".previsualizar-foto").hide();
Noticias();

$(document).on("change", ".noticias-eventos", function () {
  $("#tipoenvio").remove();
  if ($(this).is(":checked")) {
    var estadoUsuario = "noticias";
    // $(".contenedor-noticias-eventos").load("vistas/modulos/noticias.php");
    Noticias();
    $("#titulo")
      .parent()
      .before(
        `<input type="hidden" name="tipoenvio" id="tipoenvio" value="${estadoUsuario}">`
      );
    $("#tabla").val("noticias");
  } else {
    var estadoUsuario = "eventos";
    // $(".contenedor-noticias-eventos").load("vistas/modulos/eventos.php");
    Eventos();
    $("#titulo")
      .parent()
      .before(
        `<input type="hidden" name="tipoenvio" id="tipoenvio" value="${estadoUsuario}">`
      );
    $("#tabla").val("eventos");
  }
});

$(document).on("click", ".btn-modal-crear", function (e) {
  $("iframe").contents().find("body").html("");
  $("#editor1").html("");
  $(".previsualizar-foto").attr("src", "").hide();
});

$(document).on("click", "#btnGuardar", function (e) {
  e.preventDefault();

  let valores = $("iframe").contents().find("body").html();
  $("#editor1").html(valores);
  let datos = $("form#formNEcrear").serialize();
  let formd = new FormData($("form#formNEcrear")[0]);

  $.ajax({
    method: "POST",
    url: "ajax/crear.ajax.php",
    data: (datos, formd),
    cache: false,
    contentType: false,
    processData: false,
    beforeSend: function () {},
    success: function (result) {
      Swal.fire({
        title: "ok",
        text: "¡Gracias!",
        icon: "success",
        html: '<div id="success"></div>',
        showCancelButton: true,
        showConfirmButton: false,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: "Cerrar",
      });

      $("#success").html(result);
    },
  });
});
$(document).on("change", "#foto", function () {
  let imagen = this.files[0];
  console.log(imagen);
  if (imagen["type"] != "image/jpeg" && imagen["type"] != "image/png") {
    $(".nuevaFoto").val("");
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "La imagen debe ser jpeg o png!",
      //footer: '<a href>Why do I have this issue?</a>'
    });
  } else if (imagen["size"] > 4000000) {
    $(".nuevaFoto").val("");
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "La imagen no debe pesar más de 4mb!",
      //footer: '<a href>Why do I have this issue?</a>'
    });
  } else {
    let datosImagen = new FileReader();
    datosImagen.readAsDataURL(imagen);
    $(datosImagen).on("load", function (event) {
      let rutaImagen = event.target.result;
      $(".previsualizar-foto").hide();
      $(".previsualizar-foto").attr("src", rutaImagen);
      $(".previsualizar-foto").fadeIn(1000);
    });
  }
});

$(document).on("change", "#formEditar #efoto", function () {
  let imagen = this.files[0];
  console.log(imagen);
  if (imagen["type"] != "image/jpeg" && imagen["type"] != "image/png") {
    $(".nuevaFoto").val("");
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "La imagen debe ser jpeg o png!",
      //footer: '<a href>Why do I have this issue?</a>'
    });
  } else if (imagen["size"] > 4000000) {
    $(".nuevaFoto").val("");
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "La imagen no debe pesar más de 4mb!",
      //footer: '<a href>Why do I have this issue?</a>'
    });
  } else {
    let datosImagen = new FileReader();
    datosImagen.readAsDataURL(imagen);
    $(datosImagen).on("load", function (event) {
      let rutaImagen = event.target.result;
      $(".previsualizar-foto").hide();
      $(".previsualizar-foto").attr("src", rutaImagen);
      $(".previsualizar-foto").fadeIn(1000);
    });
  }
});

$(document).on("click", ".btn-editar-noticia", function (e) {
  e.preventDefault();
  let idEditar = $(this).attr("idEditar");
  let tabla = $("#tabla").val();
  datos = {
    idEditar: idEditar,
    tablaRegistro: tabla,
    traerRegistro: "traerRegistro",
  };
  $.ajax({
    method: "POST",
    url: "ajax/crear.ajax.php",
    data: datos,
    dataType: "json",
    success: function (respuesta) {
      console.log(respuesta);
      if (respuesta) {
        $("#id").val(respuesta["id"]);
        $("#etitulo").val(respuesta["titulo"]);
        $("#edescripcion").val(respuesta["descripcion"]);
        // $("#editor2").html(respuesta['texto']);
        $("#textone").html(respuesta["texto"]);
        $("iframe").contents().find("body").html(respuesta["texto"]);
        $(".previsualizar-foto").show();
        $(".previsualizar-foto").attr(
          "src",
          "vistas/img/" + tabla + "/" + respuesta["foto"]
        );
        $("#efotoActual").val(respuesta["foto"]);
      }
    },
  });
});

$(document).on("click", "#btnEditar", function (e) {
  e.preventDefault();
  let datos = $("form#formEditar").serialize();
  let formd = new FormData($("form#formEditar")[0]);

  $.ajax({
    method: "POST",
    url: "ajax/crear.ajax.php",
    data: (datos, formd),
    cache: false,
    contentType: false,
    processData: false,
    beforeSend: function () {},
    success: function (respuesta) {
      Swal.fire({
        title: "ok",
        text: "¡Gracias!",
        icon: "success",
        html: '<div id="success"></div>',
        showCancelButton: true,
        showConfirmButton: false,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: "Cerrar",
      });
      $("#success").html(respuesta);
    },
  });
});
$(document).on("click", ".btn-eliminar", function (e) {
  e.preventDefault();
  var idEliminar = $(this).attr("idEliminar");
  let tabla = $(this).attr("tabla");
  let datos = { idEliminar: idEliminar, tabla: tabla };
  Swal.fire({
    title: "¿Desea eliminar?",
    text: "¡Verifica todo antes de confirmar!",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, eliminar!",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        method: "POST",
        url: "ajax/crear.ajax.php",
        data: datos,
        beforeSend: function () {},
        success: function (respuesta) {
          console.log(respuesta);
          if (respuesta == "ok") {
            $("#delete" + idEliminar).fadeOut(500, function () {
              if (tabla == "noticias") {
                // $(".contenedor-noticias-eventos").load(
                //   "vistas/modulos/noticias.php"
                // );
                Noticias();
              }
              if (tabla == "eventos") {
                // $(".contenedor-noticias-eventos").load(
                //   "vistas/modulos/eventos.php"
                // );
                Eventos();
              }
            });
          }
        },
      });
    }
  });
});
$(".w3l-courses").load("vistas/modulos/noticias_eventos.php");