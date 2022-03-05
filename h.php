<?php
   require("config.php");
          // echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
          $query1="SELECT * FROM files ORDER BY ID DESC LIMIT 1";
          $result=mysqli_query($con,$query1);
  
        //   echo var_dump($result);
          while($row=mysqli_fetch_array($result)){
            echo $row['id'],$row['files_name'],$row['new_filename'];
          }
         
          


          
    
?>


