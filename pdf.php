<?php
define('FPDF_FONTPATH','font/');
require_once ("fpdf.php");

require_once "php/conexion.php";

session_start();
$codigo=$_SESSION['codigo'];
$sql="select * from usuario where codigo ='$codigo' ";

$result = $cnx->query($sql);

if($registro = $result->fetchObject()){
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',40);
    $pdf->Cell(180,10,'CARNET DE ASISTENCIA',0,1,'C');
    $pdf->Ln(20);
    $pdf->SetFont('Arial', 'B', 12); //0
    $pdf->Cell(70, 10, '', 0);
    $pdf->Cell(500, 50,$pdf->Image('imagenes/'.$registro->imagen, $pdf->GetX(), $pdf->GetY(),50), 0);
    $pdf->Ln(80);
    $pdf->SetFont('Arial', 'I', 12); //1
    $pdf->Cell(50, 10, '', 0);
    $pdf->Cell(50, 10, 'Codigo', 1);
    $pdf->Cell(50, 10,$registro->codigo, 1);
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'I', 12); //2
    $pdf->Cell(50, 10, '', 0);
    $pdf->Cell(50, 10, 'Nombres', 1);
    $pdf->Cell(50, 10,$registro->nombres, 1);
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'I', 12); //3
    $pdf->Cell(50, 10, '', 0);
    $pdf->Cell(50, 10, 'Apellido Paterno', 1);
    $pdf->Cell(50, 10, $registro->apepaterno, 1);
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'I', 12); //4
    $pdf->Cell(50, 10, '', 0);
    $pdf->Cell(50, 10, 'Apellido Materno', 1);
    $pdf->Cell(50, 10, $registro->apematerno, 1);
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'I', 12); //5
    $pdf->Cell(50, 10, '', 0);
    $pdf->Cell(50, 10, 'Facultad', 1);
    $pdf->Cell(50, 10, $registro->facultad, 1);
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'I', 12); //5
    $pdf->Cell(50, 10, '', 0);
    $pdf->Cell(50, 10, 'Escuela', 1);
    $pdf->Cell(50, 10, $registro->escuela, 1);
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'I', 12); //5
    $pdf->Cell(50, 10, '', 0);
    $pdf->Cell(50, 10, 'Universidad', 1);
    $pdf->Cell(50, 10, $registro->universidad, 1);
    $pdf->Output(); 
}


?>