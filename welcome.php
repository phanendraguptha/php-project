<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
 <?php require_once './inc/header.php'; ?>
<link rel="stylesheet" href="./css/welcome.css">
</head>
<body>
<?php require_once './inc/nav.php'; ?>

    <div class="welcome">
        <div class="page-header">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
        </div>
        <p>
            <a href="reset-password.php" id="bt" class="btn">Reset Your Password</a>
            <!-- <a href="logout.php" id="bt" class="btn">Sign Out of Your Account</a> -->
        </p>
    </div>

    <footer class="footer fixed-bottom">
    <div class="container-fluid">
      <div class="row">
          <!-- col-md-offset-9 -->
        <div class="col-md-3" id="b_logo" >Travel Tourism</div>
        <div class="col-md-9"></div>
        <div class="col-md-3">© 2019 All rights reserved.</div>
        <div class="col-md-9"> 
          <p class="float-right"> Follow us on <i class="fab fa-facebook-f"></i> <i class="fab fa-instagram"></i> <i class="fab fa-twitter"></i></p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>