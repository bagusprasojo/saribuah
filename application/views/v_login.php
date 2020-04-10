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
				
				<div class="col-md-5">
					<form action="<?= site_url('user/login') ?>" method="POST">
						<div class="form-group">
							<label for="email">User Name</label>
							<input type="text" class="form-control" name="username" placeholder="User Name" required />
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Password.." required />
						</div>
						
						<div class="form-group">
							<input type="submit" class="btn btn-success w-100" value="Login" />
						</div>

					</form>
				</div>
						
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
