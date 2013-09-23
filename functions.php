<?php

/**
 * @author Victor
 * @copyright 2013
 */

/*funciones*/

require_once("conectarBBDD.php");

class Functions{
    
    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "";
    private $base = "bq";
    
    
    function __construct($bd="vacio"){
       //Aqu&iacute; inicializaremos la conexi&oacute;n con la Bbd2D
        if($bd2=="vacio"){
            require_once('conectarBBDD.php');       
            $this->bd = new conectarBBDD($this->servidor,$this->usuario,$this->password,$this->base);
        }   
        else{
            $this->bd = $bd;
        }
    }
    
    function imprimirProductosSelect(){
        $query = "SELECT * FROM productos";
        $recogeQuery = $this->bd->consulta($query);
        //echo $query;
        //$this->bd
        
        while($fila = $this->bd->extraer()){
            echo "<option value=" . $fila['id_producto'] .  ">" . $fila['nombre_producto'] . "</option>";
            }
        
    }
    
    function imprimirProductosTable(){
        $query = "SELECT * FROM productos";
        $recogeQuery = $this->bd->consulta($query);

        
        while($fila = $this->bd->extraer()){
            echo "<tr><td>" . $fila['id_producto'] .  "</td><td>" . $fila['nombre_producto'] . "</td><td>" . $fila['descripcion'] . "</td><td><input type='button' value='Editar' /></td><td><input type='button' value='Borrar' /></td></tr>";
            }
        
    }
    
    function imprimirPeticiones(){
        $query = "SELECT * FROM devoluciones";
        $recogeQuery = $this->bd->consulta($query);

        while($fila = $this->bd->extraer()){
            echo "<tr><td>" . $fila['id_devolucion'] .  "</td><td>" . $fila['nombre'] . "</td><td>" . $fila['apellido1'] . "</td><td>" . $fila['apellido2'] . "</td><td>" . $fila['email'] . "</td><td>" . $fila['numero_pedido'] . "</td><td>" . $fila['producto'] . "</td><td>" . $fila['numero_serie'] . "</td><td>" . $fila['motivo'] . "</td><td>" . $fila['estado'] . "</td><td><input type='button' value='Aceptar' /></td><td><input type='button' value='Denegar' /></td></tr>";
            }
        
    }
    

    
    function insertarDevolucion($id,$nombre,$apellido1, $apellido2, $email, $num_pedido, $producto, $num_serie, $motivo, $estado){
        //Insertar la devolucion en la BBDD, llamando al metodo inserta creado en conectarBBDD
        $query = "INSERT INTO devoluciones values ('$id','$nombre','$apellido1', '$apellido2', '$email', '$num_pedido', '$producto', '$num_serie', '$motivo', '$estado')";
        $this->bd->inserta($query);
    }
    
    function generarPDF(){
        //Manual FPDF de desarrolloweb http://www.desarrolloweb.com/manuales/manual-fpdf.html
    }
    
    function enviarEmail(){
        //Despues de generar el PDF enviamos el email (mirar como anexarlo), supogno que tendre que probarlo desde un hosting publico
    }
    
    function comprobarLogin(){
        //Comprobar que el login de usuario administrador es correcto, muy facil
    }
}
?>