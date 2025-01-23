<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="STUDENT" content="">

    <title> STUDENT Management SYSTEM</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php"> StudentManagementSystem</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </form>

      <ul class="navbar-nav ml-auto ml-md-0">
        
      <ul class="sidebar navbar-nav" style="background-color: #333333;">
        <li class="nav-item">
          <a class="nav-link"href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span style="text-shadow: 0px 1px 5px black;"></span>
          </a>
        </li>
       
        </li>
        <li class="nav-item">
          <a class="nav-link" href="student.php">
            <i class="fas fa-fw fa-users  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Student</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course.php">
            <i class="fas fa-fw fa-users    "></i>
            <span style="text-shadow: 0px 1px 5px black;">Course</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="section.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Section</span></a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="enrollment.php">
            <i class="fas fa-fw fa-users  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Enrollment</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="schedule.php">
            <i class="fas fa-fw fa-users  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Schedule</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">
       
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © 2024 Student Management System. All Rights Reserved.</span>
            </div>
          </div>
        </footer>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
