<?php

/**
 * @author Victor
 * @copyright 2013
 */


session_start();

require_once("../functions.php");

$funciones = new Functions();
/*Pagina para introducir nuevos productos*/
?>

<html>
<head>
    <script src="../js/jquery-1.10.0.js"></script>
</head>
<body>

    <div id="header">
        <h1>Gestion Productos Zona Admin</h1>
    </div>
    
    <div id="content">
         
        <!--
<label for="login"></label>
        <input type="text" id="login" placeholder="Login"/> <br />
        
        <label for="password"></label>
        <input type="password" id="password" placeholder="Password" /> <br />
        
        <input type="button" value="Acceder"/>
-->
    
        <table id="tabla_productos" border=1>
            <tr>
                <td style="border: solid black 1px;">Id Producto</td>
                <td>Nombre Producto</td>
                <td>Descripcion</td>
                <td></td>
                <td></td>
                
                
            </tr>
                <?php $funciones->imprimirProductosTable()
                    /*Imprimir aqui la tabla Productos*/
                ?>
        
        </table>
        
        <a href="admin_index.php">Volver a la pagina anterior</a>
    </div>

</body>

</html>