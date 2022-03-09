<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickShare</title>
    
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
        <div class="form-container"  id="form">
            <form  enctype="multipart/form-data" method="post" id="mForm">
            <div class="top" id="top">
                <h3>Upload files</h3>
               
                <div class="inputblock" id="ib0">
                    <input type="file" id="filepicker" class="file" name="file" required>
                </div>
                <div class="inputblock">
                    
                    <input type="text" placeholder="   " name="title" class="title" id="title" >
                    <label  class="mylabel">title</label>
                </div>

                <div class="inputblock ib2" id="ib2">
                    
                    <textarea class="message" placeholder="  " name="message" ></textarea>
                    <label  class="mylabel">message</label>
                </div>
                <div class="inputblock ib3" id="ib3">
                    
                    <input type="submit" value="get a link" id="linkbutton" class="linkbutton" name="submit"/>
                </div>
            </div>

            
            <div class="loadblock" id="loadblock">
                
                <h3>Uploading file</h3>
                <div class="showprogress" id="loaderwrapper">
                        <div class="loader"  id="loader" ></div>
                        <div class="perc" id="perc">0%</div>
                </div>

            </div>

            
           
              
            <div class="videoblock" id="videoblock">
                <div class="videowrapper">
                    <video autoplay loop muted>
                        <source src="transfer_comp.mp4"  type="video/mp4">
                    </video>
                </div>
                <div class="text">
                    <h5 class="text__title">you're done</h5>
                    <h5 class="text__stitle">copy your download link below</h5>
                </div>
                <div class="linklabel">
                    <h5 class="link" id="link"></h5>
                </div>
                
            </div> 

            </form>

        </div>
        <div class="quickshare__text">
            <p>The simplest way to send the file</p>
        </div>
    </main>
</body>
<script src="/script/script.js"></script>
<script src="/script/upload.js"></script>
</html>


<script>

</script>