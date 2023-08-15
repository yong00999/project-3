<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> </title>
    <link href="{{ url('/css/layout.css') }}" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<//link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js" ></script>
    
    
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bx-user'></i>
      <span class="logo_name">Admin</span>
    </div>
    <ul class="nav-links">

      <li>
        <div class="iocn-link">
          <a href="">
            <i class='bx bx-package'></i>
            <span class="link_name">Product</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" >Product</a></li>
          <li><a href="insertProduct">Add Product</a></li>
          <li><a href="viewProduct">View Product</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="">
          <i class="bx bx-user"></i>
            <span class="link_name">User</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" >USER</a></li>
          <li><a href="viewUser">Edit User</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="">
            <i class='bx bx-package'></i>
            <span class="link_name">Product</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" >Category</a></li>
          <li><a href="insertCategory">Add Category</a></li>
          <li><a href="viewCategory">View Category</a></li>
        </ul>
      </li>

      <li>
        <a href="">
            <i class='bx bx-receipt'></i>
          <span class="link_name">Order</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="viewOrder">Order</a></li>
        </ul>
      </li>
      <li>
  
    <div class="profile-details">
      <div class="profile-content">
      </div>
      <div class="name-job">
        <div class="profile_name">Logout</div>
      </div>
      <a href="logout"><i class='bx bx-log-out'></i></a>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">

    <div class="home-content">

      <i class='bx bx-menu' ></i>

      <span class="text"></span>

    </div>
    @yield('content')

  </section>

</body>
</html>

<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
    let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
    arrowParent.classList.toggle("showMenu");
    });
    }

    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
    });
</script>