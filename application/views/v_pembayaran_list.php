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
						<a href="<?php echo site_url('pembayaran/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<form action="<?php echo site_url('pembayaran/index/'); ?>" method="post">
							<p>
								No Pembayaran <input value="<?php echo $nomor_pembayaran?>" type="search" name="cari" placeholder="Search Keyword..."> <input type="submit" name="btn_submit" value="Search">
							</p>

							<table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>No Pembayaran</th>
										<th>Tanggal</th>
										<th>Pembeli</th>
										<th>Nominal</th>
										<th>Terbayarkan</th>
										<th>Sisa</th>										
										<th>Keterangan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no = $this->uri->segment('3') + 1;
										foreach ($pembayarans as $pembayaran): 
									?>
									<tr>
										<td>
											<?php echo $no++ ?>
										</td>
										
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
										<td width="250">
											<a class="btn btn-primary" href="<?php echo site_url('pembayaran/settlement_piutang/'.$pembayaran->pembayaran_id) ?>">
												 Settlement  </a> 

											<?php if ($pembayaran->terbayarkan <= 0){?>
											<a class="btn btn-primary" href="<?php echo site_url('pembayaran/edit/'.$pembayaran->pembayaran_id) ?>">
												 Edit </a>
											<a onclick="deleteConfirm('<?php echo site_url('pembayaran/delete/'.$pembayaran->pembayaran_id) ?>')"
												href="#!" class="btn btn-danger"> Hapus</a>

											<?php } ?>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
							</form>
							<br/>
							<?php 
							echo $pagination;
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
