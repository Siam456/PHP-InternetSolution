<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'internet_solution');

if(isset($_POST['submit'])){
    if(!empty("$_POST.['userid']") && !empty("$_POST.['complain']") ){
        echo "<script>alert('missing data!');</script>";
    }
    $userid = $_POST['userid'];
    $complain = $_POST['complain'];
    $action = "PENDING";
    $sql = "INSERT INTO quick_service (user_id,problem,action) VALUE ('$userid','$complain','$action')";
    $run = mysqli_query($connection,$sql);
    if($run){
        echo '<script>alert("DONE");</script>';
        header("Location:quick_service.php");
    }else{
        echo '<script>alert("SORRY");</script>';
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
    <title></title>
</head>
<body>
<a href="./userdashbord.php" style="position: absolute; top: 1%; right: 11%; margin-bottom:20px;" class="btn btn-danger">Back</a>
    
    <div class="container">     
        <div class="jumbotron">
            <div class="row">
                <div class="col">
                    <div class="form">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="userid">UserID</label>
                            <input type="text" class="form-control" name="userid" id="userid" aria-describedby="userid" placeholder="Enter user id" minlength="4" required>
                        </div>
                        <div class="form-group">
                            <label for="complain">Enter Your Complain</label>
                            <textarea class="form-control" id="complain" name="complain" rows="3" placeholder="Enter Your Complain Please" required minlength="20"></textarea>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card mt-5">
            <div class="card-body">
            <table class="table table-bordered table-striped table-hover my-5 p-2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USER ID</th>
                            <th>Problem</th>
                            <th>DATE</th>
                            <th>ACTION</th>
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
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('table').DataTable();
        });
    </script>
</body>
</html>