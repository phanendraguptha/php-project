<?php require_once './inc/header.php'; session_start();?>
<link rel="stylesheet" href="./css/about.css">
</head>
<body>
<?php require_once './inc/nav.php'; ?>

<div id="img">
    <img src="https://images.unsplash.com/photo-1518481612222-68bbe828ecd1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" style="height: 400px; width: 100%; object-fit: cover;">
    <div class="centered">
      <h2>About Us</h2>
    </div>
  </div>

  <section id="services">
    <div class="container">
      <h1 class="title text-center">WHAT WE DO ?</h1>
      <div class="row text-center">
        <div class="col-md-4 services">
          <img src="images/world (1).png" alt="1">
          <h4>Travel</h4>
          <p>Mdake sure that each and every person is carrying his or her own ID proof(Aadhar card,Driving license) with them for their personal safety.</p>
        </div>
        <div class="col-md-4 services">
          <img src="images/camera (1).png" alt="1">
          <h4>Camera</h4>
          <p>You can make a tour with any camera that creates a 180° or 360° photo smaller than 2MB.Cameras are provided by our team(charges are applied).</p>
        </div>
        <div class="col-md-4 services">
          <img src="images/dish (1).png" alt="1">
          <h4>Food</h4>
          <p>We provide assistance,information on cultural,historical and contemporary heritage to people on organized tours and individual clients.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="info">
    <div class="container">
      <h1 class="title text-center">MEET OUR TEAM</h1>
      <div class="row">
        <div class="col-md-7 m-auto">
          <h2><b>HARD WORK BEATS TALENT</b></h2>
          <p>Phanendra is our developer,ui and logo designer. Ui designer designs all the screens through which a user will move, create the visual elements and there interactive properties. user interface is more important because it can make or break your computer base. it creates fewer problems increases user involvement.</p>
        </div>
        <div class="col-md-5">
          <img src="images/phani.jpg" height="500px" width="500px" alt="" style="border-radius: 50px;">
        </div>
      </div>
    </div>
  </section>

  <section style="margin-top: 5rem;">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <img src="images/jaggu.jpg" height="500px" width="500px" alt="" style="border-radius: 50px;">
        </div>
        <div class="col-md-6 m-auto" style="padding-left: 60px;">
          <h2 style="margin-bottom: 20px;"><b>CHANGE YOUR LIFE TODAY DON'T GAMBLE ON THE FUTURE</b></h2>
          <p style="font-size: 1.25rem; font-weight: 300;">Jagadeesh is our developer and content creator. Content creation is the contribution of information to any media and most especially to digital media for an end-user/audience.</p>
        </div>
      </div>
    </div>
  </section>

  <?php require_once './inc/footer.php'; ?>
  <script src="./js/script.js"></script>
</body>
</html>