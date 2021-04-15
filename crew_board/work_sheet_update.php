<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    
    <!--DATA TABLE CDN-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
        include("crew_nav.php");
    
    ?>
        <div class="container my-3 p-1">
            <div class="card">
                <h2 class="text-center my-2">UPDATE</h2><hr>
                <div class="container my-5">
                    <div class="row justify-content-center">
                      <div class="col">
                        <table class="table table-bordered table-striped table-hover my-5 p-2">
                          <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">USER ID</th>
                            <th scope="col">DATE</th>
                            <th scope="col">PHONE</th>
                            <th scope="col">COMPLAIN</th>
                            <th scope="col">SOLVE TIME</th>
                            <th scope="col">CURRENT STATUS</th>
                            <th scope="col">EDIT</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                            $connection = mysqli_connect("localhost","root","");
                            $db = mysqli_select_db($connection,'internet_solution');

                            $query = "SELECT * FROM worksheet";
                            $query_run = mysqli_query($connection,$query);
                            while($row=$query_run->fetch_assoc()){
                          ?>
                            <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['userid'];?></td>
                              <td><?php echo $row['date'];?></td>
                              <td><?php echo $row['phone'];?></td>
                              <td><?php echo $row['complain'];?></td>
                              <td><?php echo $row['soltime'];?></td>
                              <td><?php echo $row['current'];?></td>
                              <td>
                              <button type="button" class="btn btn-success editbtn btn-block">EDIT</button>
                              </td>
                              </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                      </div>
                            
                    </div>
                </div>
            </div>
    </div>
    <!-- EDIT POP UP -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">EDIT DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="work_sheet_update_code.php" method="POST">
      <div class="modal-body">
            <input type="hidden" name="update_id" id="update_id">
              <div class="form-group">
                  <label for="soltime">Solve Time</label>
                    <input type="text" name="soltime" id="soltime" class="form-control" placeholder="Enter Solve Time" required>
              </div>
              <div class="form-group">
                  <label for="current">Current Status</label>
                    <input type="text" name="current" id="current" class="form-control" placeholder="Current Status?" required>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="updatedata" class="btn btn-primary">UPDATE DATA</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        $('.editbtn').on('click', function(){
            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children('td').map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);

        });

    });
    
    
    </script>
            <script type="text/javascript">
        $(document).ready(function(){
            $('table').DataTable();
        });
    </script>
</body>
</html>