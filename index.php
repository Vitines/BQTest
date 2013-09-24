<?php

/**
 * @author Victor
 * @copyright 2013
 */

/*Admin login*/

session_start();

require_once("functions.php");

$funciones = new Functions();
/*Guardamos los datos introducidos por el usuario en la tabla "devoluciones"
    Yo creo que esto lo haré con jQuery mostrando un mensaje debajo del submit: "Datos enviados correctamente"

*/






if($_POST){
    $nombre=$_POST['nombre'];
    $apellido1=$_POST['apellido1'];
    $apellido2=$_POST['apellido2'];
    $email=$_POST['email'];
    $num_pedido=$_POST['num_pedido'];
    $producto=$_POST['productos'];
    $num_serie=$_POST['num_serie'];
    $motivo=$_POST['motivo'];
	
    $resul=$funciones->insertarDevolucion($id = '',$nombre,$apellido1, $apellido2, $email, $num_pedido, $producto, $num_serie, $motivo, $estado = 0);
    $idPedido = mysql_insert_id();
    
    $nombreProducto = $funciones->nombrePorId($producto);
    //echo $nombreProducto;
    $funciones->generarPDF($idPedido,$nombre,$apellido1, $apellido2, $email, $num_pedido, $nombreProducto, $num_serie, $motivo);
    //$funciones->enviarEmail();    
//Comprobar que el numero de serie introducido no tiene ninguna reclamacion sin confirmar. IF POSSIBLE!
echo "<br>Reclamacion realizada con numero " . $idPedido;
}




?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Victor" />
    <script src="js/jquery-1.10.0.js"></script>

	<title>Pagina de devoluciones BQ</title>
</head>

<body>


<div id="wrapper">
    <div id="header"><h1>Formulario de devoluciones productos BQ</h1></div>
    
    <div id="content">
        <form id="formulario" action="" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"/> <br />
            
            <label for="apellido1">Primer apellido:</label>
            <input type="text" id="apellido1" name="apellido1"/> <br />
            
            <label for="apellido2">Segundo apellido:</label>
            <input type="text" id="apellido2" name="apellido2"/> <br />
            
            <label for="email">E-Mail:</label>
            <input type="text" id="email" name="email"/> <br />
            
            <label for="num_pedido">Numero de pedido:</label>
            <input type="text" id="num_pedido" name="num_pedido"/> <br />
            
            <label for="productos">Producto:</label>
            <select id="productos" name="productos">
                <?php 
                    $funciones->imprimirProductosSelect();
                ?>
                <!--Este select lo llenaremos dinámicamente desde una tabla que crearemos con todos los diferentes productos
                    Tendra varios select que con JS funcionaran seun el primer select IF POSSIBLE!!
                -->
                
            </select> <br />
            
            <label for="num_serie">Numero de serie:</label>
            <input type="text" id="num_serie" name="num_serie" /> <br />
            
            <label for="motivo">Motivo de la devolucion:</label>
            <select id="motivo" name="motivo">
                <option value="cambio">Cambio</option>
                <option value="sustitucion">Sustitucion</option>
                <option value="devolucion">Devolucion</option>
            </select> <br />
            
            <input type="submit" value="Enviar" id="enviar"/> <br />        
        </form>
    </div>
    
    <div id="footer"></div>
</div>

<script type="text/javascript">
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
</script>


</body>
</html>