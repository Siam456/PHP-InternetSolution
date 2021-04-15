<?php 

$id = 0;

$userid = '';
$user = '';
$cpass = '';
$cphone = '';
$cemail = '';
$caddress = '';
$package = '';
$ipadd = '';


$update = false;
$mysqli = new mysqli('localhost', 'root', '', 'internet_solution')or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
    
    
    
    $userid = $_POST['crewid'];
    $user = $_POST['crew'];
    $cpass = $_POST['crewpass'];
    $cphone = $_POST['crewphone'];
    $cemail = $_POST['crewemail'];
    $caddress = $_POST['caddress'];
    $package = $_POST['joiningdate'];
    $ipadd = $_POST['salary'];
    

    $mysqli->query("INSERT INTO crewlogin (crewid, name, password, phone, email, address, joiningdate, salary) values('$userid', '$user', '$cpass', '$cphone', '$cemail', '$caddress', '$package', '$ipadd')") or die($mysqli->error);

    header("location: http://127.0.0.1/wecourse/project/admincrewdisplay.php");
}

if(isset($_GET['delete'])){
    
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM crewlogin where crewid='$id'")or die($mysqli->error);
    header("location: http://127.0.0.1/wecourse/project/admincrewdisplay.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM crewlogin WHERE userid=$id") or die($mysqli->error);
    if($result){
        $row =  $result->fetch_array();

        $userid = $row['crewid'];
        $user = $row['crew'];
        $cpass = $row['crewpass'];
        $cphone = $row['crewphone'];
        $cemail = $row['crewemail'];
        $caddress = $row['caddress'];
        $package = $row['joiningdate'];
        $ipadd = $row['salary'];
    }
}

if(isset($_POST['cancel'])){
    header("location: http://127.0.0.1/wecourse/project/admincrewdisplay.php");

    $update=false;
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $userid = $_POST['crewid'];
    $user = $_POST['crew'];
    $cpass = $_POST['crewpass'];
    $cphone = $_POST['crewphone'];
    $cemail = $_POST['crewemail'];
    $caddress = $_POST['crewaddress'];
    $package = $_POST['joiningdate'];
    $ipadd = $_POST['salary'];

    $mysqli->query("UPDATE crewlogin SET name = '$user', password = '$cpass', phone = '$cphone', email = '$cemail', address = '$caddress', joiningdate = '$package', salary = '$ipadd' where crewid= '$id'") or
    die($mysqli->error);

    header("location: http://127.0.0.1/wecourse/project/admincrewdisplay.php");

    $update=false;
}

?>