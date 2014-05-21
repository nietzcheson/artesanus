$(document).ready(function(){

  var enviarDatos = function(){



    $.post(_root_+"ajax/enviar","id=DesdePost",function(datos){
      $("#mostrar").html(datos);
    },'json');

  }

  $("#enviar").click(function(){
    enviarDatos();
  });

});
