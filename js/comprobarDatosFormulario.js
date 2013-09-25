//Aquí con jQuery hacemos la comprobación de los datos y si algo es incorrecto preventDefault
$(function(){
   $('#enviar').click(function(event){
        //alert("Submit pulsado");
        
        //Si alguno de los campos no es correcto no enviamos el formulario y enfocamos dicho fallo
        if(!validar())
            event.preventDefault();
   });
});
    
function validar(){

		var nombre=document.getElementById('nombre');
		var apellido1=document.getElementById('apellido1');
		var apellido2=document.getElementById('apellido2');
		var email=document.getElementById('email');
		var pais=document.getElementById('num_pedido');
		
		var validaEmail = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
        var validaNumeroPedido = /^[A-Z]{3}\d{3}/;
        var validaNumeroSerie = /^[A-Z]{2}\d{8}/;
		
		if(nombre.value==''){
			alert('El campo Nombre no puede estar vacio!');
			nombre.focus();
			return false;
		}
		
		if(apellido1.value==''){
			alert('El campo Primer Apellido no puede estar vacio!');
			apellido1.focus();
			return false;
		}
		
		if(apellido2.value==''){
			alert('El campo Segundo Apellido no puede estar vacio!');
			apellido2.focus();
			return false;
		}
		
		
		if((email.value=='') || !(email.value.match(validaEmail))){
			alert('El campo Email esta vacio o es incorrecto. Chequealo! \n Debe tener el siguiente formato: \n \"usuario@servidor.dominio\"');
			email.focus();
			return false;
		}
		
		
		if((num_pedido.value=='') || !(num_pedido.value.match(validaNumeroPedido))){
			alert('El campo Numero de pedido esta vacio o es incorrecto. Comprueba que cumple con el formato requerido (AAA000)!');
			num_pedido.focus();
			return false;
		}
        
        if((num_serie.value=='') || !(num_serie.value.match(validaNumeroSerie))){
			alert('El campo Numero de serie esta vacio o es incorrecto. Comprueba que cumple con el formato requerido (AA00000000)!');
			num_serie.focus();
			return false;
		}

	return true;
}