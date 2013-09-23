<?php

/**
 * @author Victor
 * @copyright 2013
 */


session_start();

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
    
        <table id="tabla_productos" style="border: solid black 1px;">
            <tr>
                <td>Id Producto</td>
                <td>Nombre Producto</td>
                <td>Descripcion</td>
                <td>¿Editar?</td>
                
                <?php /*Imprimir aqui la tabla Productos*/?>
            </tr>
        
        </table>
    </div>

</body>

</html>