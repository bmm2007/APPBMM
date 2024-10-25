<?php
require_once "../../vendor/autoload.php";

use Controladores\ControladorCrear;

         $tabla = 'noticias ORDER BY  id DESC LIMIT 3';
         $item = null;
         $valor = null;
         $resultado = ControladorCrear::ctrMostrar($tabla, $item, $valor);

         $tabla = 'eventos ORDER BY  id DESC LIMIT 3';
         $item = null;
         $valor = null;
         $resultadoEventos = ControladorCrear::ctrMostrar($tabla, $item, $valor);
?>
<!-- <section class="mgt-1">
   <div class="col-md-12">
      <?php
      // foreach ($resultado as $k => $v) {
      //    $date = date_create($v['fecha']);

      //    echo "<div class='col-md-6 col-sm-12 justify'>";
      //    echo  "<div class='img-ne'><img src='vistas/img/noticias/" . $v['foto'] . "' width='100%'></img></div>";
      //    echo "<div class='date-ne'>" . date_format($date, "d/m/Y h:i:s A") . "</div>";
      //    echo $v['texto'];
      //    echo "</div>";
      // }

      ?>
   </div>
</section> -->
<div class="blog pb-0" id="courses">
   <div class="flex" style="margin-left: 10px; margin-right: 10px;">
      
      <h3 class="title-big text-center mb-sm-5 mb-4">ÚLTIMAS NOTICIAS</h3>

      <div class="row">
         <?php
         foreach ($resultado as $k => $v) {
            $date = date_create($v['fecha']);
            $link = str_replace(' ', '_', $v['titulo']);
            $linkup = mb_strtolower($link);
            echo '<div class="contenedor-carreras">
            <div class="carrera-p">
               <div class="fondo-carrera"></div>
               <div class="foto-carrera"><a class="" href=""><img src="vistas/img/noticias/' . $v['foto'] . '" width="100%"></img></a></div>
               <a href="noti/'.$linkup.'"  target="_blank"  class="titulo-profesion">' . mb_strtoupper($v['titulo'], 'utf-8') . '</a>
               <div class="date-ne">' . date_format($date, "d/m/Y h:i:s A") . ' <i class="fas fa-calendar"></i></div>
            </div>
            </div>';
         }

         ?>

      </div>
      <div class="mt-md-5 mt-4 text-more text-center">
         <a href="blog.html">Ver todas las noticias <i class="pl-2 fas fa-arrow-right"></i></a>
      </div>
   </div>
</div>



<div class="blog pb-0" id="courses" style="margin-top: 70px;">
   <div class="flex" style="margin-left: 10px; margin-right: 10px;">
      <!-- <h5 class="title-small text-center mb-1">Estudia con nosotros</h5> -->
      <h3 class="title-big text-center mb-sm-5 mb-4">ÚLTIMOS EVENTOS</h3>

      <div class="row">
         <?php
         foreach ($resultadoEventos as $k => $v) {
            $date = date_create($v['fecha']);
            $link = str_replace(' ', '_', $v['titulo']);
            $linkup = mb_strtolower($link);
            echo '<div class="contenedor-carreras">
            <div class="carrera-p">
               <div class="fondo-carrera"></div>
               <div class="foto-carrera"><a class="" href=""><img src="vistas/img/eventos/' . $v['foto'] . '" width="100%"></img></a></div>
               <a href="event/'.$linkup.'"  target="_blank"  class="titulo-profesion">' . mb_strtoupper($v['titulo'], 'utf-8') . '</a>
               <div class="date-ne">' . date_format($date, "d/m/Y h:i:s A") . ' <i class="fas fa-calendar"></i></div>
            </div>
            </div>';
         }

         ?>

      </div>
      <div class="mt-md-5 mt-4 text-more text-center">
         <a href="blog.html">Ver todos los eventos <i class="pl-2 fas fa-arrow-right"></i></a>
      </div>
   </div>
</div>