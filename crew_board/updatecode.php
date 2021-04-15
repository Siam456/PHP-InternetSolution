<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'internet_solution');


if(isset($_POST['updatedata'])){

    $id = $_POST['update_id'];
    // $id1 = $_POST['pid'];
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $des = $_POST['des'];
    $ldes = $_POST['ldes'];

    $query = "UPDATE cart_item SET name='$pname', price='$price', image='$img', description='$des', long_description = '$ldes' WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
        echo '<script> alert("Data Updated"); </script>';
        header("location:add_product.php");
    }else{
        echo '<script> alert("Not Updated"); </script>';
    }
}


?>