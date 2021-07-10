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
				<form action="<?php echo site_url('transaksi/add/') ?>" method="post" enctype="multipart/form-data" >
					<input type="hidden" name="transaksi_id" value="<?php echo $transaksi->transaksi_id?>" />
					<input type="hidden" name="produk_id" value="<?php echo $transaksi->produk_id?>" />

					<div class="form-group">
						<label for="tgl_transaksi">Tanggal*</label>
						<input class="form-control <?php echo form_error('tgl_transaksi') ? 'is-invalid':'' ?>"
							type="date" name="tgl_transaksi" min="0" value="<?php echo $transaksi->tgl_transaksi ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('tgl_transaksi') ?>
						</div>
					</div>


					<div class="form-group">
						<label for="nama">Nama*</label>
						<input class="form-control <?php echo form_error('produk_id') ? 'is-invalid':'' ?>" 
							type="text" id="nama" name="nama" placeholder="Product" value="<?php echo $nama_produk ?>" />
						<div class="invalid-feedback">
							<?php echo form_error('produk_id') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="kode">Kode*</label>

						<input readonly class="form-control <?php echo form_error('produk_id') ? 'is-invalid':'' ?>" name="kode" id="kode" value="<?php echo $kode_produk ?>" />
						<div class="invalid-feedback">
							<?php echo form_error('produk_id') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="name">Stock Awal</label>
						<input class="form-control <?php echo form_error('stockawal') ? 'is-invalid':'' ?>"
							name="stockawal" placeholder="0" value = "<?php echo $transaksi->stockawal ?>" />
						<div class="invalid-feedback">
							<?php echo form_error('stockawal') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="datang">Datang*</label>
						<input class="form-control <?php echo form_error('datang') ? 'is-invalid':'' ?>"
							type="text" name="datang" min="0" placeholder="0" value="<?php echo $transaksi->datang ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('datang') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="baru">Baru</label>
						<input class="form-control <?php echo form_error('baru') ? 'is-invalid':'' ?>"
							type="text" name="baru" min="0" placeholder="0" value="<?php echo $transaksi->baru ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('baru') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="lama">Lama</label>
						<input class="form-control <?php echo form_error('lama') ? 'is-invalid':'' ?>"
							type="text" name="lama" min="0" placeholder="0" value="<?php echo $transaksi->lama ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('lama') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="name">Stock Akhir</label>
						<input class="form-control <?php echo form_error('stockakhir') ? 'is-invalid':'' ?>"
							name="stockakhir" placeholder="0" value="<?php echo $transaksi->stockakhir ?>" />
						<div class="invalid-feedback">
							<?php echo form_error('stockakhir') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="name">Harga Pokok Jual</label>
						<input class="form-control <?php echo form_error('hpj') ? 'is-invalid':'' ?>"
							name="hpj" placeholder="0" value="<?php echo $transaksi->hpj ?>" />
						<div class="invalid-feedback">
							<?php echo form_error('hpj') ?>
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

  <script src="<?php echo base_url().'vendor/jquery-ui-1.12.1/jquery-ui.js'?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
 
            $('#nama').autocomplete({
                source: "<?php echo site_url('transaksi/get_autocomplete');?>",
      
                select: function (event, ui) {
                    $('[name="nama"]').val(ui.item.label); 
                    $('[name="produk_id"]').val(ui.item.description);
                    $('[name="kode"]').val(ui.item.kode); 
                }
            });
 
        });
    </script>

</body>

</html>
