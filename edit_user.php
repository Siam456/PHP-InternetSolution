<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
  <?php
    include("./crew_nav.php");
  ?>


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
      <form action="edit_user_update.php" method="POST">
      <div class="modal-body">
            <input type="hidden" name="userid" id="userid">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Name">User Name</label>
                <input type="text" class="form-control" id="name" name="username" placeholder="Name" required>
                </div>
                <div class="form-group col-md-6">
                <label for="phone">Phone Number</label>
                <input type="number" class="form-control" id="phone" placeholder="Phone" name="phone" min="11" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Name">EMAIL</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Name">IP ADDRESS</label>
                <input type="text" class="form-control" id="ipadd" placeholder="Ip Address" name="ipadd" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
            </div>
            <div class="form-group">
                <label for="nid">NID/Driving License/Passport</label>
                <input type="text" class="form-control" id="nid" placeholder="NID/Driving License" name="nid" required>
            </div>
                <div class="form-group">
                <label for="pack">Package</label>
                <select id="pack" class="form-control" name="pack" required>
                    <option selected>Choose Package</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                </select>
            </div>
            <small class="text-center d-block mx-auto text-danger">CHECK ALL DATA AGAIN</small><hr>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="updatedata" class="btn btn-primary">UPDATE DATA</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- ################################################################################## -->
<!-- ######################################################################### -->

<!-- DELETE -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">DELETE DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="edit_user_delete.php" method="POST">
      <div class="modal-body">
            <input type="hidden" name="delete_id" id="delete_id">
            <h4>Do you want to delte this data</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <button type="submit" name="deletedata" class="btn btn-danger">DELETE</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- ################################################################################## -->
    <div class="container-fluid d-block mx-auto mt-5 p-2">
     <h2 class="text-center">EDIT USER DATA</h2><hr><hr>
            <div class="card">
                <div class="container my-5">
                    <div class="row justify-content-center">
                      <div class="col">
                        <table class="table table-bordered table-striped table-hover my-5 p-2">
                          <thead>
                          <tr>
                            <th scope="col">USER ID</th>
                            <th scope="col">USER NAME</th>
                            <th scope="col">PHONE</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">IP ADDRESS</th>
                            <th scope="col">ADDRESS</th>
                            <th scope="col">NID</th>
                            <th scope="col">PACKAGE</th>
                            <th scope="col">EDIT</th>
                            <th scope="col">DELETE</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                            $connection = mysqli_connect("localhost","root","");
                            $db = mysqli_select_db($connection,'internet_solution');

                            $query = "SELECT * FROM users";
                            $query_run = mysqli_query($connection,$query);
                            while($row=$query_run->fetch_assoc()){
                          ?>
                            <tr>
                              <td><?php echo $row['userid']; ?></td>
                              <td><?php echo $row['username'];?></td>
                              <td><?php echo $row['phone'];?></td>
                              <td><?php echo $row['email'];?></td>
                              <td><?php echo $row['ipadd'];?></td>
                              <td><?php echo $row['address'];?></td>
                              <td><?php echo $row['nid'];?></td>
                              <td><?php echo $row['pack'];?></td>
                              <td>
                              <button type="button" class="btn btn-success editbtn btn-block">EDIT</button>
                              </td>
                              <td>
                                <button type="button" class="btn btn-danger btn-block deletebtn">DELETE</button>
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
    
    <!--FOR EDIT-->
    <script>
    $(document).ready(function(){
        $('.deletebtn').on('click', function(){
            $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children('td').map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);


        });

    });
    
    
  </script>

    <!-- FOR UPDATING -->

    <script>
    $(document).ready(function(){
        $('.editbtn').on('click', function(){
            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children('td').map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#userid').val(data[0]);
            $('#name').val(data[1]);
            $('#phone').val(data[2]);
            $('#email').val(data[3]);
            $('#ipadd').val(data[4]);
            $('#address').val(data[5]);
            $('#nid').val(data[6]);
            $('#pack').val(data[7]);
            
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