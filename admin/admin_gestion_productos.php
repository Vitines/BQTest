<?php

/**
 * @author Victor
 * @copyright 2013
 */


session_start();

if(!isset($_SESSION['admin']) || $_SESSION['admin'] != 'si')
    header('Location: admin_login.php');
    
require_once("../functions.php");

$funciones = new Functions();
/*Pagina para introducir nuevos productos*/
?>

<html>
<head>
    <script src="../js/jquery-1.10.0.js"></script>
    <script src="../js/jquery.editable.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/general.css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>Gestion Productos Zona Admin</h1>
        </div>
        
        <div id="content">
        
            <table id="tabla_productos" border=1>
                <tr>
                    <td style="border: solid black 1px;">Id Producto</td>
                    <td>Nombre Producto</td>
                    <td>Descripcion</td>
                    <td></td>
                    <td></td>
                    
                    <!-- Aquí tengo el código que voy a medio copiar para esto, porque la funcionalidad en si es la misma...
                    view-source:http://rolrus.net63.net/index.php?nav=juegos&subnav=personajes
                    -->
                    
                </tr>
                    <?php $funciones->imprimirProductosTable()
                        /*Imprimir aqui la tabla Productos*/
                    ?>
            
            </table>
            
            <a href="admin_index.php">Volver a la pagina anterior</a>
        </div>
    </div>
</body>

</html>