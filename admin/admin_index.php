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
/*Aquí se tienen que poder ver todas las peticiones realizadas por los clientes y aceptarlas o rechazarlas*/
?>

<html>
<head>
    <script src="../js/jquery-1.10.0.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/general.css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>Listado Peticiones Zona Admin</h1>
            <div id="enlace_productos">
            <a href="admin_gestion_productos.php">Ir a gestión de productos</a>
        </div>
        </div>
        
        <div id="content_admin">
             
            <table id="tabla_devoluciones" border=1>
                <tr>
                    <td>Id Devolucion</td>
                    <td>Nombre Usuario</td>
                    <td>Primer Apellido</td>
                    <td>Segundo Apellido</td>
                    <td>E-Mail</td>
                    <td>Numero de pedido</td>
                    <td>Producto</td>
                    <td>Numero de Serie</td>
                    <td>Motivo de la devolucion</td>
                    <td>Estado</td>                
                    
                </tr>
                    <?php $funciones->imprimirPeticiones()
                        /*Imprimir aqui la tabla Productos*/
                    ?>
            
            </table>
        
        </div>
    </div>
</body>

</html>