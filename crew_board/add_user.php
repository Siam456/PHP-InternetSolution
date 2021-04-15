<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>ADD USER</title>
</head>
<body>
    <?php
    include("./crew_nav.php")
    ?>
    <div class="container my-3 p-2">
        <h2 class="text-center">ADD NEW USER</h2>
        <small class="text-center d-block mx-auto text-danger">FILL ALL THE INPUT CORRENT AND CAREFULLY</small>
        <form class="mt-3 d-block mx-auto" action="" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Name">User Name</label>
                <input type="text" class="form-control" id="name" name="username" placeholder="Name" required>
                </div>
                <div class="form-group col-md-6">
                <label for="phone">Phone Number</label>
                <input type="number" class="form-control" id="phone" placeholder="Phone" name="phone" min="11" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Name">EMAIL</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                </div>
                <div class="form-group col-md-6">
                <label for="phone">User ID</label>
                <input type="number" class="form-control" id="userid" placeholder="User ID" min="6" name="userid" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Name">IP ADDRESS</label>
                <input type="text" class="form-control" id="ipadd" placeholder="Ip Address" name="ipadd" required>
                </div>
                <div class="form-group col-md-6">
                <label for="phone">Initial Password</label>
                <input type="pass" class="form-control" id="pass" placeholder="Password" min="6" name="pass" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
            </div>
            <div class="form-group">
                <label for="nid">NID/Driving License/Passport</label>
                <input type="text" class="form-control" id="nid" placeholder="NID/Driving License" name="nid" required>
            </div>
                <div class="form-group">
                <label for="pack">Package</label>
                <select id="pack" class="form-control" name="pack" required>
                    <option selected>Choose Package</option>
                    <option>UDDOKTA</option>
                    <option>Gamers Choice</option>
                    <option>FREELANCER</option>
                    <option>TURBO</option>
                    <option>DURBAR</option>
                    <option>SME 1</option>
                    <option>SME 2</option>
                </select>
            </div>
            <small class="text-center d-block mx-auto text-danger">CHECK ALL DATA AGAIN</small><hr>
            <button type="submit" name="insertdata" class="btn btn-block btn-primary">ADD NEW USER</button>
            </form>
    </div>

    <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,'internet_solution');
        
        if(isset($_POST['insertdata'])){
            $userid = $_POST['userid'];
            $username = $_POST['username'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $ipadd = $_POST['ipadd'];
            $pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);
            $address = $_POST['address'];
            $nid = $_POST['nid'];
            $pack = $_POST['pack'];
        
            $query = "INSERT INTO users (`userid`,`username`,`phone`,`email`,`ipadd`,`pass`,`address`,`nid`,`pack`) VALUES ('$userid','$username','$phone','$email','$ipadd','$pass','$address','$nid','$pack')";
            $query2 = "INSERT INTO user_payment1 (`userid`,`pack`) VALUES ('$userid','$pack')";
            $query3 = "INSERT INTO user_payment2 (`userid`,`pack`) VALUES ('$userid','$pack')";
            $query_run = mysqli_query($connection,$query);
            $query_run2 = mysqli_query($connection,$query2);
            $query_run3 = mysqli_query($connection,$query3);
        
            if($query_run){
                echo '<script>alert("SAVED");</script>';
                header('Location: add_user.php');
            }else{
                echo '<script>alert("FAILED");</script>';
            }
        }
        

    ?>

</body>
</html>