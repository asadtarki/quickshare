<?php 
    session_start();

    if(!isset($_SESSION['loggeduser'])){
        session_start();
        $_SESSION['failed']="please login";
        header('location:index.php');
    }

?>