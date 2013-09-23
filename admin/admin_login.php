<?php

/**
 * @author Victor
 * @copyright 2013
 */

/*Admin login*/

session_start();
?>

<html>
<head>
    <script src="../js/jquery-1.10.0.js"></script>
</head>
<body>

    <div id="header">
        <h1>Login Zona Admin</h1>
    </div>
    
    <div id="content">
        
        <form id="form_login">
        
            <label for="login"></label>
            <input type="text" id="login" name="login" placeholder="Login"/> <br />
            
            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="Password" /> <br />
            
            <input type="button" value="Acceder"/>
            
        </form>
    </div>

</body>

</html>