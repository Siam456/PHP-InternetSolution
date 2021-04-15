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

    <!-- DATA TABLE CDN ENDS -->
    <title>Document</title>
</head>
<body>
    <?php
        include("./crew_nav.php");
    ?>
<div class="container my-3 p-1">
            <div class="card">
                <h2 class="text-center my-2">USER INFORMATION DATABASE</h2><hr><hr>
                <small class="text-center d-block mx-auto text-danger">CONFIDENTIAL</small>
                <div class="container my-5">
                    <div class="row justify-content-center">
                      <div class="col">
                        <table class="table table-bordered table-striped table-hover my-5 p-2">
                          <thead>
                          <tr>
                            <th scope="col">USER ID</th>
                            <th scope="col">IP ADDRESS</th>
                            <th scope="col">USER NAME</th>
                            <th scope="col">PHONE NUMBER</th>
                            <th scope="col">ADDRESS</th>
                            <th scope="col">PACKAGE</th>
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
                              <td><?php echo $row['ipadd'];?></td>
                              <td><?php echo $row['username'];?></td>
                              <td><?php echo $row['phone'];?></td>
                              <td><?php echo $row['address'];?></td>
                              <td><?php echo $row['pack'];?></td>
                              </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                      </div>
                            
                    </div>
                </div>
            </div>
    </div>
    </script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('table').DataTable();
        });
    </script>
</body>
</html>