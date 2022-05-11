<?php

require("./config/config.php");

    $email=$_POST['email'];
    $password=$_POST['password'];

    // echo $email,$password;

    $query="select * from user where email='".$email."' and password='".$password."'";

    $res=mysqli_query($con,$query);
       

    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_row($res);
        session_start();
        $_SESSION['loggeduser']=$row[0];
        $_SESSION['failed']="";
        header('location:share.php');
    }
    else{
        session_start();
        $_SESSION['failed']="wrong username or password";
        header('location:index.php');
    }


  

?>