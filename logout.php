<?php 
session_start();
if(isset($_SESSION['loggeduser'])){
    session_destroy();
    header('location:index.php');
}
?>