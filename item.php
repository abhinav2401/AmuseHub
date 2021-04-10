<?php
require(__DIR__.'/import.php');
include('inc/header.php');
$_GET['url']=trim($_GET['url'],"repo/");
$resource_url=$repo_root.$_GET['url'];

$x=explode("/", $resource_url);
        
        $filename=end($x);

// $filename = "CodeKar@abc.com;Demon Slayer.txt";
$filelink = $filename;
$filename = explode(';', $filename, 2);
$imglink = explode('.', $filename[1]);
$itemname = $imglink[0];
$imglink = $filename[0] . ';' . $imglink[0];
$imglink .= ".jpg";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="js/rating.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Item</title>
    <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>

<body>


    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                    src="assets/img/<?php echo $imglink ?>" style="height: 20%;width: 20%;">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest"><?php echo $filename[0]; ?></h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><?php echo $itemname?></h1>
                    
                    <p class="leading-relaxed">
                        <?php $myfile = fopen($resource_url, "r") or die("Unable to open file!");
                    if (filesize($resource_url)>0) {
                    $content = fread($myfile, filesize($resource_url));
                    $x = explode("\n", $content);
                    for($i=0;$i<count($x);$i++) {
                    if ($x[$i][0]>=1 &&  $x[$i][0]<=9) {
                        echo '<p><label><input type="checkbox">'.$x[$i].'</label></p>';
                    }
                    else
                    {
                        echo $x[$i];
                    }
                    echo "<br>";
                    }
                    }
                    else
                    {
                        echo "No Descr";
                    }
                    fclose($myfile); ?>
                    </p>
     
                </div>
            </div>
            <?php
    include 'class/Rating.php';
    
    $com="SELECT id FROM item WHERE name = '$filelink'";
        $result=$db->query($com);
        $item_id = $result->fetch_row()[0];
        $rating = new Rating();

        // echo $_SESSION['username'];
        // echo $_SESSION['userid'];
    // $com="SELECT userID FROM signup WHERE EMAILID = '$_SESSION['userID']'";
    // $result=$db->query($com);
    // $userID = $result->fetch_row()[0];

    // echo $item_id;

    $itemRating = $rating->getItemRating($item_id); 
    $itemDetails = $rating->getItem($item_id); 

    // echo var_dump($itemRating);
    // echo var_dump($itemDetails);

    $ratingNumber = 0;
    $count = 0;
    $fiveStarRating = 0;
    $fourStarRating = 0;
    $threeStarRating = 0;
    $twoStarRating = 0;
    $oneStarRating = 0; 
    foreach($itemRating as $rate){
        $ratingNumber+= $rate['ratingNumber'];
        $count += 1;
        if($rate['ratingNumber'] == 5) {
            $fiveStarRating +=1;
        } else if($rate['ratingNumber'] == 4) {
            $fourStarRating +=1;
        } else if($rate['ratingNumber'] == 3) {
            $threeStarRating +=1;
        } else if($rate['ratingNumber'] == 2) {
            $twoStarRating +=1;
        } else if($rate['ratingNumber'] == 1) {
            $oneStarRating +=1;
        }
    }
    $average = 0;
    if($ratingNumber && $count) {
        $average = $ratingNumber/$count;
    }   
    ?>  
<div id="ratingDetails">        
        <div class="row">           
            <div class="col-sm-3">              
                <h2><b>Rating and Reviews</b></h2>
                <h1 class="bold padding-bottom-7"><?php printf('%.1f', $average); ?> <small>/ 5</small></h1>                
                <?php
                $averageRating = round($average, 0);
                for ($i = 1; $i <= 5; $i++) {
                    $ratingClass = "btn-default btn-grey";
                    if($i <= $averageRating) {
                        $ratingClass = "btn-warning";
                    }
                ?>
                <button type="button" class="btn btn-sm <?php echo $ratingClass; ?>" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>   
                <?php } ?> 
        </div>
        </div>
            <div class="col-sm-3">
                <?php
                $fiveStarRatingPercent = round(($fiveStarRating/5)*100);
                $fiveStarRatingPercent = !empty($fiveStarRatingPercent)?$fiveStarRatingPercent.'%':'0%';    
                
                $fourStarRatingPercent = round(($fourStarRating/5)*100);
                $fourStarRatingPercent = !empty($fourStarRatingPercent)?$fourStarRatingPercent.'%':'0%';
                
                $threeStarRatingPercent = round(($threeStarRating/5)*100);
                $threeStarRatingPercent = !empty($threeStarRatingPercent)?$threeStarRatingPercent.'%':'0%';
                
                $twoStarRatingPercent = round(($twoStarRating/5)*100);
                $twoStarRatingPercent = !empty($twoStarRatingPercent)?$twoStarRatingPercent.'%':'0%';
                
                $oneStarRatingPercent = round(($oneStarRating/5)*100);
                $oneStarRatingPercent = !empty($oneStarRatingPercent)?$oneStarRatingPercent.'%':'0%';
                
                ?>
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fiveStarRatingPercent; ?>">
                            <span class="sr-only"><?php echo $fiveStarRatingPercent; ?></span>
                          </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;"><?php echo $fiveStarRating; ?></div>
                </div>
                
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fourStarRatingPercent; ?>">
                            <span class="sr-only"><?php echo $fourStarRatingPercent; ?></span>
                          </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;"><?php echo $fourStarRating; ?></div>
                </div>
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $threeStarRatingPercent; ?>">
                            <span class="sr-only"><?php echo $threeStarRatingPercent; ?></span>
                          </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;"><?php echo $threeStarRating; ?></div>
                </div>
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $twoStarRatingPercent; ?>">
                            <span class="sr-only"><?php echo $twoStarRatingPercent; ?></span>
                          </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;"><?php echo $twoStarRating; ?></div>
                </div>
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $oneStarRatingPercent; ?>">
                            <span class="sr-only"><?php echo $oneStarRatingPercent; ?></span>
                          </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;"><?php echo $oneStarRating; ?></div>
                </div>
            </div>      
            <div class="col-sm-3">
                <button type="button" id="rateProduct" class="btn btn-info login">Rate this product</button>
            </div>      
        </div>
        <div class="row">
            <div class="col-sm-7">
                <hr/>
                <div class="review-block">      
                <?php
                $itemRating = $rating->getItemRating($item_id);
                foreach($itemRating as $rating){                
                    $date=date_create($rating['created']);
                    $reviewDate = date_format($date,"M d, Y");
                ?>              
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="review-block-name">By <a href="#"><?php echo $rating['NAME']; ?></a></div>
                            <div class="review-block-date"><?php echo $reviewDate; ?></div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <?php
                                for ($i = 1; $i <= 5; $i++) {
                                    $ratingClass = "btn-default btn-grey";
                                    if($i <= $rating['ratingNumber']) {
                                        $ratingClass = "btn-warning";
                                    }
                                ?>
                                <button type="button" class="btn btn-xs <?php echo $ratingClass; ?>" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>                               
                                <?php } ?>
                            </div>
                            <div class="review-block-title"><?php echo $rating['title']; ?></div>
                            <div class="review-block-description"><?php echo $rating['comments']; ?></div>
                        </div>
                    </div>
                    <hr/>                   
                <?php } ?>
                </div>
            </div>
        </div>  
    </div>
    <div id="ratingSection" style="display:none;">
        <div class="row">
            <div class="col-sm-12">
                <form id="ratingForm" method="POST">                    
                    <div class="form-group">
                        <h4>Rate this product</h4>
                        <button type="button" class="btn btn-warning btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <input type="hidden" class="form-control" id="rating" name="rating" value="1">
                        <input type="hidden" class="form-control" id="itemId" name="itemId" value="<?php echo $item_id; ?>">
                        <input type="hidden" class="form-control" id="userID" name="userID" value="<?php echo $userID; ?>">
                        <input type="hidden" name="action" value="saveRating">
                    </div>      
                    <div class="form-group">
                        <label for="usr">Title*</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment*</label>
                        <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info" id="saveReview">Save Review</button> <button type="button" class="btn btn-info" id="cancelReview">Cancel</button>
                    </div>          
                </form>
            </div>
        </div>      
    </div>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            </section>
</body>

</html>