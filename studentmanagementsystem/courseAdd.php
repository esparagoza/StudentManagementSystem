<?php include 'topnav.php' ;
include 'connection.php' ;?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<div class="card-header"> <h2 style="text-shadow: 0px 1px 5px white;">Add new Record</h2> </div>
<div class="card-body" style="background-color: #009999;">



                        <form role="form" method="post" action="course_trans.php?action=add">
                            
                            

                            <div class="form-group">
                              <input class="form-control" placeholder="Course Name" name="NAME">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Description" name="DESCRIPTION">
                            </div> 
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default"> Clear </button>


                      </form>  
                    </div>
                </div>

        </div>

        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>

    </div>
 
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
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

   

  </body>

</html>
