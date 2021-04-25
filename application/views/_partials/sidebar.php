<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Sari Buah Grosir</div>
    

	<div class="list-group">
		<a href="<?php echo site_url('/') ?>" class="list-group-item active">Home</a>
			
		<?php
			if (isset($_SESSION['user_logged'])){ 
		?>
			<a href="<?php echo site_url('user/logout') ?>" class="list-group-item ">Logout</a>
			<a href="<?php echo site_url('user') ?>" class="list-group-item">Data User</a>
			<a href="<?php echo site_url('pembeli') ?>" class="list-group-item">Data Pembeli</a>
			<a href="<?php echo site_url('piutang') ?>" class="list-group-item">Data Piutang</a>
			<a href="<?php echo site_url('produk') ?>" class="list-group-item">Data Produk</a>
			<a href="<?php echo site_url('pembayaran') ?>" class="list-group-item">Input Pembayaran</a>
			<a href="<?php echo site_url('settlement') ?>" class="list-group-item">Settlement Pembayaran</a>
			<a href="<?php echo site_url('laporan') ?>" class="list-group-item">Laporan</a>
			<ul style="list-style-type:square;">
				<li><a href="<?php echo site_url('laporan/pembayaran_per_periode') ?>">Pembayaran Per Periode</a></li>
				<li><a href="<?php echo site_url('laporan/piutang_per_periode') ?>">Tagihan Piutang</a></li>
				<li><a href="<?php echo site_url('laporan/totalPiutang') ?>">Total Piutang</a></li>
				<li><a href="<?php echo site_url('laporan/rekap_transaksi') ?>">Rekap Transaksi</a></li>
			</ul>
			
			<a href="#" class="list-group-item">Status</a>	
		<?php
			} else {
		?>
			<a href="<?php echo site_url('user/login') ?>" class="list-group-item ">Login</a>
		<?php }?>
		
	</div>
	
</div>