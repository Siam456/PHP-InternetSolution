<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'internet_solution');


        if(isset($_POST['updatedata'])){

            $id = $_POST['userid'];
            // $id1 = $_POST['pid'];
            $name = $_POST['username'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $ipadd = $_POST['ipadd'];
            $nid = $_POST['nid'];
            $pack = $_POST['pack'];

            $query = "UPDATE users SET username='$name', phone='$phone', email='$email', ipadd='$ipadd', nid = '$nid', pack  = '$pack' WHERE userid='$id' ";
            $query_run = mysqli_query($connection,$query);

            if($query_run){
                echo '<script> alert("Data Updated"); </script>';
                header("location: edit_user.php");
            }else{
                echo '<script> alert("Not Updated"); </script>';
            }
        }


?>