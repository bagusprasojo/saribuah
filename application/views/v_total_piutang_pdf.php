<?php

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Total Pembayaran');
$pdf->SetHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');

// set font
$pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();

$pdf->Write(0, 'Total Pembayaran', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 11);

// -----------------------------------------------------------------------------

$html = '<p></p>' . 
        '<table border="0">' .
        '<tr><td style="width:50">Per</td><td width="10">:</td><td>' . date("Y-M-d") . '  </td></tr>' .  
        '</table>';
        
$pdf->writeHTML($html, true, false, false, false, '');

$total  = 0;
$td     = "";
$no     = 0;

foreach ($piutangs as $piutang):
    $no++;
    $td                 = $td . '<tr><td align="right">' . $no . ' </td><td>' . $piutang->nama . '</td><td>' . $piutang->alamat . '</td><td align="right">' . number_format($piutang->piutang) . '</td></tr>';  
    $total              = $total + $piutang->piutang;
endforeach;

$html = '<br>' . 
        '<table cellspacing="0" cellpadding="2" width="100%" border="1">' .
        '<tr align="center"><th style="width:25">No</th><th width="100">Nama</th><th width="300">Alamat</th><th width="100">Sisa Piutang</th></tr>' .
        $td .
        '<tr><td colspan="3" align="right">Total </td><td align="right">' . number_format($total) . '</td></tr>' .
        '</table>';

$pdf->writeHTML($html, true, false, false, false, '');

$pdf->Output('SisaPiutang.pdf', 'I');
?>