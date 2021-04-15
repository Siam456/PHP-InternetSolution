<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'internet_solution');

if(isset($_POST['deletedata'])){
    $id = $_POST['delete_id'];

    $query = "DELETE FROM cart_item WHERE id = '$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
        echo '<script> alert("Data Deleted");</script>';
        header("location:add_product.php");
    }else{
        echo '<script> alert("Could Not Delete"); </script>';
    }
}



?>