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
				<form action="<?php echo site_url('laporan/piutang_per_periode') ?>" method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                    <label for="pembeli">Pembeli ID</label>
                    <input type="hidden" name="pembeli_id"/>
                    </div>

                    <div class="form-group">
						<label for="pembeli">Pembeli </label>
						<input class="form-control" type="text" id="pembeli" name="pembeli" min="0" />
					</div>

					<div class="form-group">
						<label for="periode1">Periode Awal </label>
						<input class="form-control" type="date" name="periode1" min="0" value="<?php echo date('Y-m-d')?>"/>
					</div>	

                    <div class="form-group">
                        <label for="periode2">Periode Akhir </label>
						<input class="form-control" type="date" name="periode2" min="0" value="<?php echo date('Y-m-d')?>"/>
					</div>

					<input class="btn btn-success" type="submit" name="btn" value="Submit" />
                    <input class="btn btn-success" type="reset" name="btn" value="Reset" />
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


  <script src="<?php echo base_url().'vendor/jquery-ui-1.12.1/jquery-ui.js'?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
 
            $('#pembeli').autocomplete({
                source: "<?php echo site_url('piutang/get_autocomplete');?>",
      
                select: function (event, ui) {
                    $('[name="pembeli"]').val(ui.item.label); 
                    $('[name="pembeli_id"]').val(ui.item.description); 
                }
            });
 
        });
    </script>    
  


</body>

</html>
