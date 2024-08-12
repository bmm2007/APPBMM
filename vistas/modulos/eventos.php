<?php
require_once "../../vendor/autoload.php";

use Controladores\ControladorCrear;

$tabla = 'eventos ORDER BY id DESC';
$item = null;
$valor = null;
$resultado = ControladorCrear::ctrMostrar($tabla, $item, $valor);
?>


<table class="table  dt-responsive tablas tabla-inscritos">
  <thead>
    <tr>
      <th style="width:10px;">#</th>
      <th style="text-align: center; text-transform:uppercase">FECHA</th>
      <th style="text-align: center; text-transform:uppercase">TÍTULO</th>
      <th style="text-align: center; text-transform:uppercase">FOTO</th>
      <th style="text-align: center; text-transform:uppercase">Acciones</th>
    </tr>
  </thead>

  <tbody>
    <?php



    foreach ($resultado as $key => $value) :
      $rand = rand(22, 999999);
      $date = date_create($value['fecha']);
      echo "<tr id='delete" . $value['id'] . "'>
           <td>" . ++$key . "</td>
           <td>" . date_format($date, "d/m/Y h:i:s A") . "</td> 
           <td>" . $value['titulo'] . "</td> 
           <td style='text-align: center;'><div class='img-ne'><img src='vistas/img/eventos/" . $value['foto'] . "?n=" . $rand . "' width='160px'></img></div></td>  
           <td style='text-align: center;'>
           <button class='btn btn-primary btn-lg btn-editar-noticia' data-toggle='modal' data-target='#modalEditar' idEditar='" . $value['id'] . "'><i class='fas fa-pencil-alt'></i></button>
           <button class='btn btn-danger btn-lg btn-eliminar' idEliminar='" . $value['id'] . "' tabla='eventos'><i class='far fa-trash-alt'></i></button>
         </td> 
           </tr>";
    endforeach;
    //  <button class='btn btn-primary btn-sm'>Enviar</button>
    ?>



  </tbody>
</table>


<script>
  $('.tablas').DataTable({
    "language": {

      "sProcessing": "Procesando...",
      "sLengthMenu": "Mostrar: _MENU_",
      "sZeroRecords": "No se encontraron resultados",
      "sEmptyTable": "Ningún dato disponible en esta tabla",
      "sInfo": "",
      "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
      "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix": "",
      "sSearch": "Buscar:",
      "sUrl": "",
      "sInfoThousands": ",",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "&rsaquo;",
        "sPrevious": "&lsaquo;"
      },
      "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }

    }

  });
</script>