jQuery(function(){ 
	
	//Función que cambia el color de fondo y guarda el valor en la cookie
	function cambiacolor(bgcolor){ 							//Recibe el color de fondo 'bgcolor'
		jQuery('body').css('background-color',bgcolor);		//Cambia el color de fondo de la web a 'bgcolor'	
		Cookies.set('colorCookie',bgcolor);					//Crea una cookie llamada 'colorCookie' con el color elegido 'bgcolor'
	}
	
	//Al cargar la página se pone de color de fondo el valor que hay en la cookie 
	jQuery('body').css('background-color',Cookies.get('colorCookie'));
	
	//Al clicar sobre la imagen obtenemos el color del atributo 'data-color' y llamamos la función 'cambiacolor' con el color seleccionado
	jQuery('.thumbnail').click(function(e){
		e.preventDefault();
		colorseleccionado = jQuery(this).data('color');
		cambiacolor(colorseleccionado);		
	});
	
	//Al clicar sobre el botón de eliminar cookies, borramos la cookie	
	jQuery("#eliminaCookie").click(function(){
		Cookies.remove('colorCookie');
	});
		
});