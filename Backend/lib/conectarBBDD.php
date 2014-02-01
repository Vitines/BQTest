<?php

/**
 * @author Victor
 * @copyright 2013
 */


class conectarBBDD{
    
    
    private $servidor;
    private $usuario;
    private $pass;
    private $baseDeDatos;
    private $conexion;
    
    public function __construct($servidor,$usuario,$pass,$baseDeDatos){
        $this->servidor = $servidor;
        $this->usuario = $usuario;
        $this->pass = $pass;
        $this->baseDeDatos = $baseDeDatos;
        $this->conectarBaseDeDatos();
        
    }
    
    private function conectarBaseDeDatos(){
        
        $this->conexion = mysql_connect($this->servidor,$this->usuario,$this->pass);
        mysql_select_db($this->baseDeDatos,$this->conexion);
        
    }
    
    public function cerrarConexion(){
        mysql_close($this->conexion);
    }
    
    public function consulta($consulta){
        $this->resultado = mysql_query($consulta,$this->conexion);
    }
    
    public function inserta($consulta){
        
        $this->resultado = mysql_query($consulta,$this->conexion);
        
    }
    
    public function borra($consulta){
        
        $this->resultado = mysql_query($consulta,$this->conexion);
    }
    
    public function extraer(){
        if($fila = mysql_fetch_array($this->resultado,MYSQL_ASSOC)){
            return $fila;
        }else{
            return false;
        }
    }
}
?>