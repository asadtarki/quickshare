<?php
  
    require("./config/config.php");

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   

    $query="insert into user values(null,'".$name."','".$email."','".$password."')";


    $res=mysqli_query($con,$query);

    if($res){
        $query="select * from user where email='".$email."' and password='".$password."'";
        $res=mysqli_query($con,$query);
       

        if(mysqli_num_rows($res)>0){
            $row=mysqli_fetch_row($res);
            session_start();
            $_SESSION['loggeduser']=$row[0];
            $_SESSION['failed']="";
            header('location:share.php');
        }
    }


  
?>


