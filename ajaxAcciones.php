<?php

/**
 * @author Victor
 * @copyright 2013
 */
require_once('functions.php');
$funciones = new Functions();

if(isset($_POST['accion']) && !empty($_POST['accion'])) {
    
    $accion = $_POST['accion'];
    //Me falta por conseguir este dato, VOY A CENAR!!
    
    switch($accion){
        
        case 'aceptar':
            $id = $_POST['id_devolucion'];
            $funciones->cambioEstado($id, 1);
            echo "Aceptado";
            break;
            
        case 'denegar':
            $id = $_POST['id_devolucion'];
            $funciones->cambioEstado($id, 2);
            echo "Denegado";
            break;
            
        case 'editar':
            $id = $_POST['id_producto'];
            $nombreProducto = $_POST['nombre_producto'];
            $descripcion = $_POST['descripcion'];
            echo ($descripcion);
            $funciones->editarProducto($id, $nombreProducto, $descripcion);
            break;
        case 'borrar':
            $id = $_POST['id_producto'];
            $funciones->borrarProducto($id);
            break;
        case 'anadir':
            $nombreProducto = $_POST['nombre_producto'];
            $descripcion = $_POST['descripcion'];
            $funciones->anadirProducto($nombreProducto, $descripcion);
            break;
        default:
            echo "Algo falla aquí, ninguna de las acciones es correcta";
            break;
    }

}
?>