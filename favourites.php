<?php
require(__DIR__."/import.php");
ob_start();

$email=split_session()[1];
$com="SELECT favourites FROM {$table_userdata} WHERE EMAILID = '{$email}'";
$result=$db->query($com);
$r=$result->fetch_row()[0];
//$usr=$r[0];
//$result->close();
if(isset($_GET['url']))
{


if(is_file(urldecode($_GET['url'])))
{
  $_GET['url']=trim($_GET['url'],"repo/");
  //echo "<script>window.open('$mypdf', '_blank');</script>";
        header("Location: ". urldecode($_GET['url']));
        exit;
    }
}

   
    $r=trim($r, '/');
    $r=rtrim($r, '/');
    $r=explode(':',$r);
    
    $r=array_diff($r,array(''));


?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>List of things</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/hexagons.css">
    <link href='assets/gfonts/style.css' rel='stylesheet' type='text/css'>
    <script src="assets/js/jquery.min.js"></script>
  <link href="assets/css/dashboard.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" style="font-size:20px; color:white;" href="home.php">Home</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <span class="navbar-text"></span>
  <ul class="navbar-nav px-3">
  <li class="nav-item text-nowrap">
    <a class="nav-link" href="begining.php?logout=11">Sign out</a>
  </li>
  </ul>
</nav>



</nav>
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    

    <?php
    forEach( $r as $value)
    {
      
        
        $x=explode("/", $value);
        $filename=end($x);

        $imgurl=filetypeimg($filename);

        if(str_contains($filename, ';'))
        {

        $filename = explode(';', $filename, 2);
        $filename = $filename[1];
        } 
        $name_ext=explode('.', $filename);
        $ext=$name_ext[0];
        echo "<div class='col'>";
        echo "<a class='card shadow-sm' href='item.php?url=". urlencode($value) ."'>";
        echo "<img src='". $imgurl ."'>";
        echo "</a>";
        echo "<div class='card-body'>";
        echo "<p style='text-align:center;' class='card-text'>". strtoupper($ext) ."</p> ";

        echo "<p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> ";
        echo "<div class='d-flex justify-content-between align-items-center'> ";
        echo "<div class='btn-group'> ";
        
        echo "</div> ";
        echo "</div> ";
        echo "</div> ";
        echo "</div> ";
    }
   
?>




</div>
  </div>
  </div>
      </body>
    </html>

<?php ob_flush(); ?>
