<?php
require(__DIR__.'/import.php');

ob_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Album example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
  <main>

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    

    <?php
    $page = $_SERVER['PHP_SELF'];

    if(isset($_GET['url'])){
        $_GET['url']=urldecode($_GET['url']);
        $_GET['url']=trim($_GET['url'], '/');
        $_GET['url']=rtrim($_GET['url'], '/');
    }

    if(!isset($_GET['url']) || dir_in_tree($_GET['url'])){
        //If nothing specified or out of scope, redirect to '/'
        header("Location: ". $page ."?url=");
        echo "</ul></body></html>";
        exit;
    }

    $resource_url=$repo_root.$_GET['url'];

    if(is_file($resource_url)){
        header("Location: ". $resource_url);
        exit;
    }

    $dir=array_diff(scandir($resource_url), array('..', '.'));
	
    if(check_ownership($db, split_session()[1], $resource_url)===true){

		$imgurl='assets/img/rb.jpg';
        echo "<div class='col'>";
        echo "<div class='card shadow-sm'  href='modify.php?url=".$resource_url."'>";
        
        echo "<div class='card-body'>";
        // echo "<p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> ";
        echo "<div class='d-flex justify-content-between align-items-center'> ";
        echo "<div class='btn-group'> ";
        echo "<a class='hexLink' href='modify.php?url=".$resource_url."'>";
        echo "<img src='". $imgurl ."'>";
        echo "<p>Delete data</p>";
        echo "</a>";
        echo "</div>";
       
        echo "</div> ";
        echo "</div> ";
        echo "</div> ";
        echo "</div> ";
        echo "</div> ";
    }

    forEach(array_keys($dir) as $key){
        $url=$_GET['url'].'/'.$dir[$key];
		if(empty($url))
		continue;
        $x=explode("/", $url);
        
        $filename=end($x);


        $imgurl=filetypeimg($filename);


        if(str_contains($filename, ';'))
        {

        $filename = explode(';', $filename, 2);
        $filename = $filename[1];
        } 
        
        //$imgurl=filetypeimg($filename);
      
        $name_ext=explode('.', $filename);
        $ext=$name_ext[0];
        if(str_contains($filename, '.'))
        {
          
          echo "<div class='col'>";
          echo "<a class='card shadow-sm' href='item.php?url=". urlencode($url) ."'>";
          echo "<img src='". $imgurl ."'>";
          echo "</a>";
          echo "<div class='card-body'>";
          echo "<p style='text-align:center;font-size:150%;' class='card-text'><b>". strtoupper($ext) ."</b></p> ";
  
          // echo "<p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> ";
          echo "<div class='d-flex justify-content-between align-items-center'> ";
          echo "<div class='btn-group'> ";
          echo "<a href='addfavourites.php?url=". urlencode($url) ."'>";
          echo " <button type='button' class='btn btn-sm btn-outline-secondary' >Favorite</button>";
          echo "</a>";
          
          echo "</div> ";
          echo "</div> ";
          echo "</div> ";
          echo "</div> ";
        }

else{

  
        echo "<div class='col'>";
        echo "<a class='card shadow-sm' href='?url=". urlencode($url) ."'>";
        echo "<img src='". $imgurl ."'>";
        echo "</a>";
        echo "<div class='card-body'>";
        echo "<p style='text-align:center;font-size:150%;' class='card-text'><b>". strtoupper($ext) ."</b></p> ";

        // echo "<p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> ";
        echo "<div class='d-flex justify-content-between align-items-center'> ";
        echo "<div class='btn-group'> ";
        
        echo "</div> ";
        echo "</div> ";
        echo "</div> ";
        echo "</div> ";
}
       // echo "<img src='". $imgurl ."'>";
      //  echo "<p>". $filename ."</p>";
        //echo "</a>";
       // echo "</div>";
        //echo "</li>";
    }

    ?>

  </div>
  </div>
  </div>
  </body>
</html>

<?php ob_flush(); ?>
