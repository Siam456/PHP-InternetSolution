<?php
$connect = mysqli_connect("localhost","root","","internet_solution");

if (isset($_POST['remove']) != ''){

    $id = $_POST['remove'];

    $remove = "DELETE FROM product_request WHERE id='$id'";
    mysqli_query($connect, $remove);
    // header("location: ./package_requests.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CDN Start-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap CDN End -->
    <!-- ICONS PACK FONT-AWESOME -->
    <script src="https://kit.fontawesome.com/777b9d824c.js" crossorigin="anonymous"></script>>
    <!-- END ICONS PACK FONT-AWESOME -->
    <!--DATA TABLE CDN-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <!-- DATA TABLE CDN ENDS -->
    <title>products requests</title>
</head>
<body>
        <?php
            include("./crew_nav.php")
        ?>
    <div class="container  mt-2 d-block mx-auto">
        <h2 class="text-center">REQUEST FOR PRODUCTS APPEAR HERE</h2><hr><hr>
        <small class="text-center d-block mx-auto my-2 text-danger">PLEASE CALL CUSTOMER AND CONFIRM ORDER FIRST</small>

    <table class='table table-borderd table-striped my-4' >
        <thead>
        <tr>
            <th>No.</th>
            <th>NAME</th>
            <th>MOBILE</th>
            <th>EMAIL</th>
            <th>ADDRESS</th>
            <th>PRODUCT ID</th>
            <th>QUANTITY</th>
            <th>TOTAL</th>
            <th>ACTION</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM product_request";
        $res = mysqli_query($connect,$sql);
        while($row=mysqli_fetch_array($res)){?>
            <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['product_id'];?></td>
            <td><?php echo $row['quantity'];?></td>
            <td><?php echo $row['total'];?></td>
            <!-- <td><button class="btn btn-danger" name="remove" id="remove" type ="submit" value = "<?php echo $row['id']; ?>">REMOVE</button> </td> -->
            <form action="" method="POST">
            <td><button class="btn btn-outline-danger text-uppercase" name="remove" type="submit" id="remove" value="<?php echo $row['id']; ?>">REMOVE</button></td></form>
            </tr>

            <?php } ?>
        </tbody>
    </table>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('table').DataTable();
        });
    </script>
</body>
</html>