<?php
use Controladores\ControladorInscripciones;
$item = null;
$valor = null;
$inscritos = ControladorInscripciones::ctrMostrarInscritos($item, $valor);
?>
<section class="mgt-1">
<div class="container-fluid pdt-1" >


<table class="table  dt-responsive tablas tabla-inscritos" >

<thead>
  <tr>
    <th style="width:10px;">#</th>
    <th>DNI</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Fecha Nacimiento</th>
    <th>direccion</th>
    <th>Correo</th>
    <th>Teléfono</th>
    <th>Carrera</th>
    <th>Turno</th>
    <th>Acciones</th>
  </tr>
</thead>

<tbody>
    <?php 
        foreach($inscritos as $key => $value):
    
        
           echo "<tr>
           <td>".++$key."</td>
           <td>".$value['dni']."</td> 
           <td>".$value['nombres']."</td> 
           <td>".$value['apellido_paterno']." ".$value['apellido_materno']."</td>  
           <td>".$value['fecha_nacimiento']."</td> 
           <td>".$value['direccion']."</td> 
           <td>".$value['correo']."</td> 
           <td>".$value['telefono']."</td> 
           <td>".$value['carrera']."</td> 
           <td>".$value['turno']."</td> 
           <td><button class='btn btn-success btn-sm btn-enviar' idInscrito='".$value['id']."' sendemail='".$value['correo']."' id='btnenviar".$value['id']."'><i class='fas fa-paper-plane'></i></button>
         </td> 
           </tr>";
        endforeach; 
        //  <button class='btn btn-primary btn-sm'>Enviar</button>
        ?>
      
     
   
</tbody>
</table>
   </div>

</section>
