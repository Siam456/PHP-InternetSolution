<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    <script src="https://kit.fontawesome.com/777b9d824c.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="font-awesome.min.css">

      <link rel="icon" href="./PngItem_3468312.png">

    <link rel="stylesheet" type="text/css" href="admin.css">

    <title>adminLogIn</title>
</head>
<body>
  

    <div id="particles-js">
    <a href="./home.php" style="position: absolute; top:5%; right:20%;" class="btn btn-danger">Home</a>
    <a href="./userlogin.css" style="position: absolute; top:5%; right:15%;" class="btn btn-danger">User</a>
    <a href="./crew_login.php" style="position: absolute; top:5%; right:9.5%;" class="btn btn-danger">Crew</a>
    ?>
        <div class="container">
            
            <div class="login">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <h3 style="text-transform: uppercase;">admin Log In</h3>
                    <div class="bar" style="height: 2px; width: 40%; background-color: wheat; margin-bottom:10px;"></div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">User Name</label>
                      <input type="text" name="user1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-danger" id="btn" name="login">Submit</button>
                  </form>
            </div>

    </div>
    

    <?php 

if(isset($_POST['login'])){
  $username = $_POST['user1'];
  $passw = $_POST['pass'];

  session_start();
  $_SESSION['check'] = 0;

  $connect = mysqli_connect("localhost", "root", "");
  mysqli_select_db($connect, "internet_solution");
  
  $result = mysqli_query($connect, "select * from admin_login where user='$username' and password = '$passw'");

  $res = mysqli_fetch_array($result);
  if($res['user'] == $username && $res['password'] == $passw){
    $_SESSION['check'] = 1;
    $up = false;
    header("location: http://127.0.0.1/wecourse/project/admindeshbord.php");
  } else{
    header("location: http://127.0.0.1/wecourse/project/admindeshbord.php");
  }
}

   

?>

    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>