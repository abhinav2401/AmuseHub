<?php
require(__DIR__.'/import.php');

if(isset($_GET['url'])){
    $_GET['url']=urldecode($_GET['url']);
    $_GET['url']=trim($_GET['url'], '/');
    $_GET['url']=rtrim($_GET['url'], '/');
}
$resource_url=$repo_root.$_GET['url'];
    $ret = split_session()[1];
    $com="UPDATE {$table_userdata} SET favourites = concat(favourites,'{$resource_url}',':') WHERE EMAILID = '{$ret}'";
    $result=$db->query($com);
    if(!$result) {
        printf("Error message: %s\n", $db->error);
    }
    

header("location: list.php");


?>