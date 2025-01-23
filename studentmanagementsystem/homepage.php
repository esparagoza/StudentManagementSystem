
<?php
include 'connection.php';
  
require 'session.php';
confirm_logged_in();
  ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <link href="css/sb-admin.css" rel="stylesheet">
    <style>
        .announcements {
            text-align: center;
            margin: 40px auto;
        }

        .announcements h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .announcements p {
            margin-bottom: 30px;
            color: #555;
        }

        .announcement-cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            width: 300px;
            text-align: left;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card h3 {
            font-size: 1.2em;
            margin: 10px;
        }

        .card p {
            padding: 0 10px 10px;
            font-size: 0.9em;
            color: #555;
        }

        .read-more {
            display: inline-block;
            margin: 10px;
            padding: 10px 15px;
            background: #004d00;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .read-more:hover {
            background: #006600;
        }
    </style>
</head>
 
 

  <body id="page-top">
 
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top" style="background-image: linear-gradient(#333333);">
  

     
     <a class="navbar-brand mr-1" style="color: white;">Student Management System</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fa fa-bars"></i>
      </button>

      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user-circle"></i>
                  <?php
                                  echo " ".$_SESSION['fname'];
                                  echo " ".$_SESSION['lname'];
                                  ?>
                                  
                  <i class="fa fa-sign-out" href="#" data-toggle="modal" data-target="#logoutModal" style="color: red">logout</i>
                  </a>
                </div>
                </li>
            </ul>
        </form>

    </nav>
   

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
    <div id="wrapper">

      <ul class="sidebar navbar-nav" style="background-color: #333333;">
        <li class="nav-item">
          <a class="nav-link"href="homepage.php">
            <i class="fa fa-home"></i>
            <span> Homepage</span>
          </a>
        </li>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="userstudent.php">
            <i class="fa fa-users  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Student</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userenrollment.php">
            <i class="fa fa-tasks  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Enrollment</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">


         <section class="announcements">
                    <h2>Announcement</h2>
                    <p>These are the statements that contain information about events that have happened or are going to happen.</p>
                    <div class="announcement-cards">
     
                        <div class="card">
                            <img src="image/announce1.jpg" alt="Schedule of Enrolment">
                            <h3>SCHEDULE OF ENROLMENT (Second Semester, A.Y. 2024 – 2025)</h3>
                            <p>SCHEDULE OF ENROLMENT Second Semester, A.Y. 2024-2025 Online Clearance Dec. 2, 2024 – Jan. 10, 2025...</p>
                            <a href="#" class="read-more">READ MORE...</a>
                        </div>
 
                        <div class="card">
                            <img src="image/announce2.jpg" alt="Air Supply Concert">
                            <h3>Free Tickets For Air Supply Concert</h3>
                            <p>HEADS UP to all Gordon College students and personnel. Cloudstaff BPO Company will be distributing free tickets...</p>
                            <a href="#" class="read-more">READ MORE...</a>
                        </div>
                    </div>
                </section>

   
                <?php include 'footer.php'; ?> 
            </div>
        </div>
    </div>
</body>
</html>

