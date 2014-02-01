<?php

/**
 * @author Victor
 * @copyright 2013
 * 
 */
 
//Este es el index de la zona admin, donde se pueden aceptar o denegar las peticiones de devolucion enviadas por los clientes


session_start();

if(!isset($_SESSION['admin']) || $_SESSION['admin'] != 'si')
    header('Location: admin_login.php');
require_once("../lib/functions.php");
$funciones = new Functions();

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="../js/jquery-1.10.0.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="css/general.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css" media="screen" />
</head>
<body>
    <div id="wrapper" class="container">
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
                    ?>
            
            </table>
        
        </div>
    </div>
    <script type="text/javascript">
    
        $(function(){
           $('.aceptar').click(function(event){
                
                //Al hacer click en cualquier boton Aceptar la peticion pasa al estado Aceptada
                var id_devolucion = $(this).parent().parent().children().html();
                var estado_devolucion = $(this).parent().prev();
                
                $.ajax({ 
                    url: "../lib/ajaxAcciones.php",
                    data: { 
                        accion: "aceptar",
                        id_devolucion: id_devolucion
                    },
                    type: 'post',
                    success: function(data){
                        estado_devolucion.html(data);
                    }

                })
            
           });
           
           $('.denegar').click(function(event){
                //Al hacer click en cualquier boton Denegar la peticion pasa al estado Denegada
                var id_devolucion = $(this).parent().parent().children().html();
                var estado_devolucion = $(this).parent().prev().prev();
                $.ajax({ 
                    url: "../lib/ajaxAcciones.php",
                    data: { 
                        accion: "denegar",
                        id_devolucion: id_devolucion
                    },
                    type: 'post',
                    success: function(data){
                        estado_devolucion.html(data);
                    }

                })
            
           });
            
        });
    
    </script>
</body>

</html>