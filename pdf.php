<?php

/**
 * @author Victor
 * @copyright 2013
 */

require_once('fpdf.php');
class PDF extends FPDF
{
   //Cabecera de página
   function Header(){

        $this->Image('logo_bq.jpg',10,8,33);

        $this->SetFont('Arial','B',12);

        //$this->Cell(30,10,'Title',1,0,'C');

   }
   
   //Pie de página
    function Footer(){

        $this->SetY(-10);
        
        $this->SetFont('Arial','I',8);
        
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
   }


}

?>