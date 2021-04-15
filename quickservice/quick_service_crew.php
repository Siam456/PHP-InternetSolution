<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CDN Start-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap CDN End -->
    <link rel="shortcut icon" href="circle-cropped.png">
    <!-- ICONS PACK FONT-AWESOME -->
    <script src="https://kit.fontawesome.com/777b9d824c.js" crossorigin="anonymous"></script>
    <!-- END ICONS PACK FONT-AWESOME -->

    <!--DATA TABLE CDN-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <!-- DATA TABLE CDN ENDS -->
    <title>CREW RESPONSE</title>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col">
                <table class="table table-bordered table-striped table-hover my-5 p-2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USER ID</th>
                            <th>Problem</th>
                            <th>DATE</th>
                            <th>ACTION</th>
                            <th>UPDATE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $connection = new mysqli("localhost","root","","internet_solution");
                            $sql = "SELECT * FROM quick_service";
                            $res = $connection->query($sql);
                            while($row=$res->fetch_assoc()){
                                $action = $row['action'];
                        ?>
                        <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['user_id']?></td>
                            <td><?=$row['problem']?></td>
                            <td><?=$row['date']?></td>
                            <?php
                                if(strlen($action)>7){
                                    echo "<td style='color:#ffae42; font-weight:bolder;' id='action'> $action </td>";
                                }elseif(strlen($action)==6){
                                    echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $action </td>";
                                }else{
                                    echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $action </td>";
                                }
                            ?>
                            <td>
                                <button type="button" class="btn btn-success editbtn btn-block" id="editbtn" data-toggle="modal" data-target="#editmodal">EDIT</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--EDIT POP UP MODAL-->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">UPDATE ACTION STATUS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="qsc_update.php" method="POST">
      <div class="modal-body">
            <input type="hidden" name="update_id" id="update_id">
            <div class="form-group">
                    <label for="actionselect">Example select</label>
                    <select class="form-control" id="actionselect" name="actionselect" id="package">
                    <option>Update</option>
                    <option>WORKING ON IT</option>
                    <option>SOLVED</option>

                    </select>
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
            $('#editbtn').val(data[1]);

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