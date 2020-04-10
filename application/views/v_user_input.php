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
            <form action="<?php echo site_url('user/add') ?>" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="user_id" value="<?php echo $user->user_id?>" />
					
                <div class="form-group">
                    <label for="price">User Name*</label>
                    <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                        type="text" name="username" min="0" placeholder="User Name" value="<?php echo $user->username?>"/>
                    <div class="invalid-feedback">
                        <?php echo form_error('username') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="price">Password*</label>
                    <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                        type="password" name="password" min="0" placeholder="Password" />
                    <div class="invalid-feedback">
                        <?php echo form_error('password') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="price">Konfirmasi Password*</label>
                    <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                        type="password" name="konfirmasipassword" min="0" placeholder="Password" />
                    <div class="invalid-feedback">
                        <?php echo form_error('konfirmasipassword') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Nama*</label>
                    <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                        type="text" name="nama" placeholder="Nama" value="<?php echo $user->nama?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('name') ?>
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
