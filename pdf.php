<?php
ob_start();
$buscar1=strtoupper($_REQUEST['buscar1']);
$criterios=$_REQUEST['criterios'];
if ($buscar1!="" or $criterios=='Todos'  ) {
       if ($criterios=='Nombre') {
            $sql="SELECT rfc,nombre,edad,sexo FROM clientes WHERE nombre LIKE '$buscar1%' ORDER BY rfc"; 
       }
        if ($criterios=='Todos') {
                $sql="SELECT rfc,nombre,edad,sexo FROM clientes ORDER BY rfc"; 
        }
}
require('fpdf/fpdf.php');//fpdf path
require('conexion.php');
$rs = mysql_query($sql);
$header="RFC\t\t\t\t\t\t\t\t\t\tNOMBRE\t\t\t\t\t\t\t\t\t\tEDAD\t\t\t\t\t\t\t\t\t\tSEXO\n";
$c_code = "";
$c_name = "";
$c_price = "";
$c_sexo="";
while($row = mysql_fetch_array($rs)){
$code =$row['rfc'];
$name = $row['nombre'];
$price = $row['edad'];
$sexo = $row['sexo'];

 $c_code = $c_code.$code."\n";
 $c_name = $c_name.$name."\n";
 $c_price = $c_price.$price."\n";
 $c_sexo = $c_sexo.$sexo."\n";


}
mysql_close();

$pdf=new FPDF();
$pdf->AddPage();
//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY(20);
$pdf->SetX(45);
$pdf->MultiCell(120,6,$header,1);
$pdf->SetY(26);
$pdf->SetX(45);
$pdf->MultiCell(40,6,$c_code,1);
$pdf->SetY(26);
$pdf->SetX(85);
$pdf->MultiCell(60,6,$c_name,1);
$pdf->SetY(26);
$pdf->SetX(85);
$pdf->MultiCell(20,6,$c_price,1);
$pdf->SetY(145);
$pdf->SetX(120);
$pdf->MultiCell(20,6,$c_sexo,1);

$filename="invoice.pdf";
$pdf->Output($filename,'F');
echo utf8_decode($header."\n".$c_code."\n".$c_code);
ob_end_flush();
?>