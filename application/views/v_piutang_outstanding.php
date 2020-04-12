<?php $this->load->view("_partials/head.php") ?>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("_partials/sidebar.php") ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <?php $this->load->view("_partials/navigation.php") ?>
	  <div class="card-header">
			<?php $this->load->view("_partials/breadcrumb.php") ?>
		</div>
			
	  
      <!-- DataTables -->
				
					<div class="card-header">
					<h6> Data Pembayaran</h6>
					<table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No Pembayaran</th>
										<th>Tanggal</th>
										<th>Pembeli</th>
										<th>Nominal</th>
										<th>Terbayarkan</th>
										<th>Sisa</th>										
										<th>Keterangan</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td width="140">
											<?php echo $pembayaran->no_pembayaran ?>
										</td>
										<td width="100">
											<?php echo $pembayaran->tgl_transaksi ?>
										</td>
										<td>
											<?php echo $pembayaran->nama_pembeli ?>
										</td>
										<td  width="100" align="right">
										<?php echo number_format($pembayaran->nominal) ?>
										</td>
										<td  width="100" align="right"> 
										<?php echo number_format($pembayaran->terbayarkan) ?>
										</td>
										<td  width="100" align="right">
											<?php echo number_format($pembayaran->nominal -$pembayaran->terbayarkan) ?>
										</td>
										<td>
											<?php echo $pembayaran->keterangan ?>
										</td>
										
									</tr>
									

								</tbody>
							</table>

					
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<form action="<?php echo site_url('pembayaran/bayar_piutang'); ?>" method="post">
							
							<table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>No Transaksi</th>
										<th>Tanggal</th>
										<th>Pembeli</th>
										<th>Nominal</th>
										<th>Terbayar</th>
										<th>Sisa</th>
										<th>Akan Dibayar</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no = 0;
										foreach ($piutangs as $piutang): 
									?>
									<tr>
										<td width="40">
											<?php $no++; echo $no;  ?>
										</td>
										
										<td width="110"> 
											<?php echo $piutang->no_transaksi ?>
										</td>
										<td width="100">
											<?php echo $piutang->tgl_transaksi ?>
										</td>
										<td width="150">
											<?php echo $piutang->nama ?>
										</td>
										<td align="right">
											<?php echo number_format($piutang->nominal) ?>
										</td>
										<td align="right">
											<?php echo number_format($piutang->terbayar) ?>
										</td>
										<td align="right">
											<?php echo number_format($piutang->nominal- $piutang->terbayar) ?>
										</td>
										<td width="150">
											<?php
												$sisa_bayar = $pembayaran->nominal -$pembayaran->terbayarkan; 
												if (($piutang->nominal - $piutang->terbayar) >= $sisa_bayar){
													$sisa_piutang = $sisa_bayar;
												} else {
													$sisa_piutang = $piutang->nominal - $piutang->terbayar;
												}
											?>
											<input type="hidden" name="<?php echo 'tgl_transaksi' . $no?>" value="<?php echo date("Y-m-d")?>" />
											<input type="hidden" name="<?php echo 'no_transaksi' . $no?>" value="Otomatis" />
											<input type="hidden" name="<?php echo 'settlement_id' . $no?>" value="" />
											<input type="hidden" name="<?php echo 'no_transaksi' . $no?>" value="Otomatis by System" />
											<input type="hidden" name="<?php echo 'pembayaran_id' . $no?>" value="<?php echo $pembayaran->pembayaran_id?>" />
											<input type="hidden" name="<?php echo 'piutang_id' . $no?>" value="<?php echo $piutang->piutang_id?>" />
					
											<input type="number" name="<?php echo 'nominal'.$no?>" placeholder="0" value="<?php echo $sisa_piutang  ?>"/>	
										</td>
										<td width="100">
										<input class="btn btn-success" type="submit" name="<?php echo 'btn'.$no ?>" value="Bayar" />
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
							</form>
							<br/>
							<?php 
							// echo $pagination;
							?>
						</div>
				</div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php $this->load->view("_partials/scrolltop.php") ?>
  <?php $this->load->view("_partials/footer.php") ?>
  <?php $this->load->view("_partials/modal.php") ?>
  <?php $this->load->view("_partials/js.php") ?>

  
  <script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>

</body>

</html>
