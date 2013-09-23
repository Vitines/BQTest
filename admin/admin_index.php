<?php

/**
 * @author Victor
 * @copyright 2013
 */


session_start();

/*Aquí se tienen que poder ver todas las peticiones realizadas por los clientes y aceptarlas o rechazarlas*/
?>

<html>
<head>
    <script src="../js/jquery-1.10.0.js"></script>
</head>
<body>

    <div id="header">
        <h1>Listado Peticiones Zona Admin</h1>
    </div>
    
    <div id="content">
         
        <label for="login"></label>
        <input type="text" id="login" placeholder="Login"/> <br />
        
        <label for="password"></label>
        <input type="password" id="password" placeholder="Password" /> <br />
        
        <input type="button" value="Acceder"/>
    
    </div>

</body>

</html>