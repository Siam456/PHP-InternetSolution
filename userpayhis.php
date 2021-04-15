<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./test2.css">
    <title>Responsive Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
   <style>
       @media (max-width: 500px) {
           .cardb-main{
               margin-left: 0;
               display: block;
           }
       }
  
  </style>
  
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header style="position: fixed; top:0; width:100%;" >
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>pro<span>ject.</span></h3>
      </div>
      <div class="right_area">
        <a href="./userlogin.css" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--php-->
    

    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav" style="position: fixed;">
      <div class="nav_bar">
        <img src="./img/145593431_1610042252515398_4099038912726329984_n.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
      <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="#"><i class="fas fa-users"></i><span>Users Info</span></a>
      <a href="display.php?insert"><i class="fas fa-folder-plus"></i><span>Insert User Info</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <h4>Welcome <span class="text-danger"><?php session_start(); echo $_SESSION['varname']; ?></span> to</h4>
        <h4>Admin panale</h4>
        <div class="btn-danger" style="height: 2px; width: 50%;"></div>
      </div>
      <a href="./userdashbord.php"><i class="fas fa-desktop"></i>Dashboard</a>

      <a href="#"><span class="text-danger"><i class="fas fa-user"></i><span class="text-danger"><?php echo $_SESSION['varname']; ?></span>'s Profile</span></a>

      <a href="./admin.php"><i class="fas fa-money-check-alt"></i><span>Payment</span></a>
      

      <a href="./admin.php"><i class="fas fa-history"></i><span>Payment History</span></a>
      
      <a href="./admin.php"><i class="fas fa-hands-helping"></i><span>Quick Help</span></a>

      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      
    </div>
    <!--sidebar end-->

    
<?php $user11 =  $_SESSION['varname'];?>

    <div class="content" style="align-items: center;">
    <?php 
            $mysqli = new mysqli('localhost', 'root', '', 'internet_solution');
            $result = $mysqli->query("select * from user_payment2 where userid = '$user11'") or die($mysqli->error);


            ?>
        <div class="container">
            <h1>User Info</h1>
            <table class="table">
                <thead  class="thead-dark">
                    <th>USER ID</th>
                    <th>USER NAME</th>
                    <th>PHONE</th>
                    <th>Email</th>
                    <th>NID</th>
                    <th>IP ADDRESS</th>
                    <th>PACK</th>
                    <th>ADDRESS</th>
                    
                </thead>
                <?php
                while ($row = $result->fetch_assoc()): ?>
                <tr>
                
                    <td><?php echo $row['userid']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['nid']?></td>
                    <td><?php echo $row['ipadd']?></td>
                    <td><?php echo $row['pack']?></td>
                    <td><?php echo $row['address']?></td>
                    
                    
                    
                </tr>

                <?php endwhile; ?>
            </table>
        </div>

           
    </div>
        
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
      