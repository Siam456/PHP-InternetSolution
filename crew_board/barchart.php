<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'internet_solution');
    $sql = "SELECT action FROM quick_service where action = 'WORKING ON IT'";
    $sql2 = "SELECT action FROM quick_service where action = 'SOLVED'";
    $sql3 = "SELECT action FROM quick_service where action = 'PENDING'";
    $res = mysqli_query($connection,$sql);
    $res2 = mysqli_query($connection,$sql2);
    $res3 = mysqli_query($connection,$sql3);
    $count = mysqli_num_rows($res);
    $count2 = mysqli_num_rows($res2);
    $count3 = mysqli_num_rows($res3);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['', 'Percentage'],
          ["WORKING ON IT", <?php echo $count;?> ],
          ["SOLVED", <?php echo $count2;?>],
          ["PENDING", <?php echo $count3;?>]
        ]);

        var options = {
          width: 500,
          legend: { position: 'none' },
          chart: {
            title: 'Quick Service Response Report',},
          axes: {
            x: {
              0: { side: 'top',} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 100%; height: 500px;"></div>
  </body>
</html>
