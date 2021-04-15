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
  
  <body>

  <?php 
  require_once 'process.php';
?>
<?php
    $user_name = "siam";
?>

<?php 
$mysqli = new mysqli('localhost', 'root', '', 'adminlogin');
$result = $mysqli->query("select * from userlogin") or die($mysqli->error);


?>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header style="position: fixed; top:0; width:100%;" >
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>siam <span>Snow</span></h3>
      </div>
      <div class="right_area">
        <a href="insert.php?logout" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--php-->
    <?php
    if(isset($_REQUEST['logout'])){
        header("location: http://localhost/php/adminlogin.php");
    }
    ?>

    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="./img/145593431_1610042252515398_4099038912726329984_n.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="insert.php?display"><i class="fas fa-users"></i><span>Users Info</span></a>
        <a href="#"><i class="fas fa-folder-plus"></i><span>Insert User Info</span></a>
        <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="./img/145593431_1610042252515398_4099038912726329984_n.jpg" class="profile_image" alt="">
        <h4><?php echo $user_name; ?></h4>
      </div>
      <a href="./admindeshbord.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="./display.php"><i class="fas fa-users"></i><span>Users Info</span></a>
      <a href="#"><span class="text-danger"><i class="fas fa-folder-plus"></i>Insert User Info</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <?php 
    if(isset($_REQUEST['display'])){
        header("location: http://localhost/php/display.php");
    }
    ?>


    <div class="content">
    <div class="row justify-content-center">
        <form action="process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="form-group">
            
                <input type="text" name="user" class="form-control" placeholder="User Name" value="<?php echo $name ?>">
            </div>

            <div class="form-group">
            
                <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $name ?>">
            </div>

            <div class="form-group">
            
                <input type="text" name="pass" class="form-control" placeholder="Password" value="<?php echo $pass ?>">
            </div>

            <div class="form-group">
            
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php echo $name ?>">
            </div>


            <div class="form-group">
            
                <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $name ?>">
            </div>

            <div class="form-group">
            
                <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo $name ?>">
            </div>

            <div class="form-group">
            
                <input type="text" name="package" class="form-control" placeholder="Package" value="<?php echo $name ?>">
            </div>

            <?php 
            if($update== true):
            ?>
            <button type="submit" name="update" class="btn btn-info">Update</button>

            <button type="submit" name="cancel" class="btn btn-danger">Cancel</button>
            <?php else: ?>
            <button type="submit" name="save" class="btn btn-danger">save</button>
            <?php endif; ?>
    </form>
    </div>
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
      