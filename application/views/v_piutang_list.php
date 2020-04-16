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
							<p>
								No Transaksi <input value="<?php echo $nomor_transaksi?>" type="search" name="cari" placeholder="Search Keyword..."> <input type="submit" name="btn_submit" value="Search">
							</p>

							<table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>No Transaksi</th>
										<th>Tanggal</th>
										<th>Pembeli</th>
										<th>Keterangan</th>
										<th>Nominal</th>
										<th>Terbayar</th>
										<th>Sisa</th>
										<th>User Input</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no = $this->uri->segment('3') + 1;
										foreach ($piutangs as $piutang): 
									?>
									<tr>
										<td>
											<?php echo $no++ ?>
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
										<td>
											<?php echo $piutang->keterangan ?>
										</td>
										<td align="right">
											<?php echo number_format($piutang->nominal) ?>
										</td>
										<td align="right">
											<?php echo number_format($piutang->terbayar) ?>
										</td>
										<td align="right">
											<?php echo number_format($piutang->nominal - $piutang->terbayar) ?>
										</td>
										<td>
											<?php echo $piutang->username ?>
										</td>
										<td width="150">
											<?php if ($piutang->terbayar <= 0){ ?>
											<a href="<?php echo site_url('piutang/edit/'.$piutang->piutang_id) ?> "
											class="btn btn-primary"> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('piutang/delete/'.$piutang->piutang_id) ?>')"
												href="#!" class="btn btn-danger">Hapus</a>
											<?php }?>
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

				<div class="col-sm-3">
					<div class="card">
					<div class="card-header"><h5>Total Sisa Piutang</h5></div>
					<div class="card-body"><h6><?php echo "Rp ". number_format($total_sisa_piutang) ?></h6></div>
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
