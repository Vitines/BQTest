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
    $id = $_POST['id_devolucion'];
    
    switch($accion){
        
        case 'aceptar':
            $funciones->cambioEstado($id, 1);
            echo "Aceptado";
            break;
            
        case 'denegar':
            $funciones->cambioEstado($id, 2);
            echo "Denegado";
            break;
            
        case 'editar':
            break;
        case 'borrar':
            break;
        case 'anadir':
            break;
        default:
            echo "Algo falla aquí, ninguna de las acciones es correcta";
            break;
    }

}
?>