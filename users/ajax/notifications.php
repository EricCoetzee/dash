<?php include_once('../includes/db/init.php') ?>
<?php 
    
    if(isset($_COOKIE['EzeeMax']) && isset($_COOKIE['ezeemaxMail']) && isset($_COOKIE['protection'])){
        $user = $_COOKIE['EzeeMax']; 
        $mailer = $_COOKIE['ezeemaxMail']; 
        $protection = $_COOKIE['protection']; 
    }elseif(isset($_SESSION['username'])){
        $user = $_SESSION['username'];
    }
        $db = new Database();
        $getRows = $db->getRows("SELECT * FROM `comments` WHERE `post_author` = '$user' AND viewed = 'no' ");
        if(count($getRows)>0){
        $CommentC = count($getRows);

        
        echo $CommentC ; 

        }else{
                echo "&#128172;";       
        } 
        ?> 
 