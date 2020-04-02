<?php
// Initialize the session
// session_start();
?>

<section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light container">
      <a class="navbar-brand" id="logo" href="./">Travel Tourism</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">  <!--ml-auto is for align the nav items right-->
          <li class="nav-item">
            <a class="nav-link" href="./">Home</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contactus.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./weekend.php">Weekend Plans</a>
          </li>
          <?php
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){?>
              <li class="nav-item">
                <a class="nav-link" href="./signin.php">Login</a>
              </li>
          <?php } ?>
          <?php
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){?>
              <li class="nav-item">
                <a class="nav-link" href="./signup.php">Signup</a>
              </li>
          <?php } ?>
          <?php
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){?>              
            <?php }else{ ?>
            <li class="nav-item">
              <a class="nav-link" href="./welcome.php">Profile</a>
            </li>
          <?php } ?>
          <?php
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){?>              
            <?php }else{ ?>
            <li class="nav-item">
              <a class="nav-link" href="./logout.php">Logout</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </nav>
  </section>