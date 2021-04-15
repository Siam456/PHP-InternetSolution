<?php

session_start();

$connect = mysqli_connect("localhost","root","","internet_solution");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
  }

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $package = $_POST['package'];
    $sql = "INSERT INTO package_request (name,mobile,email,address,package) VALUES ('$name', '$mobile', '$email', '$address','$package')";

    $query_run = mysqli_query($connect,$sql);
    if($query_run){
        echo "<script> alert('THANK YOU FOR CHOSING US. OUR CUSTOMER SUPPORT WILL CONTACT WITH YOU VERY SOON.');</script>";
        header("location: ./packages.php");
    }else{
        echo "<script> alert('SORRY! COULD NOT RECIEVE YOUR REQUEST AT THE MOMENT. PLEASE TRY AGAIN');</script>";
    }
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

    <style>
        h4{
            font-style: italic;
            color: white;
            padding: 5px;
            border-bottom: 2px solid snow;
            text-align: center;
        }
        .card,.card-title,.package_btn{
            border-radius: 20px;
        }

        .card{
            box-shadow: 5px 5px 8px #1a0000;
        }

        .card:hover{
            transform: translate(-3px,-3px);
            transition: 0.5s;
        }
        .package_btn{
            letter-spacing: 5px;
            font-weight: bold;
        }
        .package_btn:hover{
            background-color: red;
            
        }
    </style>
    <title>PACKAGES</title>
</head>
    <body>
    <?php
        include("./frontnavbar.php");
    ?>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="card p-2 my-5" style="border-radius: 15px;">
                        <div class="card-title text-center bg-danger text-white p-2">
                        <h4><b>UDDOKTA</b></h4>
                            <h2>2500 <small>Tk/month</small></h2>
                        </div>
                        <div class="card-body text-center">
                            <ul class="list-group-flush">
                                <li class="list-group-item"><b>Upload @ 60 Mbps</b></li>
                                <li class="list-group-item"><b>Download @ 30 Mbps</b></li>
                                <li class="list-group-item"><b> @ 80 Mbps</b></li>
                                <li class="list-group-item"><b>BDIX & FTP</b></li>
                                <li class="list-group-item"><b>Real IP</b></li>
                                <li class="list-group-item"><b>Cached Servers</b></li>
                              </ul>  
                        </div>
                        <button type="button" class="btn btn-danger package_btn" data-toggle="modal" data-target="#packagemodal">BUY NOW</button>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card p-2 my-5" style="border-radius: 15px;">
                        <div class="card-title text-center bg-danger text-white p-2">
                        <h4><b>Gamers Choice</b></h4>
                            <h2>2000 <small>Tk/month</small></h2>
                        </div>
                        <div class="card-body text-center">
                            <ul class="list-group-flush">
                                <li class="list-group-item"><b>Upload @ 40 Mbps</b></li>
                                <li class="list-group-item"><b>Download @ 25 Mbps</b></li>
                                <li class="list-group-item"><b>Game Cache @ 300 Mbps</b></li>
                                <li class="list-group-item"><b>BDIX & FTP</b></li>
                                <li class="list-group-item"><b>Real Ip</b></li>
                                <li class="list-group-item"><b>Cached Servers</b></li>
                              </ul>  
                        </div>
                        <button type="button" class="btn btn-danger package_btn" data-toggle="modal" data-target="#packagemodal">BUY NOW</button>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card p-2 my-5" style="border-radius: 15px;">
                        <div class="card-title text-center bg-danger text-white p-2">
                        <h4><b>FREELANCER</b></h4>
                            <h2>1500 <small>Tk/month</small></h2>
                        </div>
                        <div class="card-body text-center">
                            <ul class="list-group-flush">
                                <li class="list-group-item"><b>Upload @ 30 Mbps</b></li>
                                <li class="list-group-item"><b>Download @ 25 Mbps</b></li>
                                <li class="list-group-item"><b>Youtube @ 60 Mbps</b></li>
                                <li class="list-group-item"><b>BDIX & FTP</b></li>
                                <li class="list-group-item"><b>Real Ip</b></li>
                                <li class="list-group-item"><b>Cached Servers</b></li>
                              </ul>  
                        </div>
                        <button type="button" class="btn btn-danger package_btn" data-toggle="modal" data-target="#packagemodal">BUY NOW</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card p-2 my-5" style="border-radius: 15px;">
                        <div class="card-title text-center bg-danger text-white p-2">
                            <h4><b>TURBO</b></h4>
                            <h2>1200 <small>Tk/month</small></h2>
                        </div>
                        <div class="card-body">
                            <ul class="list-group-flush">
                                <li class="list-group-item"><b>Upload @ 15 Mbps</b></li>
                                <li class="list-group-item"><b>Download @ 10 Mbps</b></li>
                                <li class="list-group-item"><b>Youtube @ 40 Mbps</b></li>
                                <li class="list-group-item"><b>BDIX & FTP</b></li>
                                <li class="list-group-item"><b>Share Ip</b></li>
                                <li class="list-group-item"><b>Cached Servers</b></li>
                              </ul>  
                        </div>
                        <button type="button" class="btn btn-danger package_btn" data-toggle="modal" data-target="#packagemodal">BUY NOW</button>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card p-2 my-5" style="border-radius: 15px;">
                        <div class="card-title text-center bg-danger text-white p-2">
                            <h4><b>DURBAR</b></h4>
                            <h2>999 <small>Tk/month</small></h2>
                        </div>
                        <div class="card-body text-center">
                            <ul class="list-group-flush">
                                <li class="list-group-item"><b>20 Mbps @ (1AM to 8PM)</b></li>
                                <li class="list-group-item"><b>5 Mbps @ (8PM to 1AM</b></li>
                                <li class="list-group-item"><b>Bufferless Youtube</b></li>
                                <li class="list-group-item"><b>BDIX & FTP</b></li>
                                <li class="list-group-item"><b>Share Ip</b></li>
                                <li class="list-group-item"><b>Cached Servers</b></li>
                              </ul>  
                        </div>
                        <button type="button" class="btn btn-danger package_btn" data-toggle="modal" data-target="#packagemodal">BUY NOW</button>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card p-2 my-5" style="border-radius: 15px;">
                        <div class="card-title text-center bg-danger text-white p-2">
                            <h4><b>SME 1</b></h4>
                            <h2>4700 <small>Tk/month</small></h2>
                        </div>
                        <div class="card-body text-center">
                            <ul class="list-group-flush">
                                <li class="list-group-item"><b>20 Mbps</b></li>
                                <li class="list-group-item"><b>No Redundancy</b></li>
                                <li class="list-group-item"><b>15 Email</b></li>
                                <li class="list-group-item"><b>1 Free Hosting</b></li>
                                <li class="list-group-item"><b>Own Ip</b></li>
                                <li class="list-group-item"><b>Cached Servers</b></li>
                              </ul>  
                        </div>
                        <button type="button" class="btn btn-danger package_btn" data-toggle="modal" data-target="#packagemodal">BUY NOW</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                <div class="card p-2 my-5" style="border-radius: 15px;">
                        <div class="card-title text-center bg-danger text-white p-2">
                            <h4><b>SME 2</b></h4>
                            <h2>9000 <small>Tk/month</small></h2>
                        </div>
                        <div class="card-body text-center">
                            <ul class="list-group-flush">
                                <li class="list-group-item"><b>40 Mbps</b></li>
                                <li class="list-group-item"><b>Redundancy</b></li>
                                <li class="list-group-item"><b>20 Email</b></li>
                                <li class="list-group-item"><b>2 Free Hosting</b></li>
                                <li class="list-group-item"><b>Own Ip</b></li>
                                <li class="list-group-item"><b>Cached Servers</b></li>
                              </ul>  
                        </div>
                        <button type="button" class="btn btn-danger package_btn" data-toggle="modal" data-target="#packagemodal">BUY NOW</button>
                    </div>
                </div>
                <div class="col-md">
                </div>
                <div class="col-md">

                </div>
            </div>

    <!-- Modal CODE STARTS  -->
        <div class="modal fade" id="packagemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">New Connection Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="packages.php" method="POST" class="needs-validation" novalidate>
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="mobile">Telephone/Mobile:</label>
                    <input type="tel" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile" pattern="[0]{1}[1]{1}[0-9]{9}" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="package" id="package">
                    <option selected>SELECT ONE PLEASE</option>
                    <option value="UDDOKTA">UDDOKTA</option>
                    <option value="GAMERS CHOICE">GAMERS CHOICE</option>
                    <option value="FREELANCER">FREELANCER</option>
                    <option value="TURBO">TURBO</option>
                    <option value="DURBAR">DURBAR</option>
                    <option value="SME-1">SME 1</option>
                    <option value="SME-2">SME 2</option>
                    </select>
                    </div>
                <button type="submit" name="submit" class="btn btn-danger">Submit</button>
              </form>
        </div>
      </div>
    </div>
        </div>
  <!--MODAL CODE ENDS-->        
        </div>    
        <?php include("./footer.php") ?>      
    </body>
    <script>
        // Disable form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>
</html>