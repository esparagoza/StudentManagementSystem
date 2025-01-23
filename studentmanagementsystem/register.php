<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

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

  <img src="image/logo.png" alt="Gordon College Logo" class="college-logo">
  <div class="center-login">
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form method="POST" action="success1.php">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" placeholder="First name" name="firstname" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" placeholder="Last name" name="lastname" required="required">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required="required">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" name="confirm" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="register" style="background-image: linear-gradient(, #2144);">Register</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php"> Login Page</a>
        
          </div>
        </div>
      </div>
    </div>


    <script src="vendor/jquery/jquery.min.js" style="background-image: linear-gradient(gray, #2144);"> </script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
