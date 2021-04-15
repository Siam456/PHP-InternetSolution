<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <script src="https://kit.fontawesome.com/777b9d824c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font-awesome.min.css">
    <title>Document</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
html{
    scroll-behavior: smooth;
}


    header{
        background-color: black;
        height: 35px;
        width: 100%;
        display: flex;
    }

    nav{
        border-bottom: 1px solid #C71F2B;
      }

    .carousel-indicators{
        outline: black;
    }

    
    .slide-image{
        height: 530px;
        width: 100%;
        padding: 10px;
        
        margin-bottom: 50px;
        
        
    }
    .carousel-item{
        text-align: center;
    }

    .carousel-control-next,
    .carousel-control-prev , .carousel-indicators {
        filter: invert();
    }
    
    .social{
      padding: 5px;
      color: #C71F2B;
      margin-left: 5px;
    }
    .social:hover{
      color: #a31822;
    }

    .discreption{
        margin-top: 8%;
    }

.top-indicator{
    position: fixed;
    top: 85%;
    right: 7%;
    z-index: 99999;
    color: #a31822;
    border: 2px solid #a31822;
    padding: 16px 22px;
    border-radius: 100%;
    transition: .5s;
    background-color: black;
}
.top-indicator:hover{
    background-color: #a31822;
    color: white;
}

.social-fixed{
    list-style-type: none;
    position: fixed;
    right: -7%;
    z-index: 99999999;
    
    
}
.facebook-fixed{
    background-color: #C71F2B;
    width: 150%;
    padding:6px 10px;
}

.youtube-fixed{
    background-color: #C71F2B;
    width: 150%;
    padding:6px 10px;
}
 
       
       .why_chhose_pack{
           
           display: block;
       }
       .why-choose-icon{
           margin: 25px;
           background-color: #C71F2B;
           color: white;
           border-radius: 100%;
           padding: 40px 39px;
           font-size: 50px;
           border: 1px solid #C71F2B;
           transition: .5s;

       }
       .why-choose-icon:hover{
           color: #C71F2B;
           background-color: white;
       }

       

       .section-heading{
           position: relative;
           text-align: center;
           margin-bottom: 80px;
           
       }
       .section-heading::before{
           content: "";
           display: block;
           width: 50%;
           height: 1px;
           position: absolute;
           background-color: #C71F2B;
           left: 0;
           top: 50%;
           z-index: -2;
       }
       .section-heading::after{
        content: "";
        display: block;
        width: 50%;
        height: 1px;
        position: absolute;
        background-color: #C71F2B;
        right: 0;
        top: 50%;
        z-index: -2;
    }

    #package{
        z-index: 0;
    }
    .section-heading-red{
        position: relative;
        text-align: center;
        z-index: 2;
    }

    .section-heading-red::before{
        content: "";
        display: block;
        width: 50%;
        height: 1px;
        position: absolute;
        background-color: white;
        left: 0;
        top: 50%;
        z-index: -2;
    }
    .section-heading-red::after{
     content: "";
     display: block;
     width: 50%;
     height: 1px;
     position: absolute;
     background-color: white;
     right: 0;
     top: 50%;
     z-index: -2;
 }
 #service-we-offer{
     background-color: #C71F2B;
     padding: 50px 0;
     margin-top: 50px;
 }
    .service1, .service2{
        display: flex;
        
    }

    .service-icon{
        padding: 10px;
        font-size: 35px;
        color: black;
        transition: .5s;
    }
    .service-icon:hover{
        color: white;
    }

    .service-text{
        margin-top: 13px;
        margin-left: 5px;
    }
    .siam{
       text-align: center;
       margin-bottom: 80px;
    }

    .btn-light:hover{
        background-color: #edcaca;
        color: #C71F2B;
    }

   
    .card-product{
        width: 75%;
        
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

      .card-image{
          height: auto;
          width: 100%;
          padding: 0;
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
          height: 20px;
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
    



    @media (max-width: 500px) {
        header{
            height: auto;
        }
        
        .why_choose_us_image{
            height: auto;
            width: 100%;
        }
        .service1, .service2{
            display: block;
        }
        
    }</style>
</head>
<body>
    <!--HEADER PART STARTS-->
  <!-- <a class="top-indicator" href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>   -->
    <header>
      <div class="container"  style="display: flex;">
        <h6 style="padding: 11px; color: aliceblue; font-size: 14px;">Welcome to INTERNET SOLUTION</h6>
        <div class="top-bar-info" style="display: flex;">
          <i style="padding: 11px; color: #C71F2B;" class="fas fa-phone-alt"></i>
          <p style="padding-top: 7px; color: white; font-size: 14px;">0123456789</p>
      </div>
      <div class="top-bar-info" style="display: flex;">
        
        <i style="padding: 11px;  color: #C71F2B;"  class="fas fa-envelope"></i>
        <p style="padding-top: 7px; color: white; font-size: 14px;">internetsolution@inet.bd</p>
      </div>
    </div>
    </header>
    <!--HEADER PART ENDS -->
    <!--NAVBAR PART STARTS -->

    <nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
        <div class="container">
            <a href="./home.php" class="navbar-brand"><h3>INTERNET<span style="color: #C71F2B;">SOLUTION</span></h3></a>
            <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="navbar-nav  ml-auto">
                  <li class="nav-item"><a href="./home.php" class="nav-link" style="color: #C71F2B;"><b>HOME</b></a></li>
                  <li class="nav-item"><a href="./packages.php" class="nav-link" style="color: #C71F2B;">PACKAGES</a></li>
                  <li class="nav-item"><a href="./coveragearea.php" class="nav-link" style="color: #C71F2B;">COVERAGE AREA</a></li>
                  <li class="nav-item"><a href="./products.php" class="nav-link" style="color: #C71F2B;">PRODUCTS</a></li>
                  <li class="nav-item"><a href="./blogs.php" class="nav-link" style="color: #C71F2B;">BLOGS</a></li>
                  <li class="nav-item"><a href="../ContactFrom_v17/index.php" class="nav-link" style="color: #C71F2B;">CONTACT</a></li>
                  <li class="nav-item"><a href="./userlogin.php" class="nav-link btn btn-danger text-white" style="color: #C71F2B;">LOGIN</a></li>


                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR ENDS -->
</body>
</html>