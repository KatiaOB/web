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
require('conexion.php');
$rs = mysql_query($sql);
$value="RFC\tNOMBRE\tEDAD\tSEXO\n";
while($row = mysql_fetch_array($rs)){
	$value .= $row[0];
   	$value .= "\t".$row[1];
   	$value .= "\t".$row[2];
   	$value .= "\t".$row[3];
   	$value .= "\n";
}
$data=$value;
$data = str_replace("\r", "", $data);
if ($data == "") {
	$data = "\nNo Hay Registros que Mostrar\n";
}
header('Content-Type: application/vd.ms-word');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header("Content-Disposition: attachment; filename= datos.doc");
header("Pragma: no-cache");
header("Expires: 0");
echo utf8_decode($data);
ob_end_flush();
?>