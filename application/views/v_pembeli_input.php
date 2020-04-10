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
				<form action="<?php echo site_url('pembeli/add/') ?>" method="post" enctype="multipart/form-data" >
					<input type="hidden" name="pembeli_id" value="<?php echo $pembeli->pembeli_id?>" />
					
					<div class="form-group">
						<label for="nama">Nama*</label>
						<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
							type="text" name="nama" placeholder="Nama Pembeli" value="<?php echo $pembeli->nama ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('nama') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="kelompok">Kelompok*</label>

						<select class="form-control <?php echo form_error('kelompok') ? 'is-invalid':'' ?>" name="kelompok">
							<option value="Pasar Gede">Pasar Gede</option>
							<option value="Luar Pasar Gede" selected>Luar Pasar Gede</option>
						</select>

						<div class="invalid-feedback">
							<?php echo form_error('kelompok') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="name">Alamat*</label>
						<textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
							name="alamat" placeholder="Alamat"><?php echo $pembeli->alamat ?></textarea>
						<div class="invalid-feedback">
							<?php echo form_error('alamat') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="telp">Telp*</label>
						<input class="form-control <?php echo form_error('telp') ? 'is-invalid':'' ?>"
							type="text" name="telp" min="0" placeholder="Telp" value="<?php echo $pembeli->telp ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('telp') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
							type="text" name="email" min="0" placeholder="Email" value="<?php echo $pembeli->email ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('email') ?>
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
