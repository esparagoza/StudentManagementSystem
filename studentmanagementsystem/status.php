<?php include 'connection.php';
include 'topnav.php'; ?>
           <div class="col-lg-12">

            <div>
            <i class="fa fa-table"></i>

            Year Status Records <br></br> 
           
              <a href="status_add.php?action=add" type="button" class="btn btn-xs  fa fa-user-plus">Add New</a>
            </div>    

          <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Status ID</th> 
                                        <th>Status Name</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM status';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['Status_id'].'</td>';
                            echo '<td>'. $row['status_name'].'</td>';
                            echo '<td>';
                            echo ' <a  type="button" class="btn btn-xs btn-warning fa fa-edit" href="status_edit.php?action=edit & id='.$row['Status_id'] . '">UPDATE</a> ';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>