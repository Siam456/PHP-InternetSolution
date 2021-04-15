<?php
session_start();

$connect = mysqli_connect("localhost","root","","internet_solution");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!--Bootstrap CDN Start-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap CDN End -->
    <link rel="shortcut icon" href="circle-cropped.png">
    <!-- ICONS PACK FONT-AWESOME -->
    <script src="https://kit.fontawesome.com/777b9d824c.js" crossorigin="anonymous"></script>
    <!-- END ICONS PACK FONT-AWESOME -->
    <title>Document</title>
</head>
<body>
<form action="#" method="POST">
<div class="container">
  <div class="form-group">
    <label for="mail">Email address</label>
    <input type="number" class="form-control" name="mail" id="mail" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass"  name="pass" placeholder="Password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php

if(isset($_POST['submit'])){
    if(isset($_POST['mail']) != "" && isset($_POST['pass']) != ""){
        $id = $_POST['mail'];
        $pass = $_POST['pass'];
        $sql = "INSERT INTO login (id,pass) VALUES ('$id','$pass')";
        $res = mysqli_query($connect,$sql);
        if($res){
            echo "<script> alert('done');</script?";
        }else{
            echo "<script> alert('not');</script?";
        }
    }

}



?>
</body>
</html>