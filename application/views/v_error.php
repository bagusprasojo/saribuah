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
            <h5>Ada Kesalahan</h>
        </div>
        
        <div class="card-body">
            <?php echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>"; ?><br>
            <?php echo $salah ?>
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
