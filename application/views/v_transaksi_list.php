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
						<a href="<?php echo site_url('transaksi/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<form action="<?php echo site_url('transaksi/index/'); ?>" method="post">
							<p>
								Nama <input value ="<?php echo $nama?>" type="search" name="cari" placeholder="Search Keyword..."> 
								Periode
								<input	type="date" name="tanggal1" value="<?php echo $tanggal1?>" /> s.d. 
								<input	type="date" name="tanggal2" value="<?php echo $tanggal2?>"/>
						
								<input type="submit" name="btn_submit" value="Search">
							</p>

							<table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Kode</th>
										<th>Nama</th>
										<th>Stok Awal</th>
										<th>Datang</th>
										<th>Baru</th>
										<th>Lama</th>
										<th>Total</th>
										<th>Laku</th>
										<th>HPP</th>
										<th>HPJ</th>
										<th>Stok Akhir</th>
										<th>Total Modal</th>
										<th>Modal</th>
										<th>Payon</th>
										<th>Laba</th>
										<th>Sisa Modal</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no = $this->uri->segment('3') + 1;
										foreach ($transaksis as $transaksi): 
									?>
									<tr>
										<td>
											<?php echo $no++ ?>
										</td>
										
										<td width="150">
											<?php echo $transaksi->kode_produk ?>
										</td>
										<td width="330">
											<?php echo $transaksi->nama_produk ?>
										</td>
										<td>
											<?php echo $transaksi->stockawal ?>
										</td>
										<td>
											<?php echo $transaksi->datang ?>
										</td>
										<td>
											<?php echo $transaksi->baru ?>
										</td>
										
										<td>
											<?php echo $transaksi->lama ?>
										</td>
										
										<td>
											<?php echo $transaksi->total ?>
										</td>
										
										<td>
											<?php echo $transaksi->laku ?>
										</td>

										<td>
											<?php echo $transaksi->hpp ?>
										</td>
										
										<td>
											<?php echo $transaksi->hpj ?>
										</td>
										
										<td>
											<?php echo $transaksi->stockakhir ?>
										</td>
										
										<td>
											<?php echo $transaksi->totalmodal ?>
										</td>

										<td>
											<?php echo $transaksi->modal ?>
										</td>
										
										<td>
											<?php echo $transaksi->payon ?>
										</td>

										<td>
											<?php echo $transaksi->laba ?>
										</td>

										<td>
											<?php echo $transaksi->sisamodal ?>
										</td>



										<td width="250">
											<a  href="<?php echo site_url('transaksi/edit/'.$transaksi->transaksi_id) ?>">
												Edit </a> |
											<a onclick="deleteConfirm('<?php echo site_url('transaksi/delete/'.$transaksi->transaksi_id) ?>')"
												href="#!" >Hapus</a>
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
