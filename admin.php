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


    <input type="checkbox" id="check">
    <!--header area start-->
    <header style="position: fixed; top:0; width:100%;" >
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
      <h3>Internet<span>Solution</span></h3>
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
    <?php include('./mobilenav.php'); ?>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <?php include('./slidebar.php'); ?>
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
        
        <?php
        if($update== true):
            ?>
            <h1 style="padding: 60px;">Update User Info</h1><?php else: ?>
              <h1 style="padding: 60px;">Insert User Info</h1>
            <?php endif; ?>
          
            <div class="form-group">
            
            <input type="text" name="userid" class="form-control" placeholder="User ID" value="<?php echo $userid ?>">
        </div>
            <div class="form-group">
            
                <input type="text" name="user" class="form-control" placeholder="User Name" value="<?php echo $user ?>">
            </div>

            

            <div class="form-group">
            
                <input type="text" name="pass" class="form-control" placeholder="Password" value="<?php echo $pass ?>">
            </div>

            <div class="form-group">
            
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php echo $phone ?>">
            </div>


            <div class="form-group">
            
                <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email ?>">
            </div>

            <div class="form-group">
            
                <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo $address ?>">
            </div>

            <div class="form-group">
            
                <input type="text" name="package" class="form-control" placeholder="Package" value="<?php echo $package ?>">
            </div>

            <div class="form-group">
            
                <input type="text" name="ipadd" class="form-control" placeholder="Ip Address" value="<?php echo $ipadd ?>">
            </div>

            <div class="form-group">
            
                <input type="text" name="nid" class="form-control" placeholder="nid" value="<?php echo $nid ?>">
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
      