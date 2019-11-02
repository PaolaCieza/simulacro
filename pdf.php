<?php
define('FPDF_FONTPATH','font/');
require_once "fpdf.php";

require_once "php/conexion.php";

session_start();
$dni=$_SESSION['codigo'];
$sql="select * from usuario where codigo = $codigo";

$result = $cnx->query($sql);

$pdf=new FPDF();

$pdf->AddPage(); 

$pdf->SetFont('Arial','B',16);
$pdf->Cell(180,10,'CARNET DE ASISTENCIA',0,1,'C');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,100,"Foto",1);
$pdf->Cell(40,6,"Código",1);
$pdf->Cell(40,6,"Nombres",1);
$pdf->Cell(40,6,"Apellido Paterno",1);
$pdf->Cell(40,6,"Apellido Materno",1);
$pdf->Cell(40,6,"Facultad",1);
$pdf->Cell(40,6,"Escuela",1);
$pdf->Cell(20,6,"Universidad",1);
$pdf->Ln();
$pdf->SetFont('Arial','I',10);
while($registro=$result->fetchObject())
{
    $pdf->Cell(100,50,$pdf->Image($registro->imagen, $pdf->GetX(), $pdf->GetY(),50),0);
    $pdf->Cell(40,5,$registro->codigo,0);
	$pdf->Cell(40,5,$registro->nombres,0);
	$pdf->Cell(40,5,$registro->apepaterno,0);
	$pdf->Cell(40,5,$registro->apematerno,0);
	$pdf->Cell(40,5,$registro->facultad,0);
	$pdf->Cell(40,5,$registro->escuela,0);
	$pdf->Cell(40,5,$registro->universidad,0);
	$pdf->Ln();
}
$pdf->Output();
?>