<?php $this->load->view("_partials/head.php") ?>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("_partials/sidebar.php") ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <?php $this->load->view("_partials/navigation.php") ?>
      
        <?php if ($show_dashboard == 1) {?>
        <div class="card-body">
            <div class="table-responsive">
              <div class="card-columns">
                <div class="card">
                  <div class="card-header"><h4>Total Piutang<h4></div>
                  <div class="card-body">
                      <h5><?php echo "Rp " . number_format($total_piutang)?></h5></div>
                  
                </div>
                
                <div class="card">
                  <div class="card-header"><h4>Pembayaran Hari Ini<h4></div>
                  <div class="card-body">
                      <h5><?php echo "Rp " . number_format($pembayaran_hari_ini)?></h5></div>
                  
                </div>
                <div class="card">
                  <div class="card-header"><h4>Jumlah Pembeli<h4></div>
                  <div class="card-body">
                      <h5><?php echo number_format($jumlah_pembeli) . " Pembeli"?></h5></div>
                  
                </div>
                
                <div class="card">
                  <div class="card-header"><h4>Unsettled Payment<h4></div>
                  <div class="card-body">
                      <h5><?php echo "Rp " . number_format($unsettled_payment)?></h5></div>
                  
                </div>
              </div>      
            </div>
        </div>
        <?php }?>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php $this->load->view("_partials/footer.php") ?>

</body>

</html>
