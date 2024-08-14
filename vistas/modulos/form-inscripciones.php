<!-- FORMULARIO -->
<section id="formularioRegistro" class="formulario-inscripcion">
  <!-- <div class="before"></div> -->

  <h2 class="title-ins-p mt-5 ">FORMULARIO DE INSCRIPCIÓN</h2>
  <ul class="breadcrumbs-custom-path pb-sm-5 pb-4 mt-2 text-center ">


    <span class="title-ins">Da el primer paso hacia el éxito con nosotros.</span>


  </ul>
  <?php
  $time = time();
  ?>

  <!-- <h4 class="title-big text-center" style="font-size: 28px">FORMULARIO DE INSCRIPCIÓN</h4> -->
  <form action="" id="formInscripcion">
    <div id="bannerInscripcion"><img src="vistas/img/inscrpcionesbmm.jpg?q=<?php echo $time; ?>" alt=""></div>
    <div id="errores" class=""></div>
    <div id="box">
      <input type="text" id="dni" name="dni" placeholder="DNI" maxlength="8">
      <input type="text" id="nombres" name="nombres" placeholder="NOMBRES" readonly>
      <input type="text" id="apellido_paterno" name="apellido_paterno" placeholder="APELLIDO PATERNO" readonly>
      <input type="text" id="apellido_materno" name="apellido_materno" placeholder="APELLIDO MATERNO" readonly>
      <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="FECHA NACIMIENTO dd/mm/aaaa" data-mask="00/00/0000" data-mask-selectonfocus="true">
      <input type="text" id="edad" name="edad" placeholder="EDAD" readonly="readonly">
    </div>
    <div id="box">
      <input type="email" id="correo" name="correo" placeholder="CORREO" required="required">
      <input type="text" id="telefono" name="telefono" placeholder="CELULAR">
      <input type="text" id="direccion" name="direccion" placeholder="DIRECCIÓN">
    </div>
    <div id="box">
      <select id="carrera" name="carrera">
        <option value="">CARRERA</option>
        <option value="Administración Bancaria">Administración Bancaria</option>
        <option value="Administración de Empresas">Administración de Empresas</option>
        <option value="Administración de Negocios Internacionales">Administración de Negocios Internacionales</option>
        <option value="Contabilidad">Contabilidad</option>
        <option value="Computación e Informática">Computación e Informática</option>
        <option value="Secretariado Ejecutivo">Secretariado Ejecutivo</option>
      </select>
    </div>
    <div id="box">
      <select id="turno" name="turno">
        <option value="">TURNO</option>
        <option value="Mañana">Mañana</option>
        <option value="Tarde">Tarde</option>
        <option value="Noche">Noche</option>

      </select>
    </div>
    <div id="box">
      <button type="button" disabled="disabled">ENVIAR REGISTRO</button>
      <!-- <i class="fas fa-angle-double-right fa-lg"></i> -->
    </div>

  </form>
  <input type="hidden" id="idCo">

</section>
<!-- FORMULARIO END-->
<script>
  $("header").hide();
</script>