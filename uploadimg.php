<?php

require(__DIR__.'/import.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    
    $email = split_session()[1];
	$target_dir = 'assets/img/';
	$target_file = $target_dir .$email.';'. basename($_FILES["filetoupload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	//$tag_array= json_decode($_POST["tags"], true);
	//$tag_arrays = array();
	//foreach($tag_array as $arr){
	//	if(!isset($arr['value'])){
	//		continue;
	//	}
	//	array_push($tag_arrays, $arr['value']);
	//}

	$name = $target_dir.$email.';' . $_POST["name2"] . '.' .$imageFileType;

	$extensions = array("jpg");

	// Check if file already exists
	if (file_exists($target_file)) {
	  echo "Sorry, file already exists.";
	  $uploadOk = 0;
	}

	// Check file size
	if ($_FILES["filetoupload"]["size"] > 50000000000) {
	  echo "Sorry, your file is too large.";
	  $uploadOk = 0;
	}

	// Allow certain file formats
	if( !in_array($imageFileType , $extensions)  ) {
	  echo "Sorry,only jpg file is allowed.";
	  $uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	  echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else
	 {

	  if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $name)) {
		// add tags
		// $tagg = add_tag($db, $name ,$tag_arrays);
        //$fqf=$folder_root . '/'. $email .$folder;
        //$com="UPDATE {$table_userdata} SET files = concat(files, '{$fqf}', ';') WHERE EMAILID = '{$email}'";
       // $db->query($com);
		echo "The file ". htmlspecialchars( basename( $_FILES["filetoupload"]["name"])). " has been uploaded." . $tagg;
        header("location: upload.php");
	  } else
	  {
		echo "Sorry, there was an error uploading your file.";
	  }
	}
}
?>
<!DOCTYPE html>
<html>

<head>

    <title>
        Select and upload multiple
        files to the server
    </title>
	<link rel="stylesheet" href="assets/css/tagify.css"></link>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"></link>
	<link rel="stylesheet" href="assets/css/signin.css"></link>

<style>
body {
  background-image: url('assets/img/it.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

</style>
 </head>

<body>
	

    <!-- multipart/form-data ensures that form
    data is going to be encoded as MIME data -->
    <form action="" class="form-signin" method="post"
            enctype="multipart/form-data">

        <h2 class="h3 mb-3 font-weight-normal text-center" style="font-size:40px; color:white;"> Upload Image</h2>



            <!-- name of the input fields are going to
                be used in our php script-->
			<input type="file" name="filetoupload" class="form-control-file btn btn-lg btn-block" id="filetoupload" multiple>
            </br>
			<input type="text" class="form-control" name="name2" id="name2" placeholder="Image File name after upload (without extension)"required>
            </br>
      
      
            </br></br>
            <button type="submit" class="btn btn-lg btn-primary btn-block"> Upload</button>


    </form>
    </body>

</html>
