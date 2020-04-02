<?php require_once './inc/header.php'; session_start();?>
<link rel="stylesheet" href="./css/main.css">
</head>
<body>
<?php require_once './inc/nav.php'; 
  require_once "config.php";
  if($_POST){
    $mail = $_POST["mail"];
    $sql = "INSERT INTO subscribe (email) VALUES ('$mail')";
    if(mysqli_query($link,$sql)){
      // echo "New record created successfully";
    }
  }
?>

<section id="mainSection">
    <div class="contain">
      <div class="row">
        <div class="col-md-6">
          <p>Although many of us have been "tourist" at some point in our lives, defining what tourism actually is can be difficult. To know what exactly tourism mean and to get our latest tourism packages subscribe here.</p>
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">          
            <input type="text" name="mail" placeholder="Enter your email">
            <button type="submit" class="bt">Subscribe</button>
          </form>
        </div>
        <img id="travelImg" class="col-md-6 img-fluid" src="./images/undraw_adventure_4hum.png" alt="">
      </div>
    </div>
    <a href="#gallery"><img src="./images/Group 7.png" alt="img" style="margin-top: 30px; margin-bottom:60px;"></a>
  </section>

  <section id="gallery">
    <div class="contain">
        <h1 class="title text-center">Image Gallery</h1>
        <div class="row" style="margin-top:15px;">
          <div class="col-md-4">
            <div class="card shadowHover mb-4" style="">
              <img src="https://images.pexels.com/photos/2968721/pexels-photo-2968721.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
          </div>
          </div>
          <div class="col-md-4">
            <div class="card shadowHover mb-4">
              <img src="https://images.pexels.com/photos/443446/pexels-photo-443446.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadowHover mb-4">
              <img src="https://images.pexels.com/photos/2994163/pexels-photo-2994163.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">              
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadowHover mb-4">
              <img src="https://images.pexels.com/photos/853199/pexels-photo-853199.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">              
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadowHover mb-4">
              <img src="https://images.pexels.com/photos/814499/pexels-photo-814499.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">              
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadowHover mb-4">
              <img src="https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">              
            </div>
          </div>
        </div>
    </div>
  </section>

  <section id="info">
    <div class="contain">
      <div class="row">
        <div class="col-md-7 m-auto">
          <h2><b>LIVE WITH NO EXCUSES AND TRAVEL WITH NO REGRETS</b></h2>
          <p>Travel is the movement of people between distant geographical locations. Travel can be done by foot, bicycle, automobile, train, boat, bus, airplane, ship or other means, with or without luggage, and can be one way or round trip. Travel can also include relatively short stays between successive movements.</p>
        </div>
        <div class="col-md-5">
          <img src="https://theeuropeannaturetrust.com/wp-content/uploads/2019/08/Italy-Landscape-500x500.jpg" height="500px" width="500px" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="book">
    <div class="contain">
      <div class="row">
        <h2 class="col-md-12">Want to go trip and enjoy with friend and family, go and book tickets now.</h2>
          <button class="bt" onclick="window.location='./book.php'">Book Now</button>
      </div>
    </div>
  </section>

  <?php require_once './inc/footer.php'; ?>
  <script src="./js/script.js"></script>
</body>
</html>