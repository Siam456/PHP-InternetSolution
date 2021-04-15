<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("./crew_nav.php")
    ?>

    <div class="container my-5 p-2">
    <h2 class="text-center">ADD USER PAYMENT DATA</h2><hr>
    <h4 class="text-center text-danger">BE VERY CAREFULL AND CHECK TWICE</h4><hr><hr>
        <form action="update_user_bill.php" method="post" autocomplete="off">
        <div class="form-group">
            <label for="userid">INPUT USER ID</label>
            <input type="number" class="form-control" id="userid" name="userid"  placeholder="Enter User ID">
        </div>
        <div class="form-group">
            <label for="month">Select Month</label>
            <select class="form-control" name="month" id="month">
                <option selected>Select Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Select Status</label>
            <select name="status" id="status" class="form-control">
                <option selected>Status</option>
                <option value="PAID">PAID</option>
                <option value="UNPAID">UNPAID</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        </form>


    </div>

    <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,'internet_solution');
        
        if(isset($_POST['submit'])){
            $var = $_POST['month'];
            $id = $_POST['userid'];
            $stat = $_POST['status'];
            $date = date("d-m-Y");

            if($var == "January"){
                $sql = "UPDATE user_payment1 SET January = '$stat' WHERE userid = '$id'";
                $sql2 = "UPDATE user_payment2 SET January = '$date' WHERE userid = '$id'";
                $run = mysqli_query($connection,$sql);
                $run2 = mysqli_query($connection,$sql2);
                echo '<script type="text/javascript"> alert("SUCCESS")</script>';
            }elseif($var == "February"){
                $sql = "UPDATE user_payment1 SET February = '$stat' WHERE userid = '$id'";
                $sql2 = "UPDATE user_payment2 SET February = '$date' WHERE userid = '$id'";
                $run = mysqli_query($connection,$sql);
                $run2 = mysqli_query($connection,$sql2);
                echo '<script type="text/javascript"> alert("Something went wrong")</script>';
            }elseif($var == "March"){
                $sql = "UPDATE user_payment1 SET March = '$stat' WHERE userid = '$id'";
                $sql2 = "UPDATE user_payment2 SET March = '$date' WHERE userid = '$id'";
                $run = mysqli_query($connection,$sql);
                $run2 = mysqli_query($connection,$sql2);
                echo '<script type="text/javascript"> alert("Something went wrong")</script>';
            }elseif($var == "April"){
                $sql = "UPDATE user_payment1 SET April = '$stat' WHERE userid = '$id'";
                $sql2 = "UPDATE user_payment2 SET April = '$date' WHERE userid = '$id'";
                $run = mysqli_query($connection,$sql);
                $run2 = mysqli_query($connection,$sql2);
                echo '<script type="text/javascript"> alert("Something went wrong")</script>';
            }elseif($var == "May"){
                $sql = "UPDATE user_payment1 SET May = '$stat' WHERE userid = '$id'";
                $sql2 = "UPDATE user_payment2 SET May = '$date' WHERE userid = '$id'";
                $run = mysqli_query($connection,$sql);
                $run2 = mysqli_query($connection,$sql2);
                echo '<script type="text/javascript"> alert("Something went wrong")</script>';
            }elseif($var == "June"){
                $sql = "UPDATE user_payment1 SET June = '$stat' WHERE userid = '$id'";
                $sql2 = "UPDATE user_payment2 SET June = '$date' WHERE userid = '$id'";
                $run = mysqli_query($connection,$sql);
                $run2 = mysqli_query($connection,$sql2);
                echo '<script type="text/javascript"> alert("Something went wrong")</script>';
            }elseif($var == "July"){
                $sql = "UPDATE user_payment1 SET July = '$stat' WHERE userid = '$id'";
                $sql2 = "UPDATE user_payment2 SET July = '$date' WHERE userid = '$id'";
                $run = mysqli_query($connection,$sql);
                $run2 = mysqli_query($connection,$sql2);
                echo '<script type="text/javascript"> alert("Something went wrong")</script>';
            }elseif($var == "August"){
                $sql = "UPDATE user_payment1 SET August = '$stat' WHERE userid = '$id'";
                $sql2 = "UPDATE user_payment2 SET August = '$date' WHERE userid = '$id'";
                $run = mysqli_query($connection,$sql);
                $run2 = mysqli_query($connection,$sql2);
                echo '<script type="text/javascript"> alert("Something went wrong")</script>';
            }elseif($var == "September"){
                $sql = "UPDATE user_payment1 SET September = '$stat' WHERE userid = '$id'";
                $sql2 = "UPDATE user_payment2 SET September = '$date' WHERE userid = '$id'";
                $run = mysqli_query($connection,$sql);
                $run2 = mysqli_query($connection,$sql2);
                echo '<script type="text/javascript"> alert("Something went wrong")</script>';
            }elseif($var == "October"){
                $sql = "UPDATE user_payment1 SET October = '$stat' WHERE userid = '$id'";
                $sql2 = "UPDATE user_payment2 SET October = '$date' WHERE userid = '$id'";
                $run = mysqli_query($connection,$sql);
                $run2 = mysqli_query($connection,$sql2);
                echo '<script type="text/javascript"> alert("Something went wrong")</script>';
            }elseif($var == "November"){
                $sql = "UPDATE user_payment1 SET November = '$stat' WHERE userid = '$id'";
                $sql2 = "UPDATE user_payment2 SET November = '$date' WHERE userid = '$id'";
                $run = mysqli_query($connection,$sql);
                $run2 = mysqli_query($connection,$sql2);
                echo '<script type="text/javascript"> alert("Something went wrong")</script>';
            }elseif($var == "December"){
                $sql = "UPDATE user_payment1 SET December = '$stat' WHERE userid = '$id'";
                $sql2 = "UPDATE user_payment2 SET December = '$date' WHERE userid = '$id'";
                $run = mysqli_query($connection,$sql);
                $run2 = mysqli_query($connection,$sql2);
                echo '<script type="text/javascript"> alert("Something went wrong")</script>';
            }else{
                     
            }
        }
    ?>
</body>
</html>