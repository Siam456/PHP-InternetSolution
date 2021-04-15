<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'internet_solution');

if(isset($_POST['deletedata'])){
    $id = $_POST['delete_id'];

    $query = "DELETE FROM quick_service WHERE id = '$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
        echo '<script> alert("Data Deleted");</script>';
        header("location: quick_service_admin.php");
    }else{
        echo '<script> alert("Could Not Delete"); </script>';
    }
}



?>


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
    <title>ADMIN FOR QUICK RESPONSE</title>
</head>
<body>
    <div class="container my-5">
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
                                <form action="" method="POST">
                                    <button type="button" class="btn btn-danger btn-block deletebtn">DELETE</button>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
    </div>

    <!--Modal-->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">DELETE DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="quick_service_admin.php" method="POST">
      <div class="modal-body">
            <input type="hidden" name="delete_id" id="delete_id">
            <h4>Do you want to delete this data</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <button type="submit" name="deletedata" class="btn btn-danger">DELETE</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--ends-->
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
      <script type="text/javascript">
        $(document).ready(function(){
            $('table').DataTable();
        });
    </script>
</body>
</html>