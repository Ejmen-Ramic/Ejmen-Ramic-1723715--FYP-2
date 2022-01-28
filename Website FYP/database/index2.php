<?php
session_start();

if (isset($_SESSION["isLogin"])) {

    if ($_SESSION["isLogin"] == true) {
        header("location: profile.php");
    } else {
        echo "Wrong Username or Password";
        unset($_SESSION["isLogin"]);
    }

}else if(isset($_SESSION["register"])){
        unset($_SESSION["register.php"]);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link rel="icon" type="../image/logo.png" href="../images/tab_logo.PNG">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="login/assets/css/login.css">
  <!BUTTON>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <a class="btn2" href="../home2/Home2.php"><i class="fa fa-close" ></i></a>
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="register/assets/images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="login/assets/images/logo.png" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Register your new account</p>
              <form action="register.php"  method="post">
                <div class="form-group">
                  <label for="username" class="sr-only">Username</label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="fullname" class="sr-only">Fullname</label>
                  <input type="text" name="fullname" id="fullname" class="form-control" placeholder="FullName">
                </div>
                  
                  <div class="form-group mb-4">
                    <label for="phone" class="sr-only">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                  </div>
                  <div class="form-group mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                  </div>
                  
                 
                  

                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Register">
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Already registered? <a href="index.php" class="text-reset">Sign in here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>