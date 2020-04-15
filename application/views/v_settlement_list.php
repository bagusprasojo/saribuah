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
						<a href="<?php echo site_url('pembayaran') ?>"><i class="fas fa-plus"></i> Menuju ke Daftar Pembayaran</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<form action="<?php echo site_url('settlement/index/'); ?>" method="post">
							<p>
								No Settlement <input value="<?php echo $nomor_settlement?>" type="search" name="cari" placeholder="Search Keyword..."> <input type="submit" name="btn_submit" value="Search">
							</p>

							<table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
                                        <th>No Settlement</th>
										<th>Tanggal</th>
                                        <th>No Pembayaran</th>
										<th>No Piutang</th>
										<th>Pembeli</th>
										<th>Nominal</th>
										<th>Keterangan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no = $this->uri->segment('3') + 1;
										foreach ($settlements as $settlement): 
									?>
									<tr>
										<td>
											<?php echo $no++ ?>
										</td>
										
										<td width="140">
											<?php echo $settlement->no_transaksi ?>
										</td>
										<td width="100">
											<?php echo $settlement->tgl_transaksi ?>
										</td>
										<td width="140">
											<?php echo $settlement->no_pembayaran ?>
										</td>
										<td width="140">
											<?php echo $settlement->no_piutang ?>
										</td>
										<td>
											<?php echo $settlement->nama_pembeli ?>
										</td>
										<td  width="100" align="right">
										<?php echo number_format($settlement->nominal) ?>
										</td>
										<td>
											<?php echo $settlement->keterangan ?>
										</td>
										<td width="100">
											<a onclick="deleteConfirm('<?php echo site_url('pembayaran/delete/'.$settlement->pembayaran_id) ?>')"
												href="#!" > Hapus</a>
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
