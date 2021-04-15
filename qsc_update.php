<?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, 'internet_solution');


        if(isset($_POST['updatedata'])){

            $id = $_POST['update_id'];
            // $id1 = $_POST['pid'];
            $action = $_POST['actionselect'];

            $query = "UPDATE quick_service SET action = '$action' WHERE id='$id' ";
            $query_run = mysqli_query($connection,$query);

            if($query_run){
                echo '<script> alert("Data Updated"); </script>';
                header("location:quick_service_crew.php");
            }else{
                echo '<script> alert("Not Updated"); </script>';
            }
}


?>