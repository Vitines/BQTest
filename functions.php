<?php

/**
 * @author Victor
 * @copyright 2013
 */

/*funciones*/

require_once("conectarBBDD.php");

class Functions{
    
    function imprimirProductos(){
        $query = "SELECT * FROM productos ORDER BY id_producto";
        
    }
    
    function comprobarLogin(){}
    
    function introducirEnBBDD(){}

}
?>