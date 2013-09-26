<?php

/**
 * @author Victor
 * @copyright 2013
 */


session_start();

if(!isset($_SESSION['admin']) || $_SESSION['admin'] != 'si')
    header('Location: admin_login.php');
    
require_once("../lib/functions.php");

$funciones = new Functions();
/*Pagina para introducir nuevos productos*/
?>

<html>
<head>
    <script src="../js/jquery-1.10.0.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/general.css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>Gestion Productos Zona Admin</h1>
        </div>
        
        <div id="content_admin_productos">
        
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
            
            <br /><br />
            <input type="button" id="anadirProducto" value="Añadir un producto" /> <br /><br />
            <a href="admin_index.php">Volver a la pagina anterior</a> <br /><br />
            
        </div>
    </div>
    <script type="text/javascript">
        
        $(function(){
            var contador=0;
            $('.confirmar').click(function(){
                
                //Al hacer click en cualquier boton Cofirmar edicion se guardan los cambios en la BBDD, tabla Productos
                
                var nombre = $(this).closest('tr').find('.nombre_producto').val();
                var descripcion = $(this).closest('tr').find('.descripcion').val();
                var id_producto = $(this).parent().parent().children().html();

                $.ajax({ 
                    url: "../lib/ajaxAcciones.php",
                    data: { 
                        accion: "editar",
                        id_producto: id_producto,
                        nombre_producto: nombre,
                        descripcion: descripcion
                        
                    },
                    type: 'post',
                    success: function(data){
                        alert(data);
                    }

                })
                
             });
            
            $('.borrar').click(function(){
                
                //Al hacer click en cualquier boton Borrar se borra el producto de la correspondiente tabla
                var id_producto = $(this).parent().parent().children().html();
                $.ajax({ 
                    url: "../lib/ajaxAcciones.php",
                    data: { 
                        accion: "borrar",
                        id_producto: id_producto,
                    },
                    type: 'post',
                    success: function(){
                        location.reload();
                    }

                })
            });
            
            $('#anadirProducto').click(function(){
                
                //Al hacer click en Anadir un producto, se anade a la tabla Productos y se muestra en la pagina
                var nombre_producto = prompt("Nombre del producto? (maximo 20 caracteres)");
                var descripcion = prompt("Descripcion del producto? (maximo 100 caracteres)");
                
                $.ajax({ 
                    url: "../lib/ajaxAcciones.php",
                    data: { 
                        accion: "anadir",
                        nombre_producto: nombre_producto,
                        descripcion: descripcion
                    },
                    type: 'post',
                    success: function(){
                        location.reload();
                    }

                })
            })
            
        })
    </script>
</body>

</html>