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
        <a href="display.php?logout" class="logout_btn">Logout</a>
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

   


    <div class="content">
        <?php 
            $mysqli = new mysqli('localhost', 'root', '', 'internet_solution');
            $result = $mysqli->query("select * from users") or die($mysqli->error);


            ?>
        <div class="container">
            <h1>User Info</h1>
            <table class="table">
                <thead  class="thead-dark">
                    
                    <th>USER ID</th>
                    <th>NAME</th>
                    <th>PASS</th>
                    <th>PHONE</th>
                    <th>EMAIL</th>
                    <th>ADDRESS</th>
                    <th>IP ADDRESS</th>
                    <th>PACKAGE</th>
                    <th>NID</th>
                    
                    <th colspan="2">Action</th>
                </thead>
                <?php
                while ($row = $result->fetch_assoc()): ?>
                <tr>
                

                    <td><?php echo $row['userid']?></td>
                    
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['pass']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['address']?></td>
                    <td><?php echo $row['ipadd']?></td>
                    <td><?php echo $row['pack']?></td>
                    <td><?php echo $row['nid']?></td>
                    
                    <td>
                        <a href="admin.php?edit=<?php echo $row['userid'] ?>" class="btn btn-info mb-1">Edit</a>

                        <a href='process.php?delete=<?php echo $row['userid'] ?>' class="btn btn-danger">Delete</a>
                    </td>
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
      