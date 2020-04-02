<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    
}
else{
  header("location: welcome.php");
    exit;
}

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $email = "";
$username_err = $password_err = $confirm_password_err = $email_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
// Validate password
    if(empty(trim($_POST["email"]))){
      $email_err = "Please enter a email.";     
    }
    // elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    //     $email_err = "only letters, white space allowed, numbers or one of the following @. ";
    else{
      $email = trim($_POST["email"]);
    }
    // Validate password
    if(empty(trim($_POST["password"]))){
      $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
      $password_err = "Password must have atleast 6 characters.";
    } else{
      $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
      $confirm_password_err = "Please confirm password.";     
    } else{
      $confirm_password = trim($_POST["confirm_password"]);
      if(empty($password_err) && ($password != $confirm_password)){
          $confirm_password_err = "Password did not match.";
      }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) &&empty($email_err)){
      
      // Prepare an insert statement
      $sql = "INSERT INTO users (email, username, password) VALUES (?, ?, ?)";
      
      if($stmt = mysqli_prepare($link, $sql)){
          // Bind variables to the prepared statement as parameters
          mysqli_stmt_bind_param($stmt, "sss", $param_email, $param_username, $param_password);
          
          // Set parameters
          $param_email = $email;
          $param_username = $username;
          $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
          
          // Attempt to execute the prepared statement
          if(mysqli_stmt_execute($stmt)){
              // Redirect to login page
              header("location: signin.php");
          } else{
              echo "Something went wrong. Please try again later.";
          }

          // Close statement
          mysqli_stmt_close($stmt);
      }
    }

    // Close connection
    mysqli_close($link);
    }
?>

<?php require_once './inc/header.php'; ?>
<link rel="stylesheet" href="./css/signin.css">
</head>
<body>
<?php require_once './inc/nav.php'; ?>

<section>
    <div class="signincontainer">
      <div class="form" >
          <h1 class="text-center">SignUp</h1>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
              <label>Email address</label>
              <input id="input" type="email" class="form-control" placeholder="Enter Email" name="email" value="<?php echo $email; ?>">
              <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group" <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
              <label>Username</label>
              <input id="input" type="text" name="username" class="form-control" placeholder="Enter Username" value="<?php echo $username; ?>">
              <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group" <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
              <label>Password</label>
              <input id="input" type="password" name="password" class="form-control" placeholder="Enter Password"  value="<?php echo $password; ?>">
              <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group"  <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
              <label>Confirm Password</label>
              <input id="input" type="password" name="confirm_password" class="form-control" placeholder="Enter Password Again" value="<?php echo $confirm_password; ?>">
              <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <button type="submit" id="bt" class="btn btn-block">SignUp</button>
          </form>
      </div>
      <img class="img" src="https://images.pexels.com/photos/392586/pexels-photo-392586.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" height="665px" width="461px" alt="1">
    </div>
  </section>

<!-- <script src="./js/signup.js"></script> -->
</body>
</body>
</html>