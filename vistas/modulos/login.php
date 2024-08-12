<!-- <div id="back"></div> -->
<?php 
// use Controladores\ControladorUsuarios;
// $respuesta = ControladorUsuarios::ctrConn();
?>

  <div class="login-box-all">

    <div class="logo-empresa">
      <?php  $rand = rand(22,99999); ?>
      <img src="vistas/img/logo/logo.png?n='<?php echo $rand; ?>" alt="">
    </div>

    <p class="login-box-msg" style="display: none"></p>

    <form  method="post" class="login-u" id="form-login">
   
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" id="ingUsuario" autocomplete="off">
        <i class="glyphicon glyphicon-user form-control-feedback"></i>
      </div>
      <div class="form-group has-feedback" style="margin:0px !important">
        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" id="ingPassword">
        <i class="glyphicon glyphicon-lock form-control-feedback"></i>
        <!-- <div class="g-recaptcha" id="idrecaptcha" data-sitekey="6Lf4WrAZAAAAANIZPtMaCIhXbbgFoVnfNs_u8Ryo"></div> -->
      </div>     

 

     
        <!-- /.col -->
        <div class="content" style="background: #fff !important;">
          <button type="button" class="btn-flat" id="logUser">Ingresar al sistema <i class="fas fa-angle-double-right fa-lg"></i></button>
        </div>
        <!-- /.col -->
    

      <?php
      
      // $login = new ControladorUsuarios();
      // $login->ctrIngresoUsuario();
     
      ?>
      <div id="resultLogin"  style="display: none;"></div>
    </form>
   
  </div>
  <!-- /.login-box-body -->

<div id="fondP">
<div class="fnd"></div>
</div>
<script src="https://www.google.com/recaptcha/api.js?render=6LdTdcggAAAAAPzue7S6tJumtvWlWCS_Pa1kxPVE"></script>