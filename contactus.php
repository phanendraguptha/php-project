<?php
  //php mailer
  use PHPMailer\PHPMailer\PHPMailer;
  require_once './inc/header.php';
  session_start();
?>
<link rel="stylesheet" href="./css/contactus.css">
</head>
<body>
<?php require_once './inc/nav.php';
  require_once "config.php";
  if($_POST){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $mail = (string) $_POST["mail"];
    $subject = $_POST["subject"];
    $description = $_POST["description"];    
    $sql = "INSERT INTO contact (firstname,lastname,email,subject,description) VALUES ('$firstname','$lastname','$mail','$subject','$description')";
    if(mysqli_query($link,$sql)){
      
    }
  }
?>

<section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 id="h1" style="text-align: center;">Contact Us</h1>
          <form class="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
              <label for="">First Name</label>
              <input id="input" class="form-control"name="firstname" type="text" required placeholder="Enter First Name">
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input id="input" class="form-control"name="lastname" type="text" required placeholder="Enter Last Name">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input id="input" class="form-control"name="mail" type="email" required placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label for="">Subject</label>
              <input id="input" class="form-control"name="subject" type="text" required placeholder="Enter Subject">
            </div>
            <div class="form-group">
              <label for="">Description</label>
              <textarea id="input1" class="form-control" name="description" required rows="3"></textarea>
            </div>
            <input id="bt"type="submit">
          </div>
        </form>
      </div>
    </div>
  </section>

<?php require_once './inc/footer.php'; ?>
<!-- <script>
    function validate(){
      alert("Submitted Successfully");
    }
  </script> -->
</body>
</html>