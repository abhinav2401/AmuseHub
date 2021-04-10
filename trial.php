<?php

include 'functions.php';
include 'connect.php';

	echo $username;
	$username = "CodeKar@abc.com";
	$com="SELECT userID FROM signup WHERE EMAILID = '$username'";
    $result=$db->query($com);
	$userID = $result->fetch_row()[0];
	echo $userID;
?>