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
						<a href="<?php echo site_url('pembeli/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<form action="<?php echo site_url('pembeli/index/'); ?>" method="post">
							<p>
								Nama <input value ="<?php echo $nama?>" type="search" name="cari" placeholder="Search Keyword..."> <input type="submit" name="btn_submit" value="Search">
							</p>

							<table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Kelompok</th>
										<th>Alamat</th>
										<th>Telp</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no = $this->uri->segment('3') + 1;
										foreach ($pembelis as $pembeli): 
									?>
									<tr>
										<td>
											<?php echo $no++ ?>
										</td>
										
										<td width="150">
											<?php echo $pembeli->nama ?>
										</td>
										<td width="150">
											<?php echo $pembeli->kelompok ?>
										</td>
										<td>
											<?php echo $pembeli->alamat ?>
										</td>
										<td>
											<?php echo $pembeli->telp ?>
										</td>
										<td>
											<?php echo $pembeli->email ?>
										</td>
										
										<td width="140">
											<a href="<?php echo site_url('pembeli/edit/'.$pembeli->pembeli_id) ?>">
												Edit </a>|
											<a onclick="deleteConfirm('<?php echo site_url('pembeli/delete/'.$pembeli->pembeli_id) ?>')"
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
