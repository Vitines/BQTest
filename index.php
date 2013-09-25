<?php

/**
 * @author Victor
 * @copyright 2013
 */

session_start();

require_once("functions.php");
$funciones = new Functions();

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

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
    $nombreFichero = $funciones->generarPDF($idPedido,$nombre,$apellido1, $apellido2, $email, $num_pedido, $nombreProducto, $num_serie, $motivo);
    $funciones->enviaEmail($nombre, $apellido1, $apellido2, $email, $idPedido, $nombreFichero);
    
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
    <link rel="stylesheet" type="text/css" href="css/general.css" media="screen" />
</head>

<body>

<div id="wrapper">
    <div id="header"><h1>Formulario de devoluciones productos BQ</h1></div>
    
    <div id="content">
        <div id="divFormulario">
            <form id="formulario" action="" method="post">
            
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre"/> <br /><br />
                
                <label for="apellido1">Primer apellido:</label>
                <input type="text" id="apellido1" name="apellido1"/> <br /><br />
                
                <label for="apellido2">Segundo apellido:</label>
                <input type="text" id="apellido2" name="apellido2"/> <br /><br />
                
                <label for="email">E-Mail:</label>
                <input type="text" id="email" name="email"/> <br /><br />
                
                <label for="num_pedido">Numero de pedido:</label>
                <input type="text" id="num_pedido" name="num_pedido"/> <br /><br />
                
                <label for="productos">Producto:</label>
                <select id="productos" name="productos">
                    <?php $funciones->imprimirProductosSelect(); ?>
                </select> <br /><br />
                
                <label for="num_serie">Numero de serie:</label>
                <input type="text" id="num_serie" name="num_serie" /> <br /><br />
                
                <label for="motivo">Motivo de la devolucion:</label>
                <select id="motivo" name="motivo">
                    <option value="Cambio">Cambio</option>
                    <option value="Sustitucion">Sustitucion</option>
                    <option value="Devolucion">Devolucion</option>
                </select> <br /><br />
                
                <input type="submit" value="Enviar" id="enviar"/> <br /><br />  
                      
            </form>
        </div>
    </div>
    
    <div id="footer">
        <br />
        <?php //echo $nombreFichero; ?>
    </div>
</div>

<script type="text/javascript" src="js/comprobarDatosFormulario.js"></script>

</body>
</html>