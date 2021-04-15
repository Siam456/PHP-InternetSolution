<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'internet_solution');

if(isset($_POST['submit'])){
    $date = date('d/m/Y');
    $username = $_POST['username'];
    $userid = $_POST['userid'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $comtime = $_POST['comtime'];
    $soltime = $_POST['soltime'];
    $team = $_POST['sp1']." ".$_POST['sp2'];
    $complain = $_POST['complain'];
    $current = $_POST['current'];


    $query = "INSERT INTO worksheet (`date`,`username`,`userid`,`phone`,`address`,`comtime`,`soltime`,`team`,`complain`,`current`) VALUES ('$date','$username','$userid','$phone','$address','$comtime','$soltime','$team','$complain','$current')";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo '<script>alert("SAVED");</script>';
        header('Location: work_sheet.php');
    }else{
        echo '<script>alert("FAILED");</script>';
    }
}

?>