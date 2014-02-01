<?php

/**
 * @author Victor
 * @copyright 2013
 */

/*Admin login*/

session_start();

require_once('../lib/functions.php');
$funciones = new Functions();

if((isset($_SESSION['admin'])) && ($_SESSION['admin'] == 'si'))
    header('Location: admin_index.php');

if($_POST){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    if ($funciones->comprobarLogin($usuario, $password)){
        $_SESSION['admin'] = 'si';
        header('Location: admin_index.php');
        echo "Sí";
    }
    else
        echo "No";
    
}

//print_r($_SESSION);
?>

<html>
<head>
    <script src="../js/jquery-1.10.0.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/general.css" media="screen" />
</head>
<body>
    <div id="wrapper">
    <div id="header">
        <h1>Login Zona Admin</h1>
        
    </div>
        <div id="content">
            
            <form id="form_login" action="" method="POST">
            
                <label for="usuario"></label>
                <input type="text" id="usuario" name="usuario" placeholder="Usuario"/> <br />
                
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password" /> <br />
                
                <input type="submit" value="Acceder" id="comprobar"/>
                
            </form>
        </div>
        <div id="footer">
            <br />
        </div>
    </div>
</body>

</html>