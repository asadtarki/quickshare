<?php
    session_start();
    $title=$message="";
    $userid=$_SESSION['loggeduser'];
    require("./config/config.php");
    $target_dir = "upload/";
    $title=$_REQUEST['title'];
    $message=$_REQUEST['message'];
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $filename=basename($_FILES["file"]["name"]);
    $newfilename=time().basename($_FILES["file"]["name"]);

    $query="insert into files values(null,'".$userid."','".$title."','".$message."','".$filename."','".$newfilename."')";


    $res=mysqli_query($con,$query);

    if($res>0)
    {
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
      {
          // echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
          $query1="SELECT * FROM files ORDER BY ID DESC LIMIT 1";
          $result=mysqli_query($con,$query1);
  
          while($row=mysqli_fetch_array($result)){
            echo $row['id'];
          }
         
        


          
      }
    }
?>


