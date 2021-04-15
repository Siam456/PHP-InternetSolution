<?php

session_start();

$connect = mysqli_connect("localhost","root","","internet_solution");


if (isset($_POST['add_to_cart'])){
    if (isset($_SESSION['cart'])){
        $session_array_id = array_column($_SESSION['cart'],"id");

        if(!in_array($_GET['id'],$session_array_id)){
            $session_array = array(
                'id' => $_GET['id'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity'],
            );
    
            $_SESSION['cart'][] = $session_array;
        }

    }else{
        $session_array = array(
            'id' => $_GET['id'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'quantity' => $_POST['quantity'],
        );

        $_SESSION['cart'][] = $session_array;
    }

}


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    foreach($_SESSION['cart'] as $key => $value){
      $product_id = $value['id'];
      $quantity = $value['quantity'];
      $price = $value['price'];
    }
    $total = $total + $value['quantity'] * $value['price'];
    $sql = "INSERT INTO product_request (name,mobile,email,address,product_id,quantity,total) VALUES ('$name', '$mobile', '$email', '$address','$product_id','$quantity','$total')";

    $query_run = mysqli_query($connect,$sql);
    if($query_run){
        echo "<script> alert('THANK YOU FOR CHOSING US. OUR CUSTOMER SUPPORT WILL CONTACT WITH YOU VERY SOON.');</script>";
        header("location: ./products.php");
    }else{
        echo "<script> alert('SORRY! COULD NOT RECIEVE YOUR REQUEST AT THE MOMENT. PLEASE TRY AGAIN');</script>";
    }
}
// $product_id = $_GET['id'];

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
           <script src="https://kit.fontawesome.com/777b9d824c.js" crossorigin="anonymous"></script>
       <!-- END ICONS PACK FONT-AWESOME -->
    <title>PRODUCTS</title>
    <style>
      .card-product{
        width: 100%;
        
        border-radius: 18px;
        background: white;
        box-shadow: 5px 5px 15px rgba(0,0,0,0.9);
        font-family: roboto;
        text-align: center;
        
        transition: .5s;
        
    }

    .card-product:hover{
        box-shadow: 5px 5px 15px rgba(199,31,43,0.7);
        margin-left: 10px;
        
        
        
    }

    .card-holder{
      padding: 10px;
      border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

      .card-image{
          height: 200px;
          width: 100%;
          padding: 10px;
          border-top-left-radius: 15px;
        border-top-right-radius: 15px;
      }
      .product-card-button{
          display: flex;
          
          border-top: 1px solid rgba(0,0,0,0.15);
          padding: 10px;
      }
      .product_quantity{
        width: 40%;   
        padding: 2px;
        border: 1px solid white;
        
        margin-right: 20px;
        text-align: center;
        padding-left: 10px;
      
      }
      .product-price{
          width: 50%;
          margin-left: 10px;
        margin-right: 20px;
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
        padding: 8px 17px;
        border-radius: 50px;
        box-shadow:inset -2px -2px 8px white,
        inset -2px -2px 12px rgba(255,255,255,0.5),
        inset 2px 2px 4px rgba(255,255,255,0.1),
        inset 2px 2px 8px rgba(0,0,0,0.15);
        transition: 0.4s;
      }
      .product-card-button-icon{
          margin-right: 10px;
          height: 40px;
          width: 90px;
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
        padding: 8px 12px;
        border-radius: 50px;
        box-shadow:inset -2px -2px 8px white,
        inset -2px -2px 12px rgba(255,255,255,0.5),
        inset 2px 2px 4px rgba(255,255,255,0.1),
        inset 2px 2px 8px rgba(0,0,0,0.15);
        transition: 0.4s;
        color: #C71F2B;
        border: none;
      }
      .product-card-button-icon-details{
        width: 110%;
        height: 40px;
      font-size: 14px;
      font-weight: 700;
      text-transform: uppercase;
      padding:12px;
      border-radius: 50px;
      
      box-shadow:inset -2px -2px 8px white,
      inset -2px -2px 12px rgba(255,255,255,0.5),
      inset 2px 2px 4px rgba(255,255,255,0.1),
      inset 2px 2px 8px rgba(0,0,0,0.15);
      transition: 0.4s;
      color: #C71F2B;
    }
    

    .product-card-button-icon-details:hover{
        color: black;
        text-decoration: none;
    }
      
      .product-card-button-icon:hover{
          color: black;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
            <div class="container-fluid">
                <a href="home.html" class="navbar-brand"><h3>Assignm<span style="color: #683BA4;">ent2.</span></h3></a>
                <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
    
                </button>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="navbar-nav  ml-auto">
                      <li class="nav-item"><a href="home.html" class="nav-link" style="color: #683BA4;"><b>Home</b></a></li>
                      <li class="nav-item"><a href="#about" class="nav-link" style="color: #683BA4;">Converter</a></li>
                      <li class="nav-item"><a href="quiz.html" class="nav-link" style="color: #683BA4;">Quiz</a></li>
                      
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container-fluid mt-3">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center mt-3">Shopping Cart Data</h2>
                    <div class="col-md-12">
                        <div class="row">



                    <?php
                    $querry = "SELECT * FROM cart_item";
                    $result = mysqli_query($connect,$querry);

                    while($row = mysqli_fetch_array($result)){
                        ?>
                        
                    <div class="col-md-4 my-3">
                        <form action="products.php?id=<?=$row['id']?>" method="post">
                        <div class="card-product">
                        <img src="img/<?=$row['image']?>" style="height: 200px;" alt="" class="d-block mx-auto card-image">
                        <h5 class="text-center" style="font-family: Playfair Display; font-weight:bold"><?=$row['name'];?></h5>
                        <p style="opacity: 80%; height: 100px; text-align:justify; text-justify:inter-word; overflow:hidden" class="my-2 mx-2"><?=$row['description'];?></p>

                        <div class="d" style="display: flex; margin-left: 5%;">
                        <a class="product-card-button-icon-details"  data-toggle="modal" data-target="#exampleModalCenter" href=""><i class="fas fa-arrow-right">MORE</i></a>
                        <p class="product-price">৳<?=number_format($row['price'],2)?></p>
                        </div>
                        <div class="product-card-button">
                        <h4 style="margin-right: 5px; margin-top: 5px; font-weight: bold;" > Unit: </h6> <input name="quantity" class="product_quantity form-control" type="number" value="1">
                        <button type="submit" name="add_to_cart"  class="product-card-button-icon"><i class="fas fa-cart-plus"></i></button>  
                        </div>
                        <input type="hidden" name="name" value="<?=$row['name']?>">
                        <input type="hidden" name="price" value="<?=$row['price']?>">                    
                        </div>
                    
                        </form>
                    </div>
                        
                        
                        
                        <?php
                    }
                    
                    ?>
                    </div>
                    </div>

                </div>
                <div class="col-md-6 mt-3">
                    <h2 class="text-center">Item Selected</h2>
                    <?php

                    $total = 0;

                    $output = "";

                    $output .= "
                    <table class='table table-borderd table-striped my-4'>
                    <tr>
                    <th>ID</th> 
                    <th>ITEM NAME</th> 
                    <th>ITEM PRICE</th> 
                    <th>ITEM QUANTITY</th> 
                    <th>TOTAL PRICE</th> 
                    <th>ACTION</th>
                    </tr> 
                    
                    ";

                    if(!empty($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $key => $value){
                            $output .= "
                            <tr>
                            <td>".$value['id']."</td>
                            <td>".$value['name']."</td>
                            <td>".$value['price']."</td>
                            <td>".$value['quantity']."</td>
                            <td>৳".number_format($value['price'] * $value['quantity'],2)."</td>
                            <td>
                            <a href= 'products.php?action=remove&id=".$value['id']."'>
                            <button class='btn btn-danger'>REMOVE</button>
                            
                            </a>
                            
                            </td>
                            
                            </tr>
                            
                            
                            ";

                            $total = $total + $value['quantity'] * $value['price'];
                        }
                        
                        $output .= "
                        <tr>
                        <td colspan='3'></td>
                        <td><b>TOTAL PRICE</br></td>
                        <td>৳".number_format($total,2)."</td> 
                        <td>
                        <button type='button' class='btn btn-success package_btn' data-toggle='modal' data-target='#packagemodal'>BUY NOW</button>
                        </td>
                        </tr>
                        
                        
                        
                        ";


                    }

                    echo $output;
                    
                    
                    
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_GET['action'])){
        if($_GET['action'] == "remove"){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['id'] == $_GET['id']){
                    unset($_SESSION['cart'][$key]);
                }
            }
        }
    }


    
    
    ?>

    <!-- Modal CODE STARTS FOR CHECK OUT -->
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
            <form action="products.php" method="POST" class="needs-validation" novalidate>
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
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
              </form>
        </div>
      </div>
    </div>
        </div>
  <!--MODAL CODE ENDS--> 

<!-- Modal FOR DESCRIPTION -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
                    $querry = "SELECT * FROM cart_item";
                    $result = mysqli_query($connect,$querry);

                    while($row = mysqli_fetch_array($result)){
                        ?>
                        <form action="products.php?id=<?=$value['id']?>" method="post">
                        <img src="img/<?=$row['image']?>" style="height: 300px;" alt="" class="d-block mx-auto">
                        <p><?=$row['long_description'];?></p>
                        </form>
                         
                        <?php
                    }
                    
                    ?>

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>   
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