<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'internet_solution');


if(isset($_POST['updatedata'])){

    $id = $_POST['update_id'];
    $soltime = $_POST['soltime'];
    $current = $_POST['current'];

    $query = "UPDATE worksheet SET soltime='$soltime', current='$current' WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
        echo '<script> alert("Data Updated"); </script>';
        header("location: work_sheet_update.php");
    }else{
        echo '<script> alert("Not Updated"); </script>';
    }
}


?>