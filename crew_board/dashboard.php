<?php session_start(); if($_SESSION['check']== 1): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- ICONS PACK FONT-AWESOME -->
    <script src="https://kit.fontawesome.com/777b9d824c.js" crossorigin="anonymous"></script>
    <!-- END ICONS PACK FONT-AWESOME -->
    <title>CREW DASHBAORD</title>
</head>
<body>
<?php
    include("./crew_nav.php");
?>
    <div class="container">
    <div class="jumbotron">
    <h4 class="text-center">CREW DASHBOARD</h4><hr><hr>
        <div class="row">
            <div class="col-md-4 d-block mx-auto">
                <div style="height: 120px; width:300px; background-color:#FC766AFF; border-radius: 25px 5px" class="d-block mx-auto" >
                    <?php
                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,'internet_solution');
                        $sql = "SELECT * FROM users";
                        $run = mysqli_query($connection,$sql);
                        $count = mysqli_num_rows($run);
                        $sql2 = "SELECT action FROM quick_service WHERE action = 'PENDING'";
                        $run2 = mysqli_query($connection,$sql2);
                        $count2 = mysqli_num_rows($run2);
                        $sql3 = "SELECT * FROM package_request";
                        $sql4 = "SELECT * FROM product_request";
                        $run3 = mysqli_query($connection,$sql3);
                        $run4 = mysqli_query($connection,$sql4);
                        $count3 = mysqli_num_rows($run3);
                        $count4 = mysqli_num_rows($run4);
                        $count5 = $count3 + $count4;
                    ?>
                     <i class="fas fa-users text-center d-block mx-auto text-white" style="padding:5px;font-size:30px;"></i>
                     <p class="text-white" style="text-align:center; font-size:xx-large;"><?php echo " " .$count. " "?><span style="font-size: large;">USERS</span></p>
                    <a href="./view_user.php" class="text-white d-block mx-auto text-center" style="font-size: smaller;">SEE ALL <i class="far fa-hand-point-right"></i></a>
                </div>
            </div>
            <div class="col-md-4 d-block mx-auto" >
                <div style="height: 120px; width:300px; background-color:red; background-color: #5B84B1FF; border-radius: 5px 25px" class="d-block mx-auto">
                <i class="fas fa-tachometer-alt text-center d-block mx-auto text-white" style="padding:5px;font-size:30px"></i>
                     <p class="text-white" style="text-align:center; font-size:xx-large;"><?php echo " " .$count2. " "?><span style="font-size: large;">EMERGENCIES</span></p>
                    <a href="./quick_service_crew.php" class="text-white d-block mx-auto text-center" style="font-size: smaller;">SEE ALL <i class="far fa-hand-point-right"></i></a>
                </div>
            </div>
            <div class="col-md-4 d-block mx-auto">
            <div style="height: 120px; width:300px; background-color:red; background-color:#5F4B8BFF; border-radius:25px 5px" class="d-block mx-auto">
                <i class="fas fa-inbox text-center d-block mx-auto text-white" style="padding:5px;font-size:30px"></i>
                <p class="text-white" style="text-align:center; font-size:xx-large;"><?php echo " " .$count5. " "?><span style="font-size: large;">REQUESTS</span></p>
                <a href="./package_requests.php" class="text-white d-block mx-auto text-center" style="font-size: smaller;">SEE ALL <i class="far fa-hand-point-right"></i></a>

            </div>
            </div>
        </div>
        <hr><hr>
        <div class="row">
            <div class="col"><?php include("./piechart.php") ?></div>
        </div><hr><hr>
        <div class="row">
            <div class="col"><?php include("./barchart.php") ?></div>
            <div class="col">
            <div style="height: 500px; width:100%; background-color:red; background-color:#9CC3D5FF;" class="d-block mx-auto">
                <p class="text-center p-2 text-white" style="font-size: 25px;">AWARD</p>
                <i class="fas fa-trophy d-block mx-auto" style="font-size: 150px; text-align:center; padding:20px; color: #ffcc66"></i>
                <p class="text-center p-2 text-white" style="font-size: 25px;">BEST CREW OF MONTH MARCH</p>
                <p class="text-center p-2 text-white" style="font-size: 35px;"><i class="fas fa-medal" style="color: #ffcc66;"></i>   HASIBUL HASAN SIAM   <i class="fas fa-medal" style="color: #ffcc66;"></i></p>

            </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
<?php else: ?>
<h1>Please Log In first....</h1>
      <?php endif; ?>