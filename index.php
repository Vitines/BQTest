<?php

/**
 * @author Victor
 * @copyright 2013
 */

/*Admin login*/

session_start();

/*Guardamos los datos introducidos por el usuario en la tabla "devoluciones"
    Yo creo que esto lo haré con jQuery mostrando un mensaje debajo del submit: "Datos enviados correctamente"

*/
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
        <form id="formulario">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre"/> <br />
            
            <label for="apellido1">Primer apellido</label>
            <input type="text" id="apellido1"/> <br />
            
            <label for="apellido2">Segundo apellido</label>
            <input type="text" id="apellido2"/> <br />
            
            <label for="email">E-Mail</label>
            <input type="text" id="email"/> <br />
            
            <label for="num_pedido">Numero de pedido</label>
            <input type="text" id="num_pedido" /> <br />
            
            <label for="productos">Producto</label>
            <select id="productos">
                <!--Este select lo llenaremos dinámicamente desde una tabla que crearemos con todos los diferentes productos
                    Tendra varios select que con JS funcionaran seun el primer select
                -->
                
            </select> <br />
            
            <label for="no_serie">Numero de serie</label>
            <input type="no_serie" /> <br />
            
            <label for="motivo">Motivo de la devolucion</label>
            <select id="motivo">
                <option>Cambio</option>
                <option>Sustitucion</option>
                <option>Devolucion</option>
            </select> <br />
            
            <input type="submit" value="Enviar" /> <br />        
        </form>
    </div>
    
    <div id="footer"></div>
</div>


</body>
</html>