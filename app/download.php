<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickShare</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/style/app.css">
   
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li class="logo" id="logo">QuickShare </li>
            </ul>
            <div class="cursor" id="cursor"></div>
        </nav>
    </header>
    <main>

    <?php
    $title=$filename=$newfilename="";
        require('config.php');
        $fid=$_REQUEST['download'];
        $query="select * from files where id=".$fid;

        $result=mysqli_query($con,$query);
  
        while($row=mysqli_fetch_array($result)){
          $title=$row['title'];
          $filename=$row['files_name'];
          $newfilename=$row['new_filename'];

        //   echo "./upload/$newfilename";
        }
        
    ?>
        <div class="form-container"  id="form">
            
            <div >
                <h3>download</h3>
                <div class="dsvg">
                     <svg class="downloader__top-icon" viewBox="0 0 170 170"><g fill="#d4d7d9" fill-rule="evenodd"><path d="M145.104 24.896c33.195 33.194 33.195 87.014 0 120.208-33.194 33.195-87.014 33.195-120.208 0C-8.3 111.91-8.3 58.09 24.896 24.896 58.09-8.3 111.91-8.3 145.104 24.896zm-7.071 7.071c-29.29-29.29-76.777-29.29-106.066 0-29.29 29.29-29.29 76.777 0 106.066 29.29 29.29 76.777 29.29 106.066 0 29.29-29.29 29.29-76.777 0-106.066z"></path><path d="M82 100.843V59.007A4.006 4.006 0 0 1 86 55c2.21 0 4 1.794 4 4.007v41.777l15.956-15.956a4.003 4.003 0 0 1 5.657 0 4.004 4.004 0 0 1 0 5.657l-22.628 22.628a3.99 3.99 0 0 1-3.017 1.166 3.992 3.992 0 0 1-3.012-1.166L60.328 90.485a4.003 4.003 0 0 1 0-5.657 4.004 4.004 0 0 1 5.657 0L82 100.843z"></path></g></svg>
                </div>
               
               

                
                <div class="inputblock filename">
                    <h5><?php echo $filename; ?></h5>
                </div>
                <div class="download">
                
                   <a download href="<?php echo "./upload/$filename";  ?>" > <i class="fa fa-download"></i> Download</a>
                </div>
                
            </div>

            
            

            
           
              
         
            </form>

        </div>
    </main>
</body>
<script src="/script/script.js"></script>
<script src="/script/upload.js"></script>
</html>


<script>

</script>