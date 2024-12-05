<?php
    session_start();
    //if not login, go to index.php 
    if(!isset($_SESSION['user_id'])){
        header("Location: index.php");
        exit();
    } else {
        $_SESSION = array();
        session_destroy();
        setcookie('PHPSESSID', '', time()-3600, '/', '', 0, 0); //sanity checking
        header("Location: index.php");
        exit();
    }
    
    //if login, delete session, go to index.php
?>