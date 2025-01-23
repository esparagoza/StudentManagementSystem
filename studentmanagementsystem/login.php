<?php require('session.php');?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login - Gordon College</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <style>
    body {
      background-image: url('image/gc2.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
    }

    .college-logo {
      width: 150px;
      height: auto;
      display: block;
      margin: 0 auto;
      position: absolute;
      top: 20px;
      left: 50%;
      transform: translateX(-50%);
    }

    .login-card {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      width: 350px;
      text-align: center;
    }

    .center-login {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
  </style>
</head>

<?php if(logged_in()){ ?>
<script type="text/javascript">
  window.location = "index.php";
</script>
<?php
} ?>

<body>
  <img src="image/logo.png" alt="Gordon College Logo" class="college-logo">
  <div class="center-login">
    <div class="login-card">
      <h4>Login</h4>
      <form method="POST" action="success.php">
        <div class="form-group">
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="user" required autofocus>
        </div>
        <div class="form-group">
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="rememberMe">
          <label class="form-check-label" for="rememberMe">Remember Password</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
      <a href="register.php" class="d-block small mt-3">Register an Account</a>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
