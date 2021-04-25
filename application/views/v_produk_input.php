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
				
			<div class="card-body">
				<form action="<?php echo site_url('produk/add/') ?>" method="post" enctype="multipart/form-data" >
					<input type="hidden" name="produk_id" value="<?php echo $produk->produk_id?>" />
					
					<div class="form-group">
						<label for="kelompok">Kode*</label>

						<input class="form-control <?php echo form_error('kode') ? 'is-invalid':'' ?>"
							type="text" name="kode" placeholder="Kode Produk" value="<?php echo $produk->kode ?>"/>

						<div class="invalid-feedback">
							<?php echo form_error('kode') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="nama">Nama*</label>
						<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
							type="text" name="nama" placeholder="Nama Produk" value="<?php echo $produk->nama ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('nama') ?>
						</div>
					</div>

					<input class="btn btn-success" type="submit" name="btn" value="Save" />
				</form>

			</div>

			<div class="card-footer small text-muted">
				* required fields
			</div>					
		
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

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
