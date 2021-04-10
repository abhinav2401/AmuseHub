<?php

include 'class/Rating.php';
include 'functions.php';
include 'connect.php';



$rating = new Rating();


if(!empty($_POST['action']) && $_POST['action'] == 'userLogin') {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$loginDetails = $rating->userLogin($user, $pass);	
	$loginStatus = 0;
	$userName = "";
	if (!empty($loginDetails)) {
		$loginStatus = 1;
		$_SESSION['userid'] = $loginDetails[0]['userID'];
		$_SESSION['username'] = $loginDetails[0]['EMAILID'];
		$userName = $loginDetails[0]['EMAILID'];
	}		
	$data = array(
		"username" => $userName,
		"success"	=> $loginStatus,	
	);
	echo json_encode($data);	
}

		

if(!empty($_POST['action']) && $_POST['action'] == 'saveRating'  
	&& !empty($_POST['rating']) 
	&& !empty($_POST['itemId']) && !empty($_POST['userID'])) {
		//$com="SELECT userID FROM signup WHERE EMAILID = '$username'";
        //$result=$db->query($com);
		//$userID = $result->fetch_row()[0];
		
		$rating->saveRating($_POST, $_POST['userID']);	
		$data = array(
			"success"	=> 1,	
		);
		echo json_encode($data);		
}

?>