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
        <a href="./userlogin.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--php-->
    

    <!--header area end-->
    <!--mobile navigation bar start-->
    <?php include('./userslidebar.php'); ?>
    
    <!--sidebar end-->

   


    <div class="content">
        <?php 
        
        $user11 =  $_SESSION['varname'];
            $mysqli = new mysqli('localhost', 'root', '', 'internet_solution');
            $result = $mysqli->query("select * from user_payment1 where userid = '$user11'") or die($mysqli->error);


            ?>
        <div class="container">
            <h1>Payment History</h1>
            <table class="table">
                <thead  class="thead-dark">
                    
                    <th>USER ID</th>
                    <th>Pack</th>
                    <th>January</th>
                    <th>February</th>
                    <th>March</th>
                    <th>April</th>
                    <th>May</th>
                    <th>June</th>
                    <th>July</th>
                    <th>August</th>
                    <th>September</th>
                    <th>Octobar</th>
                    <th>November</th>
                    <th>December</th>
                   
                   
                    
                    
                </thead>
                <?php
                while ($row = $result->fetch_assoc()):  
                  $jan = $row['January'];
                  $feb = $row['February'];
                  $mar = $row['March'];
                  $apr = $row['April'];
                  $may = $row['May'];
                  $jun = $row['June'];
                  $jul = $row['July'];
                  $aug = $row['August'];
                  $sep = $row['September'];
                  $oct = $row['October'];
                  $nov = $row['November'];
                  $dec = $row['December'];
                
                ?>
                <tr>
                  
                      <td><?php echo $row['userid']; ?></td>
                      <td><?php echo $row['pack'];?></td>
                      <?php if(strlen($jan) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $jan </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $jan </td>";} ?>
                      <?php if(strlen($feb) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $feb </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $feb </td>";} ?>
                      <?php if(strlen($mar) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $mar </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $mar </td>";} ?>
                      <?php if(strlen($apr) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $apr </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $apr </td>";} ?>
                      <?php if(strlen($may) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $may </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $may </td>";} ?>
                      <?php if(strlen($jun) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $jun </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $jun </td>";} ?>
                      <?php if(strlen($jul) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $jul </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $jul </td>";} ?>
                      <?php if(strlen($aug) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $aug </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $aug </td>";} ?>
                      <?php if(strlen($sep) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $sep </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $sep </td>";} ?>
                      <?php if(strlen($oct) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $oct </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $oct </td>";} ?>
                      <?php if(strlen($nov) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $nov </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $nov </td>";} ?>
                      <?php if(strlen($dec) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $dec </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $dec </td>";} ?>
                      </tr>

                    
                    
                    
                    
                    
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
      