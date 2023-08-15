<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<style>

.carousel-item img{

  object-fit: contain;

  width: 100%;

  height: 500px;

}

img{

  display:inline-block;

  margin-right:20px;

}
button, input {
    overflow: visible;
    display: block;
}
.column {
  float: left;
  padding: 10px;
  margin:20px;
  
}



.right {
  width: 75%;

}


</style>

    <title>SDP</title>

  </head>

  <body style="background-color: rgb(212, 212, 212);"></body>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <img src="{{asset('images/sdp.jpg')}}" class="rounded-circle" alt="LOGO" width="60">&nbsp;

  <a class="navbar-brand" href="home">SDP</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">

        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="aboutus">About US</a>

      </li>

      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          Category

        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="game">Game</a>

          <a class="dropdown-item" href="movie">Movie</a>

          <a class="dropdown-item" href="ebook">eBooks</a>

          <a class="dropdown-item" href="music">Music</a>

        </div>

      </li>      

    </ul>

    <form class="form-inline my-2 my-lg-0" action="" method="POST">

 

      <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" aria-label="Search">

      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

    </form>&nbsp;

 

   

    <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            Profile

        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="">User Name ##</a>

          <a class="dropdown-item" href="">Purchased Transaction</a>

          <a class="dropdown-item" href="#">Log out</a>

        </div>

      </li>      

    </ul>

</span>

</div>

</nav>
  

  <div class="row">
     <div class="column left">
      <a href='game' target='_self'></a>
      <button type="button" style="height:80px ;width:150px">Game</button>
      <a href='movie' target='_self'></a>
      <button type="button" style="height:80px ;width:150px">Movie</button>
      <a href='ebook' target='_self'></a>
      <button type="button" style="height:80px ;width:150px">eBooks</button>
      <a href='music' target='_self'></a>
      <button type="button" style="height:80px ;width:150px">Music</button>

  </div>

  <div class="column right">
    <a href="description2"><img  src="{{asset('images/slime.jpg')}}" alt=""  style="width:150px;height:150px;margin-left: 8%;" ></a>
    <a  href=""><img  src="https://th.bing.com/th/id/OIP.ONBTlPr2467UfODnsSaeQgHaLH?w=115&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="game2"  style="width:150px;height:150px;margin-left: 8%;"></a>
    <a  href=""><img  src="https://th.bing.com/th/id/OIP.afsABCAa3Usml92oso_MCgHaJ3?w=130&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt=""  style="width:150px;height:150px;margin-left: 8%;"></a>
    <a  href=""><img  src="https://th.bing.com/th/id/OIP._uMoF_a-q6yrJovJptgv2gHaHa?w=173&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt=""  style="width:150px;height:150px;margin-left: 8%;"></a>
    ></a>
    <a href=""><img  src="https://th.bing.com/th/id/OIP.MIuQVWv0ArQTzW55eEk8OgHaKw?w=119&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt=""  style="width:150px;height:150px;margin-left: 8%;" 
      href=""><img  src="https://th.bing.com/th/id/OIP.Ddm7ith2lEELb7ZGtQkTTgHaKj?w=121&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt=""  style="width:150px;height:150px;margin-left: 8%;"
      href=""><img  src="https://th.bing.com/th/id/OIP.Jfbr4ogdSZBd53kcQLwpygHaK-?w=117&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"g alt=""  style="width:150px;height:150px;margin-left: 8%;"
      href=""><img  src="https://th.bing.com/th/id/OIP.CBGvX0Yqcc7nWM3hxqhQGQHaEo?w=278&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt=""  style="width:150px;height:150px;margin-left: 8%;"
    ></a>
  </div>
  </div>
 
 
  
 

  

 






 



 


  </div>
</div>
<div class="row" style="background-color: rgb(3, 3, 3);">
  <div class="col-md-4" style="margin-top:20px;">
    <Strong style="color: rgb(255, 0, 0);">WORKING HOURS</Strong><br><br>
    <p style="color:aliceblue"> Monday-Sunday 4:00Am-12Pm, <br> System close for Maintenance At Every Saturday 12Am-3pm   <br><br>  <p style="color: aliceblue;">&copy;Copyright </p> <strong style="color:rgb(255, 0, 0)">SDP Online digital Store</strong>.<br> <p style="color:aliceblue">Powered by SDP.com</p>
  </div>
  <div class="col-md-2" style="margin-top:20px;">
    <strong style="color:rgb(255, 0, 0)">Categories</strong><br>
    <a href="game">Game</a><br>
    <a href="movie">Movie</a><br>
    <a href="music">Music</a><br>
    <a href="ebook">eBook</a><br>
  </div>
  <div class="col-md-2" style="margin-top:20px;">
    <strong style="color:rgb(255, 0, 0)">AboutUs</strong><br>
    <a href="aboutus">Who We Are</a><br>
   
  </div>

  <div class="col-md-4" style="margin-top:20px;">
    <strong style="color:rgb(255, 0, 0)">Contact</strong><br>
    <p2 style="color:aliceblue">SDP@example.com<br></p2> <p2 style="color:aliceblue">123-456-7890<br><br></p2>
    <a  href="https://www.facebook.com"><img src="{{asset('images/facebook1.jpg')}}" width="50" alt="">
    </a>
    <a  href="https://www.instagram.com"><img src="{{asset('images/insta1.jpg')}}" width="50" alt="">
    </a>
    <a  href="https://wa.link/qvjr5n"><img src="{{asset('images/whatapps1.jpg')}}" width="50" alt="">
    </a>
 </div>
 </div>    

</div>



<!-- Optional JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>

