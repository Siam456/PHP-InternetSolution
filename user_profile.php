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
        <a href="./userlogin.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--php-->
   
    

    <!--header area end-->
    <?php include('./userslidebar.php'); ?>

    

<?php $user11 =  $_SESSION['varname'];?>




    <div class="content" style="align-items: center;">
    <?php 
            $mysqli = new mysqli('localhost', 'root', '', 'internet_solution');
            $result = $mysqli->query("select * from users where userid = '$user11'") or die($mysqli->error);


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
      