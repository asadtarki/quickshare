<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickShare</title>
    
    <link rel="stylesheet" href="./style/signup.css">
   
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
        <div class="form-container"  id="form">
            <form   method="post" id="mForm" action="adduser.php">
            
            <div class="top" id="top">
            <?php

                    session_start();
                    if(isset($_SESSION['failed'])){

                        echo "<p class='error__message'>",$_SESSION['failed'],"</p>";
                    }
                ?>
                <h3>Signup</h3>  
                <div class="inputblock" id="ib0">    
                    <input type="text" placeholder="  " name="name" class="title" id="name" >
                    <label  class="mylabel">Name</label>
                </div> 
                
                <div class="inputblock">    
                    <input type="text" placeholder="  " name="email" class="title" id="email" >
                    <label  class="mylabel">Email</label>
                </div>

                <div class="inputblock ib2" id="ib2">    
                    <input type="password" placeholder="   " name="password" class="title" id="password" >
                    <label  class="mylabel">Password</label>
                </div>

                
                    
                   
                <div class="inputblock ib3" id="ib3">
                    <input type="submit" value="signup" id="loginbutton" class="disbutton" name="submit" disabled>
                    <a class="signuplink"href="index.php">Already have an account?login.</a>
                </div>
            </div>

            
            
            </form>

        </div>
        <div class="quickshare__text">
            <p>The simplest way to send the file</p>
        </div>
    </main>
</body>
<script src="./script/script.js"></script>
<script src="./script/validate.js"></script>
</html>


<script>

</script>