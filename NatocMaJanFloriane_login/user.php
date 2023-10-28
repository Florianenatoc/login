<?php
include("connection.php");
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['user'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    

        <!-- Center elements -->
        <div class="col-md-2 d-none d-lg-block">
          <a href="#!" class="ms-md-2">
            <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="35" />
          </a>
        </div>
        <!-- Center elements -->

          <!-- User -->
          <div class="dropdown">
            <a class="text-reset dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
              id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22"
                alt="" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">My profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
        <!-- Right elements -->
      </div>
    </div>
  </div>
  <!-- Jumbotron -->

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white d-none d-lg-block">
    <!-- Container wrapper -->
    <div class="container-fluid justify-content-center justify-content-md-between">
      <!-- Left elements -->
      <div class="d-flex align-items-center">
        <button class="btn btn-outline-primary me-1" data-mdb-ripple-color="dark" type="button">
          <i class="fas fa-clipboard-list me-1"></i>Board
        </button>

        <button class="btn btn-link me-1" data-mdb-ripple-color="dark" type="button">
          MDB board
        </button>

        <button class="btn btn-outline-primary me-1 px-2" data-mdb-ripple-color="dark" type="button">
          <i class="fas fa-star"></i>
        </button>

        <button class="btn btn-outline-primary me-1" data-mdb-ripple-color="dark" type="button">
          <i class="fas fa-users me-2"></i>Team
        </button>

        <a href="">
          <img src="https://mdbootstrap.com/img/new/avatars/1.jpg" class="border rounded-circle" alt=""
            style="height: 30px" />
        </a>

        <a href="">
          <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="border rounded-circle" alt=""
            style="height: 30px" />
        </a>

        <a href="">
          <img src="https://mdbootstrap.com/img/new/avatars/3.jpg" class="border rounded-circle" alt=""
            style="height: 30px" />
        </a>

        <a href="">
          <img src="https://mdbootstrap.com/img/new/avatars/4.jpg" class="border rounded-circle" alt=""
            style="height: 30px" />
        </a>

        <a href="">
          <img src="https://mdbootstrap.com/img/new/avatars/5.jpg" class="border rounded-circle" alt=""
            style="height: 30px" />
        </a>
        <button type="button" class="btn btn-outline-primary btn-floating btn me-1" style="height: 30px; width: 30px">
          +2
        </button>

        <button class="btn btn-outline-primary me-1" data-mdb-ripple-color="dark" type="button">
          <i class="fas fa-user-plus me-2"></i>Invite
        </button>
      </div>
      <!-- Left elements -->

      <!-- Right elements -->
      <div>
        <button class="btn btn-outline-primary" data-mdb-ripple-color="dark" type="button">
          <i class="fas fa-concierge-bell me-1"></i>Tips
        </button>
        <button class="btn btn-outline-primary" data-mdb-ripple-color="dark" type="button">
          <i class="fas fa-bars me-2"></i>Show menu
        </button>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main id="intro" class="bg-image" style="
      background-image: url(https://mdbootstrap.com/img/new/fluid/city/018.jpg);
      height: 100vh;
    ">
  <div class="mask" style="background-color: rgba(0, 0, 0, 0.7)"></div>
</main>
<!--Main layout-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>


        <script src="js/bootstrap.min.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
</body>
</html>
<?php }
else{
    header("Location: index.php");
    exit();
}



?>