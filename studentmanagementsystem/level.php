<?php include 'connection.php';
include 'topnav.php'; ?>
           <div class="col-lg-12">

            <div>
            <i class="fa fa-table"></i>

            Year Level Records <br></br> 
              
              <a href="levelAdd.php?action=add" type="button" class="btn btn-xs  fa fa-user-plus">Add New</a>
            </div>    

          <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>LEVEL ID</th> 
                                        <th>YEAR LEVEL</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM level';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['level_id'].'</td>';
                            echo '<td>'. $row['year_level'].'</td>';
                            echo '<td>';
                            echo ' <a  type="button" class="btn btn-xs btn-warning fa fa-edit" href="leveledit.php?action=edit & id='.$row['level_id'] . '">UPDATE</a> ';
                            
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>