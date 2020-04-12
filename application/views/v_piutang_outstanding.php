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
						<a href="<?php echo site_url('piutang/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<form action="<?php echo site_url('piutang/index/'); ?>" method="post">
							
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
											<div>
												<input type="number" name="<?php echo 'nominal'.$no?>" placeholder="0" value="<?php echo $piutang->nominal - $piutang->terbayar  ?>"/>						
											</div>
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
