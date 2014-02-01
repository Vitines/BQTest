<?php

/**
 * @author Victor
 * @copyright 2013
 */

require_once("lib/indexController.php");?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="UTF-8">
	<meta name="author" content="Victor" />
    <script src="js/jquery-1.10.0.js"></script>
	<title>Pagina de devoluciones BQ</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="css/general.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" media="screen" />

</head>

<body>

<div id="wrapper" class="container">
    <header id="header"><h1>Formulario de devoluciones</h1></header>
    
    <div id="content" class="row">
        <div class=""></div>
        <div id="divFormulario" class="col-md-12">
            <form id="formulario" action="" method="post" class="form-horizontal">

                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre"/>
                </div>
                <div class="form-group">
                    <label for="apellido1">Primer apellido:</label>
                    <input type="text" id="apellido1" name="apellido1"/>
                </div>
                <div class="form-group">
                    <label for="apellido2">Segundo apellido:</label>
                    <input type="text" id="apellido2" name="apellido2"/>
                </div>
                <div class="form-group">
                    <label for="email">E-Mail:</label>
                    <input type="text" id="email" name="email"/>
                </div>
                <div class="form-group">
                    <label for="num_pedido">Numero de pedido:</label>
                    <input type="text" id="num_pedido" name="num_pedido"/>
                </div>
                <div class="form-group">
                    <label for="productos">Producto:</label>
                    <select id="productos" name="productos">
                        <?php $funciones->imprimirProductosSelect(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="num_serie">Numero de serie:</label>
                    <input type="text" id="num_serie" name="num_serie" />
                </div>
                <div class="form-group">
                    <label for="motivo">Motivo de la devolucion:</label>
                    <select id="motivo" name="motivo">
                        <option value="Cambio">Cambio</option>
                        <option value="Sustitucion">Sustitucion</option>
                        <option value="Devolucion">Devolucion</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Enviar" id="enviar"/>
                </div>
            </form>
        </div>
        <div class=""></div>
    </div>
    
    <footer id="footer">
        <br />
        <?php //echo $nombreFichero; ?>
    </footer>
</div>

<script type="text/javascript" src="js/comprobarDatosFormulario.js"></script>

</body>
</html>