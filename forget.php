<?php require_once './inc/header.php'; session_start();?>
<link rel="stylesheet" href="./css/forget.css">
</head>
<body>
<?php require_once './inc/nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
  <div class="forgetcontainer">
    <form class="form" action="forget-recovery.php" method="post">
      <div class="form-group">
        <label for="email">Email address</label><br>
        <input id="input" type="email" name="email" class="form-control" placeholder="Enter Email">
      </div>
      <!-- <div class="form-group">
        <input type="submit">
      </div> -->
      <button type="submit" id="bt" class="btn btn-block">Submit</button>
    </form>
  </div>  
</body>
</html>

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