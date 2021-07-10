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
				<form action="<?php echo site_url('pembayaran/add/') ?>" method="post" enctype="multipart/form-data" >
					<input type="hidden" name="pembayaran_id" value="<?php echo $pembayaran->pembayaran_id?>" />
					
					<div class="form-group">
						<label for="nama">No Pembayaran*</label>
						<input readonly class="form-control <?php echo form_error('no_pembayaran') ? 'is-invalid':'' ?>"
							type="text" name="no_pembayaran" placeholder="No Pembayaran" value="<?php echo $pembayaran->no_pembayaran ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('no_pembayaran') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="tgl_transaksi">Tanggal*</label>
						<input class="form-control <?php echo form_error('tgl_transaksi') ? 'is-invalid':'' ?>"
							type="date" name="tgl_transaksi" min="0" value="<?php echo $pembayaran->tgl_transaksi ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('tgl_transaksi') ?>
						</div>
					</div>

					<input type="hidden" name="pembeli_id" value="<?php echo $pembayaran->pembeli_id?>" />
					
					<div class="form-group">
						<label for="pembeli_id">Pembeli*</label>
						<input class="form-control <?php echo form_error('pembeli_id') ? 'is-invalid':'' ?>"
							type="text" id="pembeli" name="pembeli" placeholder="Pilih Pembeli" value="<?php echo $nama_pembeli  ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('pembeli_id') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="nominal">Nominal*</label>
						<input class="form-control <?php echo form_error('nominal ') ? 'is-invalid':'' ?>"
							type="number" name="nominal" placeholder="0" value="<?php echo $pembayaran->nominal  ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('nominal') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="name">Keterangan*</label>
						<textarea rows="5" class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
							name="keterangan" placeholder="Keterangan pembayaran ..."><?php echo $pembayaran->keterangan ?></textarea>
						<div class="invalid-feedback">
							<?php echo form_error('keterangan') ?>
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


	<script src="<?php echo base_url().'vendor/jquery-ui-1.12.1/jquery-ui.js'?>" type="text/javascript"></script>
	<script type="text/javascript">
	    $(document).ready(function(){

	        $('#pembeli').autocomplete({
	            source: "<?php echo site_url('pembayaran/get_autocomplete');?>",
	  
	            select: function (event, ui) {
	                $('[name="pembeli"]').val(ui.item.label); 
	                $('[name="pembeli_id"]').val(ui.item.description); 
	            }
	        });

	    });
	</script>

  


</body>

</html>
