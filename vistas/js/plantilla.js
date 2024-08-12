// $('#formularioRegistro').load('vistas/modulos/inscripcion.php');
$(document).ready(function() {
        $('#fecha_nacimiento').datepicker({
                autoclose: true,
                format: 'dd/mm/yyyy',
                'language' : 'es'
              })


                         
$('#fecha_nacimiento').mask('00/00/0000');
})
$(".submenu").on('click', function(e) {
        e.preventDefault();
        $(".submenu").children('div').slideToggle(100)
})   
$(".submenu2").on('click', function(e) {
        e.preventDefault();
        $(".submenu2").children('div').slideToggle(100)
})        
$(".menu div").on('click', function(e) {
        e.stopPropagation();

})
 $(".btn-menu").on('click', function(e) {
        $('.menu').removeClass("fuera");
        
}) 

//   $(".btns-dash").on('click','.btn-menur', function() {
      
//       $("#contenedor-menur").toggle(500);
// });
// $('.contacto').attr('href', 'contacto');
$('.reload-all').hide();

$('.contacto').on('click', function(e){
        e.preventDefault();
        $('.reload-all').hide();
        
         
        $.ajax({
                url: 'vistas/modulos/contacto.php',
                
                method: 'GET', 
                beforeSend: function(){

                        $('.reload-all').fadeIn(50).html("<img src='vistas/img/reload8.svg' width='60px'> ");
                },
                success: function(data){
                     $('#contenedorTotal').hide();
                        $('title').html('ISTBM | Contáctenos');
                        $('#contenedorTotal').html(data).fadeIn(1000);
                        $('.reload-all').hide();
                        $('.menu').addClass("fuera");
                        history.pushState(null, "", "contacto");
                        $('html, body').animate({

                                scrollTop: 0
                                // scrollTop: $("#formularioRegistro").offset().top
                            }, 2000)
                }
        })
})
$('.todosC').on('click', function(e){
        e.preventDefault();
        $('.reload-all').hide();
       
        $.ajax({
                url: 'vistas/modulos/carreras.php',
                
                method: 'GET', 
                beforeSend: function(){

                        $('.reload-all').fadeIn(50).html("<img src='vistas/img/reload8.svg' width='60px'> ");
                }, 
                success: function(data){
                        $('#contenedorTotal').hide();
                        $('title').html('ISTBM | Carreras Profesionales');
                        $('#contenedorTotal').html(data).fadeIn(1000);
                        $('.reload-all').hide();
                        $('.menu').addClass('fuera');
                        history.pushState(null, "", "carreras");
                        $('html, body').animate({

                                scrollTop: 0
                    
                            }, 2000)
                        
                }
        })
})

$('.tablas').DataTable({
        "language": {
    
          "sProcessing":     "Procesando...",
          "sLengthMenu":     "Mostrar: _MENU_",
          "sZeroRecords":    "No se encontraron resultados",
          "sEmptyTable":     "Ningún dato disponible en esta tabla",
          "sInfo":           "",
          "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
          "sInfoPostFix":    "",
          "sSearch":         "Buscar:",
          "sUrl":            "",
          "sInfoThousands":  ",",
          "sLoadingRecords": "Cargando...",
          "oPaginate": {
          "sFirst":    "Primero",
          "sLast":     "Último",
          "sNext":     "&rsaquo;",
                            "sPrevious": "&lsaquo;"
          },
          "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
          }
      
        }
      
      });

