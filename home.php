<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    <script src="https://kit.fontawesome.com/777b9d824c.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="font-awesome.min.css">

      <link rel="icon" href="./PngItem_3468312.png">
    <title>INTERNET SOLUTION</title>

    <link rel="stylesheet" href="./style.css">
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

</head>
<body>

      <?php
        include("./frontnavbar.php");
      ?>


    <?php
    if(isset($_REQUEST['login'])){
      header("location: http://localhost/php/adminlogin.php");
    }
    ?>


    <section id="home" class="">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="slide-image" src="./img/sl1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="slide-image" src="./img/slide2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="slide-image" src="./img/slide3.jpg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="slide-image" src="./img/slide4.jpg" alt="Fourth slide">
              </div>
              <div class="carousel-item">
                <img class="slide-image" src="./img/internet.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </section>

    <section id="about">
      <div class="container"  style="display: flex;">
        <div class="row">
          <div class="col-sm-6">
            <div class="discreption">
              <p style="color: #C71F2B;"><b>Welcome To Internet Solution</b></p>
    
              <h1 style="font-size: 35px; font-family: Playfair Display;">We are Most Faster & Reliable</h1>
    
              <div style="height: 4px; width: 30%; background-color: #C71F2B; border-radius: 50%;"></div>
    
              <p style="opacity: 70%; text-align: justify; padding: 5px; margin: 20px 0 20px;">Internet Solution Best internet service provider in Bangladesh which provides fully dedicated, super fast, cost-effective, secured internet connection. We’re promised to meeting your needs and delivering industry-leading customer service.We beieve we will be successful if our clients are successful. Solving the hardest problems requires the best people. We think that the best people will be drawn to the opportunity to work on the hardest problems. We have built our company around that belief.</p>
    
              <button type="button" class="btn btn-danger" id="why_choose_us-button"><b>learn More</b></button>
      
            </div>
          </div>
          <div class="col-sm-6">
            <img class="why_choose_us_image" src="./Screenshot 2021-04-02 210954.jpg" alt="">
          </div>
        </div>
        
      </div>

    </section>

    <section id="why_choose_us">
      <div class="container">

        <div class="why_choose_us_head">
          
          <h2 class="section-heading"><span style="background-color: white; padding: 5px;">Why Choose us</span></h2>
        </div>
        <div class="row siam">
          <div class="col-sm-3">
            <div class="why_chhose_pack">
              <i class="fas fa-cogs why-choose-icon"></i>
              <p style=" font-family: Playfair Display;"><b>Quick Installation And Setup</b></p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="why_chhose_pack">
              <i class="fas fa-check why-choose-icon"></i>
              <p style=" font-family: Playfair Display;"><b>Fast and Reliable Network</b></p>
            </div>
            </div>

            <div class="col-sm-3">
              <div class="why_chhose_pack">
                <i class="fas fa-gamepad why-choose-icon"></i>
                <p style=" font-family: Playfair Display;"><b>Dedicated Gaming IP</b></p>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="why_chhose_pack">
                <i class="fas fa-comments why-choose-icon"></i>
                <p style=" font-family: Playfair Display;"><b>24/7 online and call support</b></p>
              </div>
            </div>

        </div>

        

      </div>


    </section>

    <section id="package" style="background-color: #C71F2B; height: auto; width: 100%; margin-bottom: 30px; padding-top: 60px;">
      <div class="container" style="text-align: center;">
        <h2 class="section-heading-red"><span style="background-color: #C71F2B; padding: 5px; color: white;">Home Packages</span></h2>
        <p class="text-white" style="text-align: center; font-family: Playfair Display; opacity: 90%; margin-bottom: 30px; font-size: 30px; margin: 40px 0;">Packages and rates at SAM Online are always very competitive and so they may change over time. Here is the present package</p>
        <div class="row">
                <div class="col-md">
                    <div class="card p-2 my-5" style="border-radius: 25px;">
                        <div class="card-title text-center bg-danger text-white p-2">
                            <h4><b>UDDOKTA</b></h4>
                            <h2>2500 <small>Tk/month</small></h2>
                        </div>
                        <div class="card-body">
                            <ul class="list-group-flush">
                                <li class="list-group-item"><b>Upload @ 60 Mbps</b></li>
                                <li class="list-group-item"><b>Download @ 30 Mbps</b></li>
                                <li class="list-group-item"><b> @ 80 Mbps</b></li>
                                <li class="list-group-item"><b>BDIX & FTP</b></li>
                                <li class="list-group-item"><b>Real IP</b></li>
                                <li class="list-group-item"><b>Cached Servers</b></li>
                              </ul>  
                        </div>
                        <a href="./packages.php" style="text-decoration: none;"><button type="button" class="btn btn-danger package_btn btn-block" data-toggle="modal" data-target="#packagemodal">BUY NOW</button></a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card p-2 my-5" style="border-radius: 25px;">
                        <div class="card-title text-center bg-danger text-white p-2">
                            <h4><b>Gamers Choice</b></h4>
                            <h2>2000 <small>Tk/month</small></h2>
                        </div>
                        <div class="card-body">
                            <ul class="list-group-flush">
                                <li class="list-group-item"><b>Upload @ 40 Mbps</b></li>
                                <li class="list-group-item"><b>Download @ 25 Mbps</b></li>
                                <li class="list-group-item"><b>Game Cache @ 300 Mbps</b></li>
                                <li class="list-group-item"><b>BDIX & FTP</b></li>
                                <li class="list-group-item"><b>Real Ip</b></li>
                                <li class="list-group-item"><b>Cached Servers</b></li>
                              </ul>  
                        </div>
                        <a href="./packages.php" style="text-decoration: none;"><button type="button" class="btn btn-danger package_btn btn-block" data-toggle="modal" data-target="#packagemodal">BUY NOW</button></a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card p-2 my-5" style="border-radius: 25px;">
                        <div class="card-title text-center bg-danger text-white p-2">
                            <h4><b>FREELANCER</b></h4>
                            <h2>1500 <small>Tk/month</small></h2>
                        </div>
                        <div class="card-body">
                            <ul class="list-group-flush">
                                <li class="list-group-item"><b>Upload @ 30 Mbps</b></li>
                                <li class="list-group-item"><b>Download @ 25 Mbps</b></li>
                                <li class="list-group-item"><b>Youtube @ 60 Mbps</b></li>
                                <li class="list-group-item"><b>BDIX & FTP</b></li>
                                <li class="list-group-item"><b>Real Ip</b></li>
                                <li class="list-group-item"><b>Cached Servers</b></li>
                              </ul>  
                        </div>
                        <a href="./packages.php" style="text-decoration: none;"><button type="button" class="btn btn-danger package_btn btn-block" data-toggle="modal" data-target="#packagemodal">BUY NOW</button></a>
                    </div>
                </div>
            </div>
        <a href="./packages.php"><button type="button" class="btn btn-light" style="margin-bottom: 30px;"><span><b>View All Packages</b></span></button></a>
          
      </div>

    </section>

    <section class="product">
      <div class="container">
        <div class="why_choose_us_head">
          <h2 class="section-heading"><span style="background-color: white; padding: 5px;">Our Products</span></h2>
        </div>
        <div class="row">
          <div class="col">
              <div class="row">
              <?php
              $connect = mysqli_connect("localhost","root","","internet_solution");
                    $querry = "SELECT * FROM cart_item LIMIT 3";
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
                        <a class="product-card-button-icon-details"  data-toggle="modal" data-target="#exampleModalCenter<?php echo $row['id'];?>" href=""><i class="fas fa-arrow-right">MORE</i></a>
                        <p class="product-price">৳<?=number_format($row['price'],2)?></p>
                        </div>
                        <div class="product-card-button">
                        <h4 style="margin-right: 5px; font-weight: bold; color:black" > Unit: </h6> <input name="quantity" class="product_quantity form-control" type="number" value="1">
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

        <div class="get-more-btn mt-5" style="text-align: center;  margin-left: 37px;">
          <a href="./products.php"><button type="button" class="btn btn-danger" name="moreprod">Get more Products</button></a>
        </div>
        </div>
      </div>
    </section>

    <section id="service-we-offer">
      <div class="container">
        <div class="service-we-offer-class">
          
          <h2 class="section-heading-red"><span style="background-color: #C71F2B; padding: 5px; color: white;" >Service We Offer</span></h2>
        </div>
        <div class="ser">
        <div class="service1 my-5 mx-2" >
            <div class="broadband" style="display: flex; margin-left: 120px;">
              <i class="fas fa-retweet service-icon"></i>
              <p class="service-text" style="color:white;">Broadband Home Internet</p>
            </div>
            <div class="broadband" style="display: flex; margin-left: 100px;">
              <i class="fas fa-video service-icon"></i>
              <p class="service-text" style="color:white;">Corporate Data-VPN Service</p>
            </div>
            <div class="broadband" style="display: flex; margin-left: 100px;">
              <i class="fas fa-upload service-icon"></i>
              <p class="service-text" style="color:white;">Corporate Network Solutions</p>
            </div>
            
          </div>
          <div class="service2">
            <div class="broadband" style="display: flex; margin-left: 123px;">
              <i class="fas fa-desktop service-icon"></i>
              <p class="service-text" style="color:white;">Network Security</p>
            </div>
            <div class="broadband" style="display: flex; margin-left: 164px;">
              <i class="fas fa-project-diagram service-icon"></i>
              <p class="service-text" style="color:white;">Dedicated Server Hosting</p>
            </div>
            <div class="broadband" style="display: flex; margin-left: 120px;">
              <i class="fas fa-cogs service-icon"></i>
              <p class="service-text" style="color:white;">CCTV System Solutions</p>
            </div>
        </div>


      </div>


    </section>
      
    <?php include("./footer.php") ?>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><!-- Modal FOR DESCRIPTION -->
<?php 
$querry = "SELECT * FROM cart_item";
$result = mysqli_query($connect,$querry);

while($row = mysqli_fetch_array($result)){

?>
<div class="modal fade" id="exampleModalCenter<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                        <form action="products.php?id=<?=$row['id']?>" method="post">
                        <img src="img/<?=$row['image']?>" style="height: 300px;" alt="" class="d-block mx-auto">
                        <p><?=$row['long_description'];?></p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
<?php
}
?>
</body>
</html>