<?php 
require('fpdf.php');
require 'functions.php';
if (isset($_POST['create_ticket'])) {
    //fetch data
    $ticket_first_name = strip_tags($_POST['firstname']);
    $ticket_last_name = strip_tags($_POST['lastname']);
    $ticket_block_id = $_POST['block_id'];
    $ticket_amount = strip_tags($_POST['amount']);
    $ticket_time = $_POST['block_time'];
    $ticket_date = "2022/06/02";

    //save to db
    $ticket_id = createTicket($ticket_first_name, $ticket_last_name, $ticket_block_id, $ticket_amount, $ticket_time, $ticket_date);
    
    // setting page and template
    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->Image('media/Ticket-template.gif',0,0, 210);

    //draw on pdf
    $pdf->SetFont('Arial','',36);
    $pdf->SetY(95);
    $pdf->SetX(10);
    $pdf->Cell(80,20, $ticket_time);
    $pdf->SetY(110);
    $pdf->Cell(80,20, $ticket_date);
    $pdf->SetY(125);
    $pdf->Cell(80,20, $ticket_block_id.'. Filmblock');

    $pdf->SetFont('Arial','',18);
    $pdf->SetY(95);
    $pdf->SetX(105);
    $pdf->Cell(80,10,'ID:'.$ticket_id);
    $pdf->SetY(105);
    $pdf->SetX(105);
    $pdf->Cell(80,10,$ticket_first_name.' '.$ticket_last_name);

    $pdf->SetY(127);
    $pdf->SetX(105);
    $pdf->Cell(80,10, $ticket_amount.'x Sitzplatz');
    $pdf->SetY(137);
    $pdf->SetX(105);
    $pdf->Cell(80,10,'Freie Platzwahl');


    // save as pdf
    $pdf->SetTitle("Rundgang Ticket ".$ticket_id);
    $pdf->Output();
}else{
    // if user visits this page manually without post data
    header('Location: /tickets.php');
}
?>