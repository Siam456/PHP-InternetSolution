<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./test2.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav" style="position: fixed;">
      <div class="nav_bar">
        <img src="./img/145593431_1610042252515398_4099038912726329984_n.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
      <a href="#"><i class="fas fa-desktop text-danger"></i><span class="text-danger">Dashboard</span></a>

      <a href="./user_profile.php"><i class="fas fa-user"></i><span><span class="text-danger"><?php echo $_SESSION['varname']; ?></span>'s Profile</span></a>

      <a href="./admin.php"><i class="fas fa-money-check-alt"></i><span>Payment</span></a>
      

      <a href="./billpayhis.php"><i class="fas fa-history"></i><span>Payment History</span></a>
      
      <a href="./quick_service.php"><i class="fas fa-hands-helping"></i><span>Quick Help</span></a>

      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      </div>
    </div>
    <?php 
    session_start();
    $user11 =  $_SESSION['varname'];
            $mysqli = new mysqli('localhost', 'root', '', 'internet_solution');
            $result = $mysqli->query("select * from users where userid = '$user11'") or die($mysqli->error);
            $row = $result->fetch_assoc();
            $usn = $row['username'];

            ?>
    
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <h4>Welcome <span class="text-danger"><?php  echo $usn; ?></span> to</h4>
        <h4>User Panel</h4>
        <div class="btn-danger" style="height: 2px; width: 50%;"></div>
      </div>
      <a href="./userdashbord.php"><i class="fas fa-desktop"></i><span">Dashboard</span></a>

      <a href="./user_profile.php"><i class="fas fa-user"></i><span><span class="text-danger"><?php echo $usn; ?></span>'s Profile</span></a>

      <a href="./billpay.php"><i class="fas fa-money-check-alt"></i><span>Payment</span></a>
      

      <a href="./billpayhis.php"><i class="fas fa-history"></i><span>Payment History</span></a>
      
      <a href="./quick_service.php"><i class="fas fa-hands-helping"></i><span>Quick Help</span></a>

      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      
    </div>
    <!--sidebar end-->
</body>
</html>