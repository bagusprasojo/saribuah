<?php

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Tagihan Piutang');
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

$pdf->Write(0, 'Tagihan Piutang', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 11);

// -----------------------------------------------------------------------------

$html = '<p></p>' . 
        '<table border="0">' .
        '<tr><td style="width:50">Periode</td><td width="10">:</td><td>' . $periode1 . ' s.d. ' . $periode2 . '  </td></tr>' .  
        '<tr><td>Nama</td><td>:</td><td>' . $pembeli->nama . '</td></tr>' .  
        '<tr><td>Alamat</td><td>:</td><td>' . $pembeli->alamat . '</td></tr>' .  
        '</table>';
        
$pdf->writeHTML($html, true, false, false, false, '');

$total  = $saldoawal;
$td     = "";
$no     = 2;
foreach ($piutangs as $piutang):
    $td = $td . '<tr><td align="right" style="width:30">' . $no . ' </td><td>' . $piutang->no_transaksi . '</td><td>' . $piutang->tgl_transaksi . '</td><td>' . $piutang->keterangan . '</td><td align="right">' . number_format($piutang->nominal - $piutang->terbayar) . '</td></tr>';  
    $no++;
    $total = $total + ($piutang->nominal - $piutang->terbayar); 
endforeach;

$html = '<p></p>' . 
        '<table cellspacing="0" cellpadding="2" width="100%" border="1">' .
        '<tr align="center"><th style="width:30">No</th><th width="100">No Transaksi</th><th width="80">Tanggal</th><th width="220">Keterangan</th><th>Nominal</th></tr>' .
        '<tr><td align="right" style="width:30">1</td><td>Saldo Awal</td><td>' . $periode1 . '</td><td>-</td><td align="right">' . number_format($saldoawal) . '</td></tr>' .
        $td .
        '<tr><td align="right" colspan="4">Total </td><td align="right">' . number_format($total) . '</td></tr>' .
        '</table>';

$pdf->writeHTML($html, true, false, false, false, '');

$pdf->Output('TagihanPiutang.pdf', 'I');
?>