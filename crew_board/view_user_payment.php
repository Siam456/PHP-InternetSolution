<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    
    <!--DATA TABLE CDN-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <!-- DATA TABLE CDN ENDS -->
    <title>Document</title>
    <title>User Payment Status</title>
</head>
<body>
<?php
        include("./crew_nav.php");
    ?>
<div class="container my-3 p-1">
<h2 class="text-center">USER PAYMENT STATS</h2><hr><hr>
<table class="table container table-bordered table-striped table-hover my-5 p-2">
                <thead>
                    <tr>
                        <th scope="col">USER ID</th>
                        <th scope="col">PACAKAGE</th>
                        <th scope="col">JANUARY</th>
                        <th scope="col">FEBRUARY</th>
                        <th scope="col">MARCH</th>
                        <th scope="col">APRIL</th>
                        <th scope="col">MAY</th>
                        <th scope="col">JUNE</th>
                        <th scope="col">JULY</th>
                        <th scope="col">AUGUST</th>
                        <th scope="col">SEPTEMBER</th>
                        <th scope="col">OCTOBER</th>
                        <th scope="col">NOVEMBER</th>
                        <th scope="col">DECEMBER</th>
                    </tr>
                </thead>
                    <tbody>
                    <?php
                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,'internet_solution');

                        $query = "SELECT * FROM user_payment1";
                        $query_run = mysqli_query($connection,$query);
                            while($row=$query_run->fetch_assoc()){
                                $jan = $row['January'];
                                $feb = $row['February'];
                                $mar = $row['March'];
                                $apr = $row['April'];
                                $may = $row['May'];
                                $jun = $row['June'];
                                $jul = $row['July'];
                                $aug = $row['August'];
                                $sep = $row['September'];
                                $oct = $row['October'];
                                $nov = $row['November'];
                                $dec = $row['December'];
                          ?>
                                <tr>
                                <td><?php echo $row['userid']; ?></td>
                                <td><?php echo $row['pack'];?></td>
                                <?php if(strlen($jan) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $jan </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $jan </td>";} ?>
                                <?php if(strlen($feb) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $feb </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $feb </td>";} ?>
                                <?php if(strlen($mar) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $mar </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $mar </td>";} ?>
                                <?php if(strlen($apr) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $apr </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $apr </td>";} ?>
                                <?php if(strlen($may) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $may </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $may </td>";} ?>
                                <?php if(strlen($jun) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $jun </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $jun </td>";} ?>
                                <?php if(strlen($jul) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $jul </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $jul </td>";} ?>
                                <?php if(strlen($aug) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $aug </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $aug </td>";} ?>
                                <?php if(strlen($sep) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $sep </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $sep </td>";} ?>
                                <?php if(strlen($oct) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $oct </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $oct </td>";} ?>
                                <?php if(strlen($nov) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $nov </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $nov </td>";} ?>
                                <?php if(strlen($dec) == 4){echo "<td style='color:#56b054; font-weight:bolder;' id='action'> $dec </td>";}else{echo "<td style='color:#ff0000; font-weight:bolder;' id='action'> $dec </td>";} ?>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
    </div>
    </script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('table').DataTable();
        });
    </script>
</body>
</html>