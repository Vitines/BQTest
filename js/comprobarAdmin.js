//Iniciamos las funciones solo cuando el HTML esté completamente cargado
$(function(){
    //Le asignamos un onclick al boton "comprobar"
    $("#comprobar").click(function(evento){

        //Asignamos el user introducido
        var usuario = $(this).parent().children().val();

        //Asignamos el password introducido
        var password = $(this).parent().children().next().val();

        //Y lo enviamos por Ajax al PHP, ahora en el PHP toca meterlo en la variable de SESSION

        $("#wrapper").load("../admin/comprobarAdmin.php", {usuario: usuario, password: password}, function(){

            //alert ("Del id del producto " + idProducto + " añadimos " + cantidad + " unidades al carrito.");
            //$('#login').html();

        });

    });

})
