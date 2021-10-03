<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;1,300&display=swap" rel="stylesheet">

  <style>

    /* FEATURES */

#features{
    padding-top: 50px;
    padding-bottom: 50px;
    margin-top: 100px;
}

.feature-row{
    width: 100%;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
}
.feature-col{
   display: flex;
   flex-direction: column;
   justify-content: space-between;
   height: 300px;
}
.feature-col img{
    width: 300px;
}

.feature-col>a{
    display: inline-block;
}
     </style>
   </head>

   <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Openstudia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">E-Book</a>
        </li>
                
        <li class="nav-item">
          <a class="nav-link" href="#">Stationary Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#"> Workshps & Events</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Online Tutor 
          </a>
          
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Find</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/c3.jpg" alt="Los Angeles" width="1500" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/c4.jpg" alt="Chicago" width="1500" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/c10.jpg" alt="New York" width="1500" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>
  
  <div class="container-fluid">
  <div class="row">
    
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/c3.jpg" class="img-fluid">
    </div> 

    <div class="col-lg-6 col-md-6 col-12">
      <h2> E-Learning System</h2>
      <P>This is a website project on a e-learning system on behalf of Akansha Foundation
         It is a dummy project on the E-Learning system in whch you will find  Statonary Products,E-Book,
         WorkShops & Events and Online Tutor.This is created by me.
        -Priyanka Sahoo

      </P>
      <a href="#" class="btn btn-success">Check more</a>
    </div> 
</div>
   
  </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Featured Events</h2>
  </div>
  
  <div class="container-fluid">
  <div class="row">
    
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
        <img class="card-img-top" src="images/c4.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Workshops&Events</h4>
            <a href="#" class="btn btn-primary">check</a>
        </div>
      </div>
    </div> 

    <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
        <img class="card-img-top" src="images/c5.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">E-stationary</h4>
            <a href="#" class="btn btn-primary">check</a>
        </div>
      </div>
    </div> 


    <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
        <img class="card-img-top" src="images/cc18.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">E-Book</h4>
            <a href="#" class="btn btn-primary">check</a>
        </div>
      </div>
    </div> 

    <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
        <img class="card-img-top" src="images/c2.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Online Tutor</h4>
            <a href="transferhistory.php" class="btn btn-primary">check</a>
        </div>
      </div>
    </div> 
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">contact</h2>
    </div>
    
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="POST">
        <div class="form-group bg-dark text-white" >
          <label>username</label>
          <input type="text" name="username" autocomplete="off" class="form-control">

          <label>email</label>
          <input type="text" name="email" autocomplete="off" class="form-control">

          <label>mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">

          <label>comment</label>
          <textarea class="form-control" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-success"> Submit </button>
      </form>
    </div>
  </section>

 

<section class="my-6">
  <div class="py-6">
    <h2 class="text-center">Services</h2>
  </div>
  
  <div class="container-fluid">
  <div class="row">
    
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
        <img class="card-img-top" src="images/c5.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-text">html-5 -Handson!</h4>
            <a href="#" class="btn btn-primary">Check</a>
        </div>
      </div>
    </div> 

    <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
        <img class="card-img-top" src="images/cc9.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">CSS -Hands on</h4>
            <a href="#" class="btn btn-primary">check</a>
        </div>
      </div>
    </div> 


    <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
        <img class="card-img-top" src="images/c5.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Team-up Skills</h4>
            <a href="#" class="btn btn-primary">check</a>
        </div>
      </div>
    </div> 

</section>

    
    <section class="my-6">
  <div class="py-6">
    <h2 class="text-center">Listed Stationary</h2>
  </div>
    
  <!---FEATURES--->
<section id="features">
    <div class="feature-row">
        <div class="feature-col">
            <img src="images/c10.jpg">
            <h2 class="card-title">Web development</h2>
           <a href=""> <button class="button" > $5-Buy</button></a>
        </div>
        <div class="feature-col">
            <img src="images/c9.jpg">
            <h2 class="card-title"> FrontendWeb development</h2>
            <a href=""><button class="button" >$10-Buy</button></a>
        </div>
        <div class="feature-col">
            <img src="images/cc18.png">
            <h2 class="card-title">CSS</h2>
            <a href=""><button class="button" >$5-Buy</button></a>
        </div>
    </div>
    
</section>

    




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>