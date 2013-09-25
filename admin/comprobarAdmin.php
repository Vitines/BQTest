<html>
<head><title>Menu de administracion</title></head>
<body>



<?php
session_start();

//include_once "administraAdmin.php";

/*if ($_SESSION['usuarioAdmin']['login']){
    $comprueba=si;
}
*/

if (isset($_POST['usuario']) && isset($_POST['password'])){
    require_once('../functions.php');
    $funciones = new Functions();
    echo "pene";
    $funciones->comprobarLogin();
    $comprueba=si;
}

if ($comprueba==si){
    echo "Bienvenido " . $_SESSION['admin'] . "<br>";
    echo "<a href=\"logout.php?Logout='logout'\">Desconectarse</a>";

    ?>







<!--
    ---------IMPORTANTE-----------
    Debe estar en cada pagina de los siguientes enlaces!

    session_start();
    if($_SESSION['admin']=="si"){
    echo "Permitir crear lo que sea en cada pagina"
}else{
    echo "No mostrar creacion de nada y redireccion a index.php"
    }
    -->

    <h1> Menu de administracion de Juegos</h1>
    <a href='../crearJuego.php'>Crear Juego </a><br>
    <!--<a href='modificarJuego.php'>Modificar Juego </a><br>
    <a href='borrarJuego.php'>Borrar Juego </a><br>-->
    <h1> Menu de administracion de Tienda</h1>
    <a href='../administrarProductos.php'>Introducir Productos </a><br>
    <!--<a href='administrarPedidos.php'>Administrar Pedidos </a><br>
    <a href='comprobarVentas.php'>Comprobar Ventas </a><br>-->


<?php
}else{
    echo "Usuario y/o Contraseña incorrectos";
}

?>
</body>
</html>