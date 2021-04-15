<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./test2.css">
    <title>Responsive Sidebar Dashboard Template</title>
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
  </head>
  <style>
          body {
            font-family: "Lato", sans-serif;
          }

          /* Fixed sidenav, full height */
          .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 20px;
          }

          /* Style the sidenav links and the dropdown button */
          .sidenav a, .dropdown-btn {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 15px;
            color: #818181;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
            margin-top: 10px;
          }

          /* On mouse-over */
          .sidenav a:hover, .dropdown-btn:hover {
            color: #f1f1f1;
          }

          /* Main content */
          .main {
            margin-left: 200px; /* Same as the width of the sidenav */
            font-size: 20px; /* Increased text to enable scrolling */
            padding: 0px 10px;
          }

          /* Add an active class to the active dropdown button */
          .active {
            background-color: inherit;
            color: white;
          }

          /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
          .dropdown-container {
            display: none;
            background-color: #262626;
            padding-left: 8px;
          }

          /* Optional: Style the caret down icon */
          .fa-caret-down {
            float: right;
            padding-right: 8px;
          }

          /* Some media queries for responsiveness */
          @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
          }
</style>
        <body>
        <div class="sidenav">
        <p style="color: white; font-size: 25p; text-align:center; margin-top: 10px">IN AND AS <br> CREW</p> <hr><hr>
        <a href="./dashboard.php">DASHBOARD</a>
        <?php
              $connect = mysqli_connect("localhost","root","","internet_solution");
              $sql = "SELECT action FROM quick_service WHERE action = 'PENDING'";
              $res = mysqli_query($connect,$sql);
              $count = mysqli_num_rows($res);
              $show = "QUICK RESPONSE(".$count.")";
        ?>
        <a href="./quick_service_crew.php"><?php echo $show ?></a>
        <button class="dropdown-btn">WORK SHEET 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="./work_sheet.php">NEW RECORD</a>
          <a href="./work_sheet_update.php">UPDATE RECORD</a>
        </div>
        <button class="dropdown-btn">PRODUCT 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="./add_product.php">ADD PRODUCT</a>
          <a href="./products_request.php">PRODUCT REQUESTS</a>
        </div>
        <button class="dropdown-btn">PACKAGE 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="./package_requests.php">PACKAGE REQUESTS</a>
          <a href="#">MODIFY PACKAGES</a>
        </div>
        <button class="dropdown-btn">USER CONTROL 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="./add_user.php">ADD USER</a>
          <a href="./view_user.php">VIEW USERS</a>
          <a href="./edit_user.php">EDIT USERS</a>
          <a href="./update_user_bill.php">USER PAYMENT</a>
          <a href="./view_user_payment.php">PAYMENT STATS</a>
        </div>
        <a href="../crew_login.php">LOGOUT<i class="fas fa-sign-out-alt"></i></a>
      </div>
      <script>
      /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
      var dropdown = document.getElementsByClassName("dropdown-btn");
      var i;

      for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        } else {
        dropdownContent.style.display = "block";
        }
        });
      }
      </script>

  </body>
</html>