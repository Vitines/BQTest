<?php
/**
 * Created by PhpStorm.
 * User: djpeta
 * Date: 31/01/14
 * Time: 19:27
 */

session_start();

require_once("lib/functions.php");
$funciones = new Functions();

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

if($_POST){
    $nombre=$_POST['nombre'];
    $apellido1=$_POST['apellido1'];
    $apellido2=$_POST['apellido2'];
    $email=$_POST['email'];
    $num_pedido=$_POST['num_pedido'];
    $producto=$_POST['productos'];
    $num_serie=$_POST['num_serie'];
    $motivo=$_POST['motivo'];

    $resul=$funciones->insertarDevolucion($id = '',$nombre,$apellido1, $apellido2, $email, $num_pedido, $producto, $num_serie, $motivo, $estado = 0);
    $idPedido = mysql_insert_id();

    $nombreProducto = $funciones->nombrePorId($producto);
    $nombreFichero = $funciones->generarPDF($idPedido,$nombre,$apellido1, $apellido2, $email, $num_pedido, $nombreProducto, $num_serie, $motivo);
    $funciones->enviaEmail($nombre, $apellido1, $apellido2, $email, $idPedido, $nombreFichero);

    echo "<br>Reclamacion realizada con numero " . $idPedido;
}




?>