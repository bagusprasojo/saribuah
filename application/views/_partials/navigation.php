<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
      <?php
        if (isset($_SESSION['user_logged'])){ 
      ?>
        <a class="nav-link" href="#"><?php echo "User : " . $_SESSION['user_logged']->username . " (" . $_SESSION['user_logged']->nama . ")";?> <span class="sr-only">(current)</span></a>
      </li>
        <?php }?>            
    </ul>
  </div>
</nav>