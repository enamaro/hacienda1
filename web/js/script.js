
$(document).ready(function(){
      $('.autoplay').slick({
        autoplay: true,
        dots: true,
      });

    var contenido = '<div id="nuevo_div"><p id="politica_coockies">Solicitamos su permiso para obtener datos estadísticos de su navegación en esta web, en cumplimiento del Real Decreto-ley 13/2.012. Si continúa navegando consideramos que acepta el uso de cookies.</p><ul id="aceptar_coockies"><li id="aceptar"><a href="#">Aceptar</a></a></li><li id="mas_informacion"><a href="#">Más información</a></a></li></ul></div>';
     
    $('body').prepend(contenido);
     
  	$("#aceptar").click(function() {
  	 	$('#nuevo_div').css('display', 'none');
  	});
  	 	Cookies.set('nombre_1', 'valor_1', {expires: 30});
      	if (Cookies.get('nombre_1') == 'valor_1'){
	      	$('#nuevo_div').css('display', 'none');
	      	
      	}	 
});