<?php
session_start();
if (isset($_SESSION['email'])&&isset($_SESSION['otp'])) {
  if($_POST && ($_POST['otp']==$_SESSION['otp'])){
    require_once "config.php";
    $email = $_SESSION['email'];
    $selectquery = mysqli_query($link,"select * from users where email='{$email}'") or die(mysqli_error($link));
    $count = mysqli_num_rows($selectquery);
    echo $count;
    $row = mysqli_fetch_array($selectquery);
    if($count>0){
      $_SESSION["loggedin"] = true;
      $_SESSION["username"] = $row['username'];
      $_SESSION["id"] = $row['id'];
      header("Location: reset-password.php");
    }
  }
  
}
?>
<?php require_once './inc/header.php'; ?>
<link rel="stylesheet" href="./css/forget.css">
</head>
<?php require_once './inc/nav.php'; ?>

<body class="forgetcontainer">
  <form class="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class="form-group">
      <label for="number">Enter otp</label>
      <input id="input" class="form-control" type="number" name="otp" placeholder="Enter otp here">
    </div>
    <!-- <input type="submit"> -->
    <button type="submit" id="bt" class="btn btn-block">Submit</button>
  </form>

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