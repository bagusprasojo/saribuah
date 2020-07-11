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
						<a href="<?php echo site_url('user/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<form action="<?php echo site_url('user/index/'); ?>" method="post">
							

							<table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Username</th>
										<th>Name</th>
										<th>Last Login</th>
										
									</tr>
								</thead>
								<tbody>
									<?php 
										$no = 1;  
									  	foreach ($users as $user): ?>
									<tr>
										<td>
											<?php echo $no++ ?>
										</td>
										<td>
											<?php echo $user->username ?>
										</td>
										<td>
											<?php echo $user->nama ?>
										</td>
										
										<td>
											<?php echo $user->last_login ?>
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
