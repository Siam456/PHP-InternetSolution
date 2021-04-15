<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'internet_solution');

if(isset($_POST['insertdata'])){
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $des = $_POST['des'];
    $ldes = $_POST['ldes'];

    $query = "INSERT INTO cart_item (`id`,`name`,`price`,`image`,`description`,`long_description`) VALUES ('$pid','$pname','$price','$img','$des','$ldes')";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
        echo '<script>alert("SAVED");</script>';
        header('Location: add_product.php');
    }else{
        echo '<script>alert("FAILED");</script>';
    }
}

?>