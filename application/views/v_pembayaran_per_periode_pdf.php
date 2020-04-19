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
        '<tr><td style="width:50">Periode</td><td width="10">:</td><td>' . $periode1 . ' s.d. ' . $periode2 . '  </td></tr>' .  
        '</table>';
        
$pdf->writeHTML($html, true, false, false, false, '');

$total  = 0;
$total_terbayarkan = 0;
$td     = "";
$no     = 0;
foreach ($pembayarans as $pembayaran):
    $no++;
    $td                 = $td . '<tr><td align="right" style="width:25">' . $no . ' </td><td>' . $pembayaran->no_pembayaran . '</td><td>' . $pembayaran->nama_pembeli . '</td><td>' . $pembayaran->tgl_transaksi . '</td><td>' . $pembayaran->keterangan . '</td><td align="right">' . number_format($pembayaran->nominal) . '</td><td align="right">' . number_format($pembayaran->terbayarkan) . '</td><td align="right">' . number_format($pembayaran->nominal - $pembayaran->terbayarkan) . '</td></tr>';  
    $total              = $total + $pembayaran->nominal;
    $total_terbayarkan  = $total_terbayarkan + $pembayaran->terbayarkan; 
endforeach;

$html = '<br>' . 
        '<table cellspacing="0" cellpadding="2" width="100%" border="1">' .
        '<tr align="center"><th style="width:25">No</th><th width="70">No<br>Pembayaran</th><th width="90">Pembeli</th><th width="65">Tanggal</th><th width="70">Keterangan</th><th width="80">Nominal</th><th width="70">Terbayarkan</th><th width="70">Sisa</th></tr>' .
        $td .
        '<tr><td align="right" colspan="5">Total </td><td align="right">' . number_format($total) . '</td><td align="right">' . number_format($total_terbayarkan) . '</td><td align="right">' . number_format($total-$total_terbayarkan) . '</td></tr>' .
        '</table>';

$pdf->writeHTML($html, true, false, false, false, '');

$pdf->Output('TotalPembayaran.pdf', 'I');
?>