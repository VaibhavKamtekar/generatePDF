<?php
if(!empty($_POST['btn']))
{
    $name = $_POST['name'];
    $sem = $_POST['sem'];
    $pc = $_POST['pc'];
    $pn = $_POST['pn'];
    $cc1 = $_POST['cc1'];
    $cc2 = $_POST['cc2'];
    $cc3 = $_POST['cc3'];
    $cc4 = $_POST['cc4'];
    $ec1 = $_POST['ec1'];
    $cc5 = $_POST['cc5'];

    require("fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf-> AddPage();

    $pdf->SetFont("Arial","",16);
    $pdf->Cell(0,10,"FORM DETAILS",1,1,'C');
    $pdf->Ln();
    $pdf->Cell(80,10,"Name   :",0,0);
    $pdf->Cell(50,10,"$name",0,1);
    $pdf->Ln();
    $pdf->Cell(80,10,"Semester   :",0,0);
    $pdf->Cell(50,10,"$sem",0,1);
    $pdf->Ln();
    $pdf->Cell(80,10,"Programme Code   :",0,0);
    $pdf->Cell(60,10,"$pc",0,1);
    $pdf->Ln();
    $pdf->Cell(80,10,"Programme Name   :",0,0);
    $pdf->Cell(60,10,"$pn",0,1);
    $pdf->Ln();
    $pdf->Cell(80,10,"Programme Name   :",0,0);
    $pdf->Cell(60,10,"$pn",0,1);
    $pdf->Ln();
    $pdf->Cell(80,10,"Compulsory Subject 1:",0,0);
    $pdf->Cell(80,10,"$cc1",0,1);
    $pdf->Ln();
    $pdf->Cell(80,10,"Compulsory Subject 2:",0,0);
    $pdf->Cell(80,10,"$cc2",0,1);
    $pdf->Ln();
    $pdf->Cell(80,10,"Compulsory Subject 3:",0,0);
    $pdf->Cell(80,10,"$cc3",0,1);
    $pdf->Ln();
    $pdf->Cell(80,10,"Compulsory Subject 4:",0,0);
    $pdf->Cell(80,10,"$cc4",0,1);
    $pdf->Ln();
    $pdf->Cell(80,10,"Elective Subject 1:",0,0);
    $pdf->Cell(80,10,"$ec1",0,1);
    $pdf->Ln();
    $pdf->Cell(80,10,"Compulsory Subject 5:",0,0);
    $pdf->Cell(80,10,"$cc5",0,1);
    $pdf->output();


}
?>