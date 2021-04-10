<?php
if (session_id() == ""){
  session_start();
}


function set_session($email,$username,$hashed_password){
    $_SESSION['userid']=$email;
    $_SESSION['userpass'] = $hashed_password;
    $_SESSION['username'] = $username	;
    
    

    return 1;
}
function split_session(){
    if(!isset($_SESSION['uid'])) {
        header("Location: login.php");
        exit;
    }

    $session_data=$_SESSION['uid'];

    return explode('|', $session_data, 2);
}
function set_token($email){
    $_SESSION['uid']="email".'|'.$email;
    

    return 1;
}

function dir_in_tree($path){
    global $repo_root;

    $fqf = $repo_root. $path;
    if(file_exists($fqf) || is_dir($fqf)){
        return false;
    }

    return true;
}

function filetypeimg($file){
    $ext3="";
    if(str_contains($file, ';'))
    {
                                                // CodeKar@abc.com;Demon Slayer.txt
    
    $name_ext=explode(';', $file,2);            // ext3 = CodeKar@abc.com
    $ext3=$name_ext[0];                         
        $ext2=$name_ext[1];
    $ext2=explode('.', $ext2,2);
    $ext=$ext2[0];
    }
    else{
        $ext=$file;
        
    }
    $ret="";

    switch($file){

        case 'Food':
        
            $ret='assets/img/Food.jpg';
            break;

        case 'Anime':
        
            $ret='assets/img/Anime.jpg';
            break;

        case 'Games':
        
            $ret='assets/img/Online games.png';
            break;

        case 'DIY Decors':
        
            $ret='assets/img/DIY Decors.jpg';
            break;

        case 'Manga':
        
            $ret='assets/img/Manga.jpg';
            break;

        case 'Movies':
        
            $ret='assets/img/Movies.jpg';
            break;

        case 'Podcast':
        
            $ret='assets/img/Podcast.jpg';
            break;

        case 'TV shows':
        
            $ret='assets/img/TV shows.jpg';
            break;

        case 'News':
        
            $ret='assets/img/News.jpg';
            break;

        case 'Magazines':
        
            $ret='assets/img/Magazines.jpg';
            break;

        case 'Music':
        
            $ret='assets/img/Music.jpg';
            break;

        case 'Softwares':
        
            $ret='assets/img/Softwares.jpg';
            break;

        case 'Stand Up Comedy':
        
            $ret='assets/img/Stand Up Comedy.jpg';
            break;

        case 'Content Creators':
        
            $ret='assets/img/Content Creators.jpg';
            break;

        case 'Memes':
        
            $ret='assets/img/Memes.jpg';
            break;

        default:
            $ret="assets/img/".$ext3.';'.$ext.".jpg";
    }
    return $ret;

}
 /* function filetypeimg($file){
   
    if (str_contains($file, '.')) {
        $name_ext=explode('.', $file);
        $ext=$name_ext[0];
    }
    else{
        $ext=$file;
    }
    $ret="";
 
    switch($ext){
 
        case 'food':
        case 'anime':
        case 'games':
        case 'carpentary':
            */
?>
