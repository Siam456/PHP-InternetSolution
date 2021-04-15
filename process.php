<?php 

$id = 0;

$userid = '';
$user = '';
$pass = '';
$phone = '';
$email = '';
$address = '';
$package = '';
$ipadd = '';
$nid = '';

$update = false;
$mysqli = new mysqli('localhost', 'root', '', 'internet_solution')or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
    
    
    
    $userid = $_POST['userid'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $package = $_POST['package'];
    $ipadd = $_POST['ipadd'];
    $nid = $_POST['nid'];

    $mysqli->query("INSERT INTO users (userid, username, ipadd, phone, email, address ,pass, pack,  nid) values('$userid','$user', '$ipadd', '$phone', '$email', '$address', '$pass', '$package', '$nid')") or die($mysqli->error);

    $mysqli->query("INSERT INTO user_payment2 (userid, pack) values('$userid', '$package')") or die($mysqli->error);
    $mysqli->query("INSERT INTO user_payment1 (userid, pack) values('$userid', '$package')") or die($mysqli->error);

    header("location: http://127.0.0.1/wecourse/project/display.php");
}

if(isset($_GET['delete'])){
    
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM users where userid='$id'")or die($mysqli->error);
    header("location: http://localhost/php/display.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM users WHERE userid=$id") or die($mysqli->error);
    if($result){
        $row =  $result->fetch_array();

        $userid = $row['userid'];
        $user = $row['user'];
        $pass = $row['pass'];
        $phone = $row['phone'];
        $email = $row['email'];
        $address = $row['address'];
        $package = $row['package'];
        $ipadd = $row['ipadd'];
        $nid = $row['nid'];
    }
}

if(isset($_POST['cancel'])){
    header("location: http://localhost/php/display.php");
    $update=false;
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $userid = $_POST['userid'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $package = $_POST['package'];
    $ipadd = $_POST['ipadd'];
    $nid = $_POST['nid'];

    $mysqli->query("UPDATE users SET username = '$user', ipadd = '$ipadd', phone = '$phone', email = '$email', address = 'address', pack = '$package', nid = '$nid' where userid= $id") or
    die($mysqli->error);

    header("location: http://localhost/php/display.php");
    $update=false;
}

?>