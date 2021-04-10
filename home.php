

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Dashboard</title>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px"> 


  <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    }
    img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
    @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><h3>AmuseHub</h3></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <span class="navbar-text"></span>
  <ul class="navbar-nav px-3">
  <li class="nav-item text-nowrap">
    <a class="nav-link" href="signout.php"><h4>Sign out</h4></a>
  </li>
  </ul>
</nav>
<nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar1">
  <a href="javascript:void(0)" onclick="w3_close1()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="signout.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Sign Out</a>
  </div>
</nav>
<div class="w3-opacity">
  
  <span class="w3-button w3-xxlarge w3-white w3-right" onclick="w3_open1()"><i class="fa fa-bars"></i></span>
  
  <div class="w3-clear"></div>
  
  
  </div>
<div class="container-fluid">
  <div class="row">
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
      <a class="nav-link" href="#" onclick="changeto('')">
        <span data-feather="home"></span>
        Home
      </a>
    </li>
    
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span >Favourites</span>
      <a class="d-flex align-items-center text-muted" href="favourites.php" aria-label="Create a new folder">
      <span data-feather="star"></span>
      </a>
    </h6>
    
    <ul class="nav flex-column mb-2">
    </ul>
    </div>
  </nav>

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" >
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 style="text-align:center;" class="h2">WELCOME AMIGO!!!!!!!</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
      <a class="btn btn-sm btn-outline-secondary" href="uploadimg.php"><span data-feather="share"></span>&nbsp;Upload files</a>
      <a href="search.php" class="btn btn-sm btn-outline-secondary"><span data-feather="search"></span>&nbsp;Search</a>
      </div>
    </div>
    </div>
    <div class="embed-responsive embed-responsive-16by9" style="size: 500%;">
      <iframe class="embed-responsive-item" id="indexplaceholder" src="list.php" style="size: 500%;"></iframe>
    </div>
  </main>
  </div>
</div>
<script src="assets/js/jquery.min.js"></script>
</script><script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
<script>
  
feather.replace();

function changeto(url){
  document.getElementById("indexplaceholder").src='list.php?url='+decodeURIComponent(url);
}
</script>
</html>

    
</nav>
<nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar1">
  <a href="javascript:void(0)" onclick="w3_close1()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="index.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">SignOut</a>
  </div>
</nav>
  

 
 <!-- Footer -->
 <!-- 
 <footer class="w3-container w3-padding-32 w3-dark-grey">
 <div class="w3-row-padding">
 <h2 style="text-align:Center;">CREDITS</h2>
   <div style="text-align:right;"class="w3-third">
     
     <ul class="w3-ul w3-hoverable">
       <li class="w3-row-padding">
         <span class="w3-large">Parth Mittal</span><br>
         
       </li>
     </ul>
      
     <ul class="w3-ul w3-hoverable">
       <li class="w3-row-padding">
         <span class="w3-large">Jyotirmay Jain</span><br>
        
       </li> 
     </ul>
   </div>
   <div style="text-align:right;" class="w3-third">
      
     <ul class="w3-ul w3-hoverable">
       <li class="w3-row-padding">
         <span class="w3-large">Ujjwal Tyagi</span><br>
         
       </li>
     </ul>
      
     <ul class="w3-ul w3-hoverable">
       <li class="w3-row-padding">
         <span class="w3-large">Abhinav Goel</span><br>
        
       </li> 
     </ul>
   </div>

 </div>
 </footer>
 -->
<!-- End page content -->
</div>

<script>
  // Toggle grid padding
  
  // Open and close sidebar
  function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
  function w3_open1() {
    document.getElementById("mySidebar1").style.width = "100%";
    document.getElementById("mySidebar1").style.display = "block";
  }
  
  function w3_close1() {
    document.getElementById("mySidebar1").style.display = "none";
  }
  </script>



  <script src="assets/js/jquery.min.js"></script>
</script><script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script>
  
feather.replace();

function changeto(url){
  document.getElementById("indexplaceholder").src='list.php?url='+decodeURIComponent(url);
}
</script>

</body>
</html>