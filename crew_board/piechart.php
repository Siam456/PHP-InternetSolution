<?php
                      $connection = mysqli_connect("localhost","root","");
                      $db = mysqli_select_db($connection,'internet_solution');
                      $sql = "SELECT * FROM users";
                      $run = mysqli_query($connection,$sql);
                      $count = mysqli_num_rows($run);
                      $sql2 = "SELECT * FROM quick_service";
                      $run2 = mysqli_query($connection,$sql2);
                      $count2 = mysqli_num_rows($run2);
                      $sql3 = "SELECT * FROM package_request";
                      $sql4 = "SELECT * FROM product_request";
                      $run3 = mysqli_query($connection,$sql3);
                      $run4 = mysqli_query($connection,$sql4);
                      $count3 = mysqli_num_rows($run3);
                      $count4 = mysqli_num_rows($run4);
                      $count5 = $count3 + $count4;
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Quick Service',     <?php echo $count2 ?>],
          ['Package',     <?php echo $count3 ?>],
          ['Product',<?php echo $count4 ?>]
        ]);

        var options = {
          title: 'Daily Request Summary'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 100%; height: 500px;"></div>
  </body>
</html>