<?php session_start(); if($_SESSION['check']== 1): ?>

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
      <h3>Internet<span>Solution</span></h3>
      </div>
      <div class="right_area">
        <a href="userdashbord.php?logout" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--php-->

    <?php 
    if(isset($_GET['logout'])){
      $_SESSION['check']= 0;
      header('location: http://127.0.0.1/wecourse/project/userlogin.php');

    }

    ?>
    

    <?php include('./userslidebar.php');?>

    


    <div class="content" style="align-items: center;">
    <h1>Uers DashBoasrd</h1>

        <div class="row" style="margin:auto;">
            <div class="col-sm-3 btn-success pb-5 ml-5" style="border-radius: 10px;">
                <a href="#"  class="card-btn btn-success" style="font-size:30px; text-align:center; border-radius: 10px; text-decoration: none;"><span style="display: block; margin-top: 47px;"><i class="fas fa-tachometer-alt"></i> Deshboard</span></a>

            </div>

            <div class="col-sm-3 btn-danger pb-5 ml-5" style="border-radius: 10px;">
                <a href="./user_profile.php"  class="card-btn btn-danger" style="font-size:30px; text-align:center; border-radius: 10px; text-decoration: none;"><span style="display: block; margin-top: 47px;"><i class="fas fa-user"></i> My Profile</span></a>

            </div>


            <div class="col-sm-3 btn-warning pb-5 ml-5" style="border-radius: 10px;">
                <a href="#"  class="card-btn btn-warning" style="font-size:30px; text-align:center; border-radius: 10px; text-decoration: none;"><span style="display: block; margin-top: 47px;"><i class="fas fa-money-check-alt"></i> Payment</span></a>

            </div>

            </div>

            <div class="row mt-5" style="margin:auto;">
            

            <div class="col-sm-3 btn-dark pb-5 ml-5" style="border-radius: 10px;">
                <a href="./billpayhis.php"  class="card-btn btn-dark" style="font-size:30px; text-align:center; border-radius: 10px; text-decoration: none;"><span style="display: block; margin-top: 47px;"><i class="fas fa-history"></i> Pay Hisroy</span></a>

            </div>


            <div class="col-sm-3 btn-info pb-5 ml-5" style="border-radius: 10px;">
                <a href="./quick_service.php"  class="card-btn btn-info" style="font-size:30px; text-align:center; border-radius: 10px; text-decoration: none;"><span style="display: block; margin-top: 47px;"><i class="fas fa-hands-helping"></i> Quick Help</span></a>

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

<?php else: ?>
<h1>Please Log In first....</h1>
      <?php endif; ?>