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
       //Aqu&iacute; inicializaremos la conexi&oacute;n con la BBDD
        if($bd=="vacio"){
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
    
    function nombrePorId($id){
        $query = "SELECT nombre_producto FROM productos WHERE id_producto = " . $id;
        $recogeQuery = $this->bd->consulta($query);
        $fila = $this->bd->extraer();
        return $fila['nombre_producto'];
        
    }
    
    function generarPDF($idPedido,$nombre,$apellido1, $apellido2, $email, $num_pedido, $producto, $num_serie, $motivo){
        
        //He de pasarle como parametros todos los datos que saldran en el PDF
        
        $nombreFichero = 'Archivos/Devol' . $idPedido . '.pdf';
        $tituloArchivo = 'Reclamacion numero: ' . $idPedido;
        //Incluimos la libreria e instanciamos un objeto de esta 'estandar': formato alargado y medido en mm y tamaño A4
        require_once("FPDF/fpdf.php");
        $pdf = new FPDF();
        //Anadimos la primera pagina
        $pdf->AddPage();
        //Seleccionamos la fuente, imprescindible para que el documento sea valido ('Font-family', font-weight, size)
        $pdf->SetFont('Arial', 'B', 16);
        //Dentro de Cell escribimos el contenido de la pagina. Parametros: (ancho, alto, contenido, borde, ln, align, fill, link)
        /*
        Ejemplo de uso: 
        $pdf->Cell(10,10,'Estamos viendo',1,1,'C');
        Ancho 10mm, Alto 10mm, Contenido: 'Estamos viendo', borde 1mm, se escribira al comienzo de la siguiente linea, alineado al centro
        */
        $pdf->Cell(150, 10, $tituloArchivo, 1, 1);
        $pdf->Cell(150, 10, ('Nombre del usuario: ' . $nombre), 1, 1);
        $pdf->Cell(150, 10, ('Apellidos: ' . $apellido1 . ' ' . $apellido2), 1, 1);
        $pdf->Cell(150, 10, ('Correo electronico: ' . $email), 1, 1);
        $pdf->Cell(150, 10, ('Numero de pedido: ' . $num_pedido), 1, 1);
        $pdf->Cell(150, 10, ('Nombre del producto: ' . $producto), 1, 1);
        $pdf->Cell(150, 10, ('Numero de serie del producto: ' . $num_serie), 1, 1);
        $pdf->Cell(150, 10, ('Motivo de la reclamacion: ' . $motivo), 1, 1);
        $pdf->Cell(150, 10, ('Debes imprimir este archivo para adjuntarlo a la reclamacion'), 0, 1);
        
        $pdf->Image('logo_bq.jpg', 20 ,112, 150 , 38,'JPG', 'http://www.bqreaders.com');
        
        $pdf->Cell(250, 10, ('Para cualquier duda o consulta escribenos a soporte@bq.com'), 0, 1);
        //Con Output cerramos el archivo para poder utilizarlo
        //Parametros: (nombre del fichero a guardar, como se va a guardar)
        /*
        Ejemplo de uso: 
        $fpdf->Output('prueba','F');
        Nombre del fichero: 'prueba'. Se guarda en un archivo local con ese nombre
        */
        //Pasamos los parametros al generar el tema
        $pdf->Output($nombreFichero, 'F');
        
    }
    
    function enviarEmail($nombre, $apellido1, $apellido2, $email, $idPedido){
        //Despues de generar el PDF enviamos el email (mirar como anexarlo), supongo que tendre que probarlo desde un hosting publico
        
        $emailDestino = $email;
        
    	$headers = "MIME-Version: 1.0" . "\r\n";
    	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    
    	// More headers
    	$headers .= 'From: BQ <no-reply@bq.com>' . "\r\n";
        $texto = "<html><body>" . 
                "<p>Estimado " . $nombre. " " . $apellido1 . " " . $apellido2 . ": </p>" . 
                "<p>Su reclamacion ha sido recibida con número " . $idPedido . ": </p>" . 
                "<p>En breve nos pondremos en contacto con usted </p>" . 
                "<p>No olvide imprimir el PDF anexado para llevar a cabo la reclamación. </p>" . 
                "<p>Reciba un cordial saludo del equipo de soporte de BQ Readers. </p>"
                ;
        mail($emailDestino, $texto, $headers);
        echo $texto;
    }
    
    function envia_contacto(){
    	
    	
    	mail($email_destino,"Formulario de contacto","<html><body>
    	<p><img src='http://www.quetalento.com/images/cabecera-email-que-talento.jpg'></p>
    	<p>Nombre: $nombre</p>
    	<p>Apellidos: $apellidos</p>
    	<p>Email: $email</p>
    	<p>Telefono: $telefono</p>
    	<p>Descripcion: $descripcion</p>
    	",$headers);
    	
    	
    	echo "<br/>Muchas gracias por enviarnos tu petición.
    			<br/>En breve nos pondremos en contacto contigo.
    			<br/><br/><img src='../../images/logo.jpg' alt=''/>";
}
    
    
    
    function comprobarLogin(){
        //Comprobar que el login de usuario administrador es correcto, muy facil
    }
}
?>