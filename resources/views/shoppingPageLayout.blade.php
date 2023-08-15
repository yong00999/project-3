<!doctype html>
<style>
  .custom-background {
    background-color: #FAFAFA;
}
.nav-shop li{
  display:inline-block;margin-right:15px;
}

.nav-shop li button{
  padding:0;
  border:0;
  background:transparent;position:relative;
}

.nav-shop li:last-child{
  margin-left:40px;
}



.header_area .navbar{
  height:100px;
  background:#ffffff
  
}


</style>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="path/to/styles.css"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		    <link rel="stylesheet" href="css/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js" ></script>
    </head>
    <body class="custom-background">
    <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="{{ url('') }}">
			  <!--<img src="images/logo.png" alt="">-->
			  SDP Shop
			</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
			<li class="nav-item"><a class="nav-link" href="{{ url('') }}">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Category</a>
                <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="{{ url('shoppingShowProductPage') }}">All Product</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('getCatProduct/Game1') }}">Game</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('getCatProduct/Book1') }}">Book</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('getCatProduct/Movie1') }}">Movie</a></li>
                </ul>
			  </li>

            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><a href="{{ url('shoppingCartPage') }}"><i class="fa-solid fa-cart-shopping"></i></a><span class="nav-shop__circle"></span></button> </li>
              @guest
                      @if (Route::has('login'))
              <li class="nav-item"><a class="button button-header" href="{{ url('customerLoginPage') }}">Login / Register</a></li>
              @endif
                    @else
                            <li class="nav-item submenu dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('myAccount') }}">Account Setting</a>
                                    <a class="dropdown-item" href="{{ route('myOrder') }}">Order Detail</a>
                                </div>
                            </li>
                    @endguest
            </ul>
          </div>
        </div>
      </nav>
    </div>
    </header>
	<!--================ End Header Menu Area =================-->

        @yield('content')

  <!--================ Start footer Area  =================-->
  <script>
  let subMenu = document.getElementById("subMenu");

  function toggleMenu(){
    subMenu.classList.toggle("open-menu");
  }
</script>
</nav>
<footer>
  <div class="container">
    <div class="row">
    <div class="col">
        <h4>Contact</h4>
        <ul>
          <li><strong>PHONE:</strong> (+60)11-2704 6362/ 11-5788 5728</li>
          <li><strong>Hours:</strong> All Days Mon-Sun</li>
          <li><strong>Email:</strong> Dinganhenz@gmail.com <br> Yongzhongyi@gmail.com</li>
        </ul>
      </div>
      
      <div class="col">
        <h4>Customer Details</h4>
        <ul>
          <li><a href="shoppingCartPage">Shopping Cart</a></li>
          <li><a href="order">Transcation History</a></li>
       
         
        </ul>
      </div>
      <div class="col">
        <h4>Follow Us</h4>
        <ul class="social-icons">
          <li><a href="https://www.facebook.com/anhenz.ding/"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="https://twitter.com/SDP977313516199"><i class="fab fa-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/henzding888/"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
	<!--================ End footer Area  =================-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
	
  </body>
</html>
